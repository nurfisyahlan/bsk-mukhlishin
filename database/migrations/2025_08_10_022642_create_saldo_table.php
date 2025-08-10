<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('saldo', function (Blueprint $table) {
            $table->id('id_saldo');
            $table->date('tanggal');
            $table->text('uraian')->nullable();
            $table->enum('rincian', ['Saldo Masuk', 'Saldo Keluar']);
            $table->decimal('saldo_masuk', 12, 2)->default(0);
            $table->decimal('saldo_keluar', 12, 2)->default(0);
            $table->decimal('total_saldo', 12, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('saldo');
    }
};
