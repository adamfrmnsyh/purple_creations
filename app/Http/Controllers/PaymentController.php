<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function checkout(Request $request)
    {
        // simpan data pesanan kalau mau (opsional dulu)
        // Order::create([...]);

        $params = [
            'transaction_details' => [
                'order_id' => 'ORDER-' . time(),
                'gross_amount' => $request->harga,
            ],
            'customer_details' => [
                'first_name' => $request->nama,
                'email' => $request->email,
                'phone' => $request->no_telp,
            ],
        ];

        $snapToken = Snap::getSnapToken($params);

        // BALIK KE HALAMAN PESANAN YANG SAMA
        return back()->with([
            'snapToken' => $snapToken
        ]);
    }
}

