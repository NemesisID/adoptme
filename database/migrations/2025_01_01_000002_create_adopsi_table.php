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
        Schema::create('adopsi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hewan_id')->constrained('hewan')->onDelete('cascade');
            
            // Kolom-kolom lama yang nanti akan dihapus oleh migrasi 'add_user_id_and_file_to_adopsi_table'
            $table->string('nama')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('email')->nullable();
            $table->text('alamat')->nullable();
            
            $table->enum('status', ['pending', 'disetujui', 'ditolak'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adopsi');
    }
};
