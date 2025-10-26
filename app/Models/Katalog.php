<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama_produk',
        'jenis',
        'deskripsi',
        'harga',
        'gambar',
    ];

    public $incrementing = false; // ID bukan auto increment
    protected $keyType = 'string';
}
