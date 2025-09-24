<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;

    protected $table = 'keluargas'; 
    protected $primaryKey = 'id_keluarga'; 
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nama_kk',
        'alamat',
        'rt_rw',
    ];

    public function anggotakeluargas()
    {
        return $this->hasMany(AnggotaKeluarga::class, 'id_keluarga', 'id_keluarga');
    }
}

