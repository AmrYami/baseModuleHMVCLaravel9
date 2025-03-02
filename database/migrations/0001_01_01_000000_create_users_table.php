<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->json('name')->nullable();
//            $table->json('specialization')->nullable();
//            $table->json('hospital')->nullable();
//            $table->json('designation')->nullable();
//            $table->json('specialty')->nullable();
//            $table->json('languages')->nullable();
//            $table->json('experience')->nullable();
//            $table->json('description')->nullable();
//            $table->json('achievements')->nullable();
//            $table->json('studies')->nullable();
//            $table->json('work_experience')->nullable();
            $table->string('user_name')->unique();
            $table->string('email')->unique();
            $table->string('mobile', 35)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('status')->default(1);
            $table->string('code')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
//            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
