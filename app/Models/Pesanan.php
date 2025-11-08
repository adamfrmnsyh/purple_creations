<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanans';

    protected $fillable = [
        'nama',
        'email',
        'alamat',
        'no_telp',
        'nama_produk',
        'jenis',
        'harga',
        'tgl_kirim',
        'catatan',
        'tipe_pembelian',
        'id_katalog',
    ];

    public function katalog()
    {
        return $this->belongsTo(Katalog::class, 'ID_Katalog');
    }
}
