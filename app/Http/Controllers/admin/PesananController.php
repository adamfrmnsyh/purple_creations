<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    // Menampilkan daftar pesanan
    public function index()
    {
        $pesanans = Pesanan::orderBy('created_at', 'desc')->get();
        return view('admin.pesanan', compact('pesanans'));
    }

    // Update status pesanan
    public function updateStatus(Request $request, $id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->status = $request->status;
        $pesanan->save();

        return redirect()->back()->with('success', 'Status pesanan berhasil diperbarui!');
    }
}
