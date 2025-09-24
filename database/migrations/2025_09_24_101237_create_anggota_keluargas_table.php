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
        Schema::create('anggota_keluargas', function (Blueprint $table) {
            $table->id('id_anggota');
            $table->unsignedInteger('id_keluarga'); // kolom FK

            $table->string('nama_anggota');
            $table->enum('hubungan', ['Istri', 'Anak']);
            $table->timestamps();

            // Set foreign key
            $table->foreign('id_keluarga')
                  ->references('id_keluarga') // kolom di tabel keluargas
                  ->on('keluargas')           // tabel tujuan
                  ->onDelete('cascade');      // kalau keluarga dihapus, anggota ikut kehapus
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_keluargas');
    }
};
