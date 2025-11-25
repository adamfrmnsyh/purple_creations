<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Katalog;

class KatalogController extends Controller
{
    public function index()
    {
        $jenis = request()->query('jenis');

        $produkQuery = Katalog::where('status', 1); // hanya produk aktif

        // Jika memilih kategori tertentu
        if ($jenis && $jenis !== 'all') {
            $produkQuery->where('jenis', $jenis);
        }

        $produk = $produkQuery->get();

        return view('home.katalog', compact('produk', 'jenis'));
    }
}
