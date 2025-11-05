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

    public function edit($id)
    {
        $katalog = Katalog::findOrFail($id);
        return view('admin.katalog-edit', compact('katalog'));
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

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'jenis' => 'required',
            'harga' => 'required|numeric',
            'status' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $katalog = Katalog::findOrFail($id);

        $katalog->nama_produk = $request->nama_produk;
        $katalog->jenis = $request->jenis;
        $katalog->harga = $request->harga;
        $katalog->status = $request->status ? 1 : 0;

        // ✅ Jika upload gambar baru
        if ($request->hasFile('gambar')) {

            // Hapus gambar lama jika ada
            if ($katalog->gambar && \Storage::exists('public/' . $katalog->gambar)) {
                \Storage::delete('public/' . $katalog->gambar);
            }

            // Simpan gambar baru
            $path = $request->file('gambar')->store('katalog', 'public');
            $katalog->gambar = $path;
        }

        $katalog->save();

        return redirect()->route('katalog.index')->with('success', 'Data berhasil diperbarui!');
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
