<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'pengumumen';

    // Primary key
    protected $primaryKey = 'id_pengumuman';

    // Kalau auto increment integer
    public $incrementing = true;
    protected $keyType = 'int';

    // Kolom yang bisa diisi mass-assignment
    protected $fillable = [
        'judul',
        'isi',
        'tanggal_publish',
    ];

    // Kolom yang diperlakukan sebagai tanggal
    protected $dates = ['tanggal_publish'];
}
