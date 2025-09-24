<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapPembayaran extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'rekap_pembayarans';

    // Primary Key
    protected $primaryKey = 'id_rekap';

    // PK auto increment
    public $incrementing = true;

    // Tipe PK
    protected $keyType = 'int';

    // Kolom yang bisa diisi mass-assignment
    protected $fillable = [
        'id_keluarga',
        'tunggakan',
        'terbilang',
        'status',
    ];

    /**
     * Relasi ke model Keluarga
     * Satu rekap pembayaran dimiliki oleh satu keluarga
     */
    public function keluarga()
    {
        return $this->belongsTo(Keluarga::class, 'id_keluarga', 'id_keluarga');
    }
}
