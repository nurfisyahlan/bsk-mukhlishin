<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayarans';
    protected $primaryKey = 'id_pembayaran';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'id_keluarga',
        'tahun',
        'bulan',
        'status',
    ];

    /**
     * Relasi ke Keluarga
     * Satu pembayaran dimiliki oleh satu keluarga
     */
    public function keluarga()
    {
        return $this->belongsTo(Keluarga::class, 'id_keluarga', 'id_keluarga');
    }

    /**
     * Scope: filter pembayaran yang sudah bayar
     */
    public function scopeSudahBayar($query)
    {
        return $query->where('status', 'Sudah Bayar');
    }

    /**
     * Scope: filter pembayaran yang belum bayar
     */
    public function scopeBelumBayar($query)
    {
        return $query->where('status', 'Belum Bayar');
    }
}
