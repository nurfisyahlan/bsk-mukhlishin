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

            $table->unsignedInteger('id_keluarga');

            $table->string('nama_anggota');
            $table->enum('hubungan', ['Istri', 'Anak']);
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
        Schema::dropIfExists('anggota_keluargas');
    }
};
