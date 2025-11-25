<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_katalog';
    public $incrementing = false; // karena manual id
    protected $keyType = 'string';

    protected $fillable = [
        'id_katalog',
        'nama_produk',
        'jenis',
        'harga',
        'gambar',
        'status'
    ];
}
