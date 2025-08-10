<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('iuran_bulanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kepala_keluarga_id')->constrained('kepala_keluarga')->onDelete('cascade');
            $table->enum('tahun', ['2023','2024','2025','2026','2027','2028','2029','2030']);
            foreach (['januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember'] as $bulan) {
                $table->boolean("{$bulan}_lunas")->default(0);
                $table->date($bulan)->nullable();
            }
            $table->enum('status', ['Lunas', 'Belum Lunas'])->default('Belum Lunas');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('iuran_bulanan');
    }
};
