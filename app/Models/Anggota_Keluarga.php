<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaKeluarga extends Model
{
    use HasFactory;

    protected $table = 'anggota_keluargas';
    protected $primaryKey = 'id_anggota';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'id_keluarga',
        'nama_anggota',
        'hubungan',
    ];

    public function keluarga()
    {
        return $this->belongsTo(Keluarga::class, 'id_keluarga', 'id_keluarga');
    }
}
