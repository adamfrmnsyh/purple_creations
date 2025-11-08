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
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'alamat' => 'required|string',
            'no_telp' => 'required|string',
            'nama_produk' => 'required|string',
            'harga' => 'required|numeric',
            'tgl_kirim' => 'required|date',
            'tipe_pembelian' => 'required|string',
        ]);

        Pesanan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'nama_produk' => $request->nama_produk,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'tgl_kirim' => $request->tgl_kirim,
            'catatan' => $request->catatan,
            'tipe_pembelian' => $request->tipe_pembelian,
            'id_katalog' => $request->id_katalog ?? null,
        ]);

        return redirect()->back()->with('success', 'Pesanan berhasil dikirim! 🌸');
    }
}
