<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use Illuminate\Http\Request;
use App\Models\Pesanan;

class PaymentController extends Controller
{
    public function checkout(Request $request)
    {
        // 1️⃣ Buat order_id
        $orderId = 'ORDER-' . time();

        // 2️⃣ SIMPAN PESANAN KE DATABASE (SEBELUM PAYMENT)
        $pesanan = Pesanan::create([
            'order_id'       => $orderId,
            'nama'           => $request->nama,
            'email'          => $request->email,
            'alamat'         => $request->alamat,
            'no_telp'        => $request->no_telp,
            'nama_produk'    => $request->nama_produk,
            'jenis'          => $request->jenis,
            'harga'          => $request->harga,
            'tgl_kirim'      => $request->tgl_kirim,
            'catatan'        => $request->catatan,
            'tipe_pembelian' => $request->tipe_pembelian,
            'status'         => 'unpaid',
        ]);

        // 3️⃣ KIRIM KE MIDTRANS
        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $pesanan->harga,
            ],

            'item_details' => [
                [
                    'id' => $pesanan->id,
                    'price' => $pesanan->harga,
                    'quantity' => 1,
                    'name' => $pesanan->nama_produk, 
                ]
            ],

            'customer_details' => [
                'first_name' => $request->nama,
                'email' => $request->email,
                'phone' => $request->no_telp,
                'billing_address' => [
                    'address' => $request->alamat,
                ],
            ],
        ];


        $snapToken = Snap::getSnapToken($params);

        return redirect()->back()->with('snapToken', $snapToken);
    }
}
