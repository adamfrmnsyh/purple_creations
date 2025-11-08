<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesanan Florist</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center py-10">

    <div class="bg-white shadow-2xl rounded-2xl p-8 w-full max-w-3xl">
        <h1 class="text-3xl font-bold text-center text-pink-600 mb-6">Form Pemesanan Bunga</h1>

        @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('pesanan.store') }}" method="POST">
            @csrf

            {{-- Bagian Produk (readonly) --}}
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Nama Produk</label>
                <input type="text" name="nama_produk" value="{{ $produk->nama_produk ?? '' }}"
                    class="w-full border border-gray-300 p-2 rounded bg-gray-100" readonly>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Jenis</label>
                <input type="text" name="jenis" value="{{ $produk->jenis ?? '' }}"
                    class="w-full border border-gray-300 p-2 rounded bg-gray-100" readonly>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Harga</label>
                <input type="text" name="harga" value="{{ $produk->harga ?? '' }}"
                    class="w-full border border-gray-300 p-2 rounded bg-gray-100" readonly>
            </div>

            <input type="hidden" name="id_katalog" value="{{ $produk->id ?? '' }}">


            {{-- Bagian Data Pemesan --}}
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Nama Pemesan</label>
                <input type="text" name="nama" class="w-full border border-gray-300 p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Email</label>
                <input type="email" name="email" class="w-full border border-gray-300 p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Alamat</label>
                <textarea name="alamat" class="w-full border border-gray-300 p-2 rounded" rows="3" required></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Nomor Telepon</label>
                <input type="text" name="no_telp" class="w-full border border-gray-300 p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Tanggal Kirim</label>
                <input type="date" name="tgl_kirim" class="w-full border border-gray-300 p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Catatan</label>
                <textarea name="catatan" class="w-full border border-gray-300 p-2 rounded" rows="3"></textarea>
            </div>

            {{-- Pilihan Tipe Pembelian --}}
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-1">Tipe Pembelian</label>
                <select name="tipe_pembelian" class="w-full border border-gray-300 p-2 rounded" required>
                    <option value="">-- Pilih Tipe Pembelian --</option>
                    <option value="Antar">Antar</option>
                    <option value="Ambil Sendiri">Ambil Sendiri</option>
                </select>
            </div>

            <div class="flex justify-center">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                    Kirim Pesanan
                </button>
            </div>
        </form>
    </div>
    </div>

</body>

</html>