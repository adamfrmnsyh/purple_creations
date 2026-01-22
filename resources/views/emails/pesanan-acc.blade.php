<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <h2>Halo {{ $pesanan->nama }}</h2>

    <p>Pesanan Anda dengan detail berikut telah kami terima :</p>

    <ul>
        <li>Produk: {{ $pesanan->nama_produk }}</li>
        <li>Jenis: {{ $pesanan->jenis }}</li>
        <li>Harga: Rp {{ number_format($pesanan->harga, 0, ',', '.') }}</li>
        <li>Estimasi Diterima: {{ \Carbon\Carbon::parse($pesanan->tgl_kirim)->format('d/m/Y') }}</li>
    </ul>

    <p>Kami akan segera memproses pesanan Anda.</p>

    <p>Terima kasih 🙏</p>
    <p>Salam Hangat ~Purple Creations 🙏</p>
</body>
</html>
