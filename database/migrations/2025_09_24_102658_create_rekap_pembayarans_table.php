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
        Schema::create('rekap_pembayarans', function (Blueprint $table) {
            $table->id('id_rekap');
            $table->unsignedInteger('id_keluarga'); // kolom FK
            // Set foreign key
            $table->foreign('id_keluarga')
            ->references('id_keluarga') // kolom di tabel keluargas
            ->on('keluargas')           // tabel tujuan
            ->onDelete('cascade');      // kalau keluarga dihapus, rekap ikut kehapus
            
            $table->Integer('tunggakan'); 
            $table->Integer('terbilang'); 
            $table->enum('status',['Lunas','Belum Lunas'])->default('Belum Lunas'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekap_pembayarans');
    }
};
