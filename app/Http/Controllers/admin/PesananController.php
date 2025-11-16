<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PesananController extends Controller
{
    public function index(Request $request)
    {
        $query = Pesanan::query();

        // 🔹 Filter tanggal dibuat
        if ($request->filled('tanggal_awal') && $request->filled('tanggal_akhir')) {
            $query->whereBetween('created_at', [
                $request->tanggal_awal . ' 00:00:00',
                $request->tanggal_akhir . ' 23:59:59',
            ]);
        }

        // 🔹 Filter status
        if ($request->filled('status') && $request->status !== 'Semua') {
            $query->where('status', $request->status);
        }

        $pesanans = $query->orderBy('created_at', 'desc')->get();

        return view('admin.pesanan', compact('pesanans'));
    }

    public function exportCsv(Request $request)
    {
        $query = Pesanan::query();

        // Terapkan filter yang sama
        if ($request->filled('tanggal_awal') && $request->filled('tanggal_akhir')) {
            $query->whereBetween('created_at', [
                $request->tanggal_awal . ' 00:00:00',
                $request->tanggal_akhir . ' 23:59:59',
            ]);
        }

        if ($request->filled('status') && $request->status !== 'Semua') {
            $query->where('status', $request->status);
        }

        $pesanans = $query->orderBy('created_at', 'desc')->get();

        $filename = 'riwayat_pesanan_' . now()->format('Ymd_His') . '.csv';

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];

        $callback = function () use ($pesanans) {
            $handle = fopen('php://output', 'w');

            // Header CSV
            fputcsv($handle, [
                'ID', 'Nama Pemesan', 'Email', 'Alamat', 'No. Telp', 'Nama Produk',
                'Jenis Bunga', 'Harga', 'Tanggal Kirim', 'Catatan', 'Tipe Pembelian',
                'Tanggal Pesanan Dibuat', 'Status'
            ]);

            // Data CSV
            foreach ($pesanans as $item) {
                fputcsv($handle, [
                    $item->id,
                    $item->nama,
                    $item->email,
                    $item->alamat,
                    $item->no_telp,
                    $item->nama_produk,
                    $item->jenis,
                    $item->harga,
                    $item->tgl_kirim,
                    $item->catatan,
                    $item->tipe_pembelian,
                    $item->created_at,
                    $item->status,
                ]);
            }

            fclose($handle);
        };

        return Response::stream($callback, 200, $headers);
    }
}
