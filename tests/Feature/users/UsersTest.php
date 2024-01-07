<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersTest extends TestCase
{
    protected $user;
    protected $CSRF;

    public function setUp(): void
    {
        parent::setUp();
        $this->user = User::first();
        $this->CSRF = [
            "XSRF-TOKEN" => csrf_token(),
            "_token" => csrf_token()
        ];
    }

    public function test_create_user()
    {
        $user = [
            'role' => 2,
            'name' => 'test' . rand(0, 50),
            'user_name' => 'testuser' . rand(0, 50),
            'email' => 'test' . rand(0, 50) . '@admin.com',
            'mobile' => '01011' . rand(0, 50) . '6241',
            'password' => 'admin@admin.com',
            'password_confirmation' => 'admin@admin.com',
            'type' => 'admin',
            'code' => uniqid(),
            'status' => 1
        ];
        $response = $this->actingAs($this->user)
            ->json('POST', '/users', $user, $this->CSRF);

        unset($user['password_confirmation']);
        unset($user['role']);
        unset($user['code']);
        unset($user['password']);
        $response->assertRedirect(route('users.index'));
        $this->assertDatabaseHas('users', $user);
    }
}
