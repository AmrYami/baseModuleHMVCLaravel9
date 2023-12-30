<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Tests\TestCase;
use Auth;

class AuthAPITest extends TestCase
{

    public function test_user_can_login_with_correct_credentials()
    {
        $user = User::first();

        $response = $this->post('/api/auth/login', [
            'email' => $user->email,
            'password' => 'admin@admin.com',
        ]);

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'token',
                'token_type',
                'expires_in',
                'user' => [
                    "id",
                    "name",
                    "user_name",
                    "email",
                    "mobile",
                    "email_verified_at",
                    "status",
                    "code",
                    "type",
                    "language",
                    "created_at",
                    "updated_at",
                    "deleted_at",
                    "banned_until",
                    "freeze"
                ]
            ]);
    }

    public function test_user_cannot_login_with_incorrect_password()
    {
        $user = User::first();

        $response = $this->from('/api/auth/login')->post('/api/auth/login', [
            'email' => $user->email,
            'password' => 'invalid-password',
        ]);

        $response
            ->assertStatus(401)
            ->assertJson([
                'error' => "Unauthorized",
            ]);
    }

//    public function test_refresh()
//    {
//        $user = User::first();
//        $token = auth()->login($user, 'api');
//        dd()
//        $response = $this->actingAs($user, 'api')->post('/api/auth/refresh');
//
////        $response = $this->post('/api/auth/refresh', [], [
////            "Content-Type" => "application/json",
////            "Authorization" => "bearer " . $token
////        ]);
//
//        $response
//            ->assertStatus(200)
//            ->assertJsonStructure([
//                'token',
//                'token_type',
//                'expires_in',
//                'user' => [
//                    "id",
//                    "name",
//                    "user_name",
//                    "email",
//                    "mobile",
//                    "email_verified_at",
//                    "status",
//                    "code",
//                    "type",
//                    "language",
//                    "created_at",
//                    "updated_at",
//                    "deleted_at",
//                    "banned_until",
//                    "freeze"
//                ]
//            ]);
//    }
//
//    public function test_a_user_can_register()
//    {
//        $user = [
//            'name' => 'test' . rand(0, 50),
//            'user_name' => 'testuser' . rand(0, 50),
//            'email' => 'test' . rand(0, 50) . '@admin.com',
//            'mobile' => '01011' . rand(0, 50) . '6241',
//            'password' => 'admin@admin.com',
//            'password_confirmation' => 'admin@admin.com',
//            'type' => 'crm admin',
//            'code' => uniqid(),
//            'status' => 1
//        ];
//
//        $response = $this->post('/register', $user, [
//            "XSRF-TOKEN" => csrf_token(),
//            "_token" => csrf_token()
//        ]);
//        unset($user['password_confirmation']);
//        unset($user['code']);
//        unset($user['password']);
//        $this->assertAuthenticated();
//        $this->assertDatabaseHas('users', $user);
//    }
//
//    public function test_can_a_user_logout()
//    {
//        $user = User::first();
//        $this->be($user);
//        $response = $this->post(route('logout'));
//
//        $response->assertRedirect(route('login'));
//        $this->assertGuest();
//
//    }

}
