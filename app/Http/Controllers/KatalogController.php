<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
    {
        $katalogs = Katalog::orderBy('created_at', 'desc')->get();
        return view('admin.katalog', compact('katalogs'));
    }

    public function create()
    {
        return view('admin.katalog-create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'id_katalog' => 'required|unique:katalogs,id_katalog',
            'nama_produk' => 'required',
            'jenis' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $gambar = $request->file('gambar')?->store('katalog', 'public');

        Katalog::create([
            'id_katalog' => $request->id_katalog,
            'nama_produk' => $request->nama_produk,
            'jenis' => $request->jenis,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'gambar' => $gambar,
            'status' => $request->status ?? 1,
        ]);

        return redirect()->route('katalog.index')->with('success', 'Katalog berhasil ditambahkan');
    }

    public function update(Request $request, Katalog $katalog)
    {
        $request->validate([
            'nama_produk' => 'required',
            'jenis' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['nama_produk', 'jenis', 'deskripsi', 'harga', 'status']);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('katalog', 'public');
        }

        $katalog->update($data);

        return back()->with('success', 'Katalog berhasil diperbarui');
    }

    public function destroy(Katalog $katalog)
    {
        if ($katalog->gambar) {
            @unlink(storage_path('app/public/' . $katalog->gambar));
        }

        $katalog->delete();
        return back()->with('success', 'Katalog berhasil dihapus');
    }
}
