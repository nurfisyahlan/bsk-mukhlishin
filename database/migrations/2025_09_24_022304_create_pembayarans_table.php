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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id('id_pembayaran');

            $table->unsignedInteger('id_keluarga');

            $table->enum('tahun', ['2023','2024','2025','2026']);
            $table->enum('bulan', [
                'Januari','Februari','Maret','April','Mei','Juni','Juli',
                'Agustus','September','Oktober','November','Desember'
            ]);
            $table->enum('status', ['Sudah Bayar','Belum Bayar'])->default('Belum Bayar');

            $table->timestamps();

            // Set FK
            $table->foreign('id_keluarga')
                  ->references('id_keluarga')
                  ->on('keluargas')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
