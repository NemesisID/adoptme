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
        Schema::create('hewan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis'); // Contoh: Kucing, Anjing
            $table->string('ras')->nullable(); // Contoh: Persia, Bulldog
            $table->string('gender')->nullable(); // Jantan/Betina
            $table->string('umur')->nullable(); // Contoh: 2 Tahun / 5 Bulan
            $table->text('deskripsi')->nullable();
            $table->string('foto')->nullable(); // Path foto
            $table->enum('status', ['tersedia', 'diadopsi'])->default('tersedia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hewan');
    }
};
