<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('meninggal', function (Blueprint $table) {
            $table->id('id_meninggal');
            $table->foreignId('anggota_keluarga_id')->constrained('anggota_keluarga')->onDelete('cascade');
            $table->date('tanggal_meninggal');
            $table->string('tempat_dimakamkan');
            $table->enum('status', ['Sudah Diberikan', 'Belum Diberikan'])->default('Belum Diberikan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('meninggal');
    }
};
