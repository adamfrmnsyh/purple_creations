<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanans';

    protected $fillable = [
        'Nama',
        'Email',
        'Alamat',
        'No_Telp',
        'Nama_Produk',
        'Jenis',
        'Harga',
        'tgl_Kirim',
        'Catatan',
        'Tipe_Pembelian',
        'ID_Katalog',
    ];

    public function katalog()
    {
        return $this->belongsTo(Katalog::class, 'ID_Katalog');
    }
}
