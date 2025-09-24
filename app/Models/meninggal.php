<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meninggal extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'meninggals';

    // Primary Key
    protected $primaryKey = 'id_meninggal';

    // PK auto increment
    public $incrementing = true;

    // Tipe data PK
    protected $keyType = 'int';

    // Kolom yang bisa diisi mass-assignment
    protected $fillable = [
        'id_keluarga',
        'id_anggota',
        'tanggal',
        'jam',
        'tempat',
        'dikebumikan',
    ];

    /**
     * Relasi ke model Keluarga
     * Satu record meninggal dimiliki oleh satu keluarga
     */
    public function keluarga()
    {
        return $this->belongsTo(Keluarga::class, 'id_keluarga', 'id_keluarga');
    }

    /**
     * Relasi ke model AnggotaKeluarga
     * Satu record meninggal bisa terkait dengan satu anggota (nullable)
     */
    public function anggota()
    {
        return $this->belongsTo(AnggotaKeluarga::class, 'id_anggota', 'id_anggota');
    }
}
