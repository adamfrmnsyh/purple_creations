<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Katalog;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    // Tampilkan form pesanan
    public function create(Request $request)
    {
        $produk = null;

        if ($request->has('id_katalog')) {
            $produk = Katalog::find($request->id_katalog);
        }

        return view('pesanan', compact('produk'));
    }

    // Simpan pesanan
    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required|string|max:255',
            'Email' => 'required|email',
            'Alamat' => 'required|string',
            'No_Telp' => 'required|string',
            'Nama_Produk' => 'required|string',
            'Harga' => 'required|numeric',
            'tgl_Kirim' => 'required|date',
            'Tipe_Pembelian' => 'required|string',
        ]);

        Pesanan::create([
            'Nama' => $request->Nama,
            'Email' => $request->Email,
            'Alamat' => $request->Alamat,
            'No_Telp' => $request->No_Telp,
            'Nama_Produk' => $request->Nama_Produk,
            'Jenis' => $request->Jenis,
            'Harga' => $request->Harga,
            'tgl_Kirim' => $request->tgl_Kirim,
            'Catatan' => $request->Catatan,
            'Tipe_Pembelian' => $request->Tipe_Pembelian,
            'ID_Katalog' => $request->ID_Katalog ?? null,
        ]);

        return redirect()->back()->with('success', 'Pesanan berhasil dikirim! 🌸');
    }
}
