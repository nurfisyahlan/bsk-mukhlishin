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
        Schema::create('meninggals', function (Blueprint $table) {
        $table->id('id_meninggal');

        // Relasi ke keluarga
        $table->unsignedInteger('id_keluarga');
        $table->foreign('id_keluarga')
            ->references('id_keluarga')
            ->on('keluargas')
            ->onDelete('cascade');

        // Relasi ke anggota keluarga
        $table->unsignedBigInteger('id_anggota')->nullable();
        $table->foreign('id_anggota')
            ->references('id_anggota')
            ->on('anggota_keluargas')
            ->onDelete('cascade');

        $table->date('tanggal');
        $table->time('jam');
        $table->string('tempat');
        $table->string('dikebumikan');
        $table->timestamps();
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meninggals');
    }
};
