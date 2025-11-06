<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Katalog;

class KatalogController extends Controller
{
    public function index()
    {
        $produk = Katalog::all();
        return view('home.katalog', compact('produk'));
    }
}
