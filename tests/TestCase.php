<?php

namespace Tests;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Artisan;
use DB;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
//    use DatabaseMigrations;
    use RefreshDatabase;

    public function setUp(): void {
        parent::setUp();



        Artisan::call('migrate');
        $this->seed();
    }

    // public function tearDown(): void {
    //     parent::tearDown();
    //     DB::statement('drop database base_module_test;');
    // }
}
