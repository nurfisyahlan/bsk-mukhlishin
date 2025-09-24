<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'keluargas';

    // Primary Key
    protected $primaryKey = 'id_keluarga';

    // Apakah PK auto increment
    public $incrementing = true;

    // Tipe data PK
    protected $keyType = 'int';

    // Kolom yang bisa diisi mass-assignment
    protected $fillable = [
        'nama_kk',
        'alamat',
        'rt_rw',
        'no_hp',
    ];
}
