<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Katalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KatalogController extends Controller
{
    public function index()
    {
        $katalogs = Katalog::all();
        return view('admin.katalog.index', compact('katalogs'));
    }

    public function create()
    {
        return view('admin.katalog.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'jenis' => 'required|string',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|max:2048',
        ]);

        // Generate ID manual
        $lastKatalog = Katalog::orderBy('id', 'desc')->first();
        $lastNumber = $lastKatalog ? intval(substr($lastKatalog->id, 1)) : 0;
        $validated['id'] = 'K' . str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);

        // Upload gambar
        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('katalog', 'public');
        }

        Katalog::create($validated);

        return redirect()->route('admin.katalog.index')->with('success', 'Katalog berhasil ditambahkan');
    }


    public function edit(Katalog $katalog)
    {
        return view('admin.katalog.edit', compact('katalog'));
    }

    public function update(Request $request, Katalog $katalog)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            if ($katalog->gambar) {
                Storage::disk('public')->delete($katalog->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('katalog', 'public');
        }

        $katalog->update($validated);
        return redirect()->route('admin.katalog.index')->with('success', 'Katalog berhasil diperbarui');
    }

    public function destroy(Katalog $katalog)
    {
        if ($katalog->gambar) {
            Storage::disk('public')->delete($katalog->gambar);
        }
        $katalog->delete();

        return redirect()->route('admin.katalog.index')->with('success', 'Katalog berhasil dihapus');
    }
}
