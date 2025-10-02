<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'saldos';

    // Primary key
    protected $primaryKey = 'id_saldo';

    // Kalau auto increment integer
    public $incrementing = true;
    protected $keyType = 'int';

    // Kolom yang bisa diisi mass-assignment
    protected $fillable = [
        'saldo_sebelum',
        'rincian',
        'keterangan',
        'saldo_sesudah',
        'catatan',
    ];
}
