<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Katalog;
use App\Models\Pesanan;

class DashboardController extends Controller
{
    public function index()
    {
        $totalItem = Katalog::count();

        $totalPenjualan = Pesanan::where('status', 'Sudah ACC')->sum('harga');

        $totalPesanan = Pesanan::count();

        return view('admin.dashboard', compact(
            'totalItem',
            'totalPenjualan',
            'totalPesanan'
        ));
    }
}
