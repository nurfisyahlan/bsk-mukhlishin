<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaKeluarga extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'anggota_keluargas';

    // Primary Key
    protected $primaryKey = 'id_anggota';

    // Apakah PK auto increment
    public $incrementing = true;

    // Tipe data PK
    protected $keyType = 'int';

    // Kolom yang bisa diisi mass-assignment
    protected $fillable = [
        'id_keluarga',
        'nama_anggota',
        'hubungan',
    ];

    /**
     * Relasi ke model Keluarga
     * Satu anggota keluarga dimiliki oleh satu keluarga
     */
    public function keluarga()
    {
        return $this->belongsTo(Keluarga::class, 'id_keluarga', 'id_keluarga');
    }
}
