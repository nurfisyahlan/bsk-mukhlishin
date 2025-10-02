<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;

    // Nama tabel (opsional kalau sesuai konvensi Laravel)
    protected $table = 'inventaris';

    // Primary key
    protected $primaryKey = 'id_inventaris';

    // Kalau primary key bukan tipe increment integer standar, bisa set ini
    public $incrementing = true;
    protected $keyType = 'int';

    // Kolom yang bisa diisi (mass assignment)
    protected $fillable = [
        'nama_item',
        'jumlah',
        'tanggal_input',
        'status',
    ];

    // Format tanggal (opsional, kalau mau pastikan format date)
    protected $dates = ['tanggal_input'];
}
