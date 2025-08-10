<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('kepala_keluarga', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kepala_keluarga', 100);
            $table->enum('rt_rw', ['RT 01/RW 04', 'RT 02/RW 04', 'RT 03/RW 04', 'RT 04/RW 03', 'RT 03/RW 03']);
            $table->text('alamat')->nullable();
            $table->string('no_hp', 20)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kepala_keluarga');
    }
};
