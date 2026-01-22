<h2>Terima kasih {{ $pesanan->nama }}</h2>
<p>Pesanan {{ $pesanan->order_id }} sudah dibayar.</p>
<p>Total: Rp {{ number_format($pesanan->harga,0,',','.') }}</p>
