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
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Awalnya 'nama', nanti di-rename jadi 'name'
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('no_hp')->nullable(); // Sesuai tebakan umum
            $table->text('alamat')->nullable();
            $table->integer('umur')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('path_foto_ktp')->nullable();
            $table->string('role')->default('user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengguna');
    }
};
