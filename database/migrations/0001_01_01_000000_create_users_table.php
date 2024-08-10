<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Secara default ketika membuat file laravel baru sudah terbuat komponen untuk User
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            // Penggunaan id(); digunakan karena default nya sebagai big integer dan menjadikannya primary key
            $table->id();
            // Atau bisa juga ditulis dengan menyatakan secara spesifik umumnya laravel menggunakan yang atas
            // Kalau secara soal yang diminta yang bawah integer dan primary.
            // $table->integer('id')->primary();
            $table->string('name');
            // Penggunaan String digunakan pada email dan unique digunakan karena agar email yang sudah ada tidak dapat dipakai lagi
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
