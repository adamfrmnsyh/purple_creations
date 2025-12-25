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

        <h1 class="text-3xl font-bold text-center text-pink-600 mb-6">Flower Order Form</h1>

        @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('checkout') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Product Image</label>

                <div class="flex justify-center">
                    <img
                        src="{{ asset('storage/' . $produk->gambar) }}"
                        alt="Gambar Produk"
                        class="w-48 h-48 object-cover rounded-lg border shadow ">

                    {{-- kirim path gambar secara tersembunyi --}}
                    <input type="hidden" name="gambar" value="{{ $produk->gambar }}">
                </div>
            </div>

            {{-- Bagian Produk (readonly) --}}
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Product Name</label>
                <input type="text" name="nama_produk" value="{{ $produk->nama_produk ?? '' }}"
                    class="w-full border border-gray-300 p-2 rounded bg-gray-100" readonly>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Type</label>
                <input type="text" name="jenis" value="{{ $produk->jenis ?? '' }}"
                    class="w-full border border-gray-300 p-2 rounded bg-gray-100" readonly>
            </div>

            <!-- PRICE (TAMPILAN SAJA) -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Price</label>
                <input
                    type="text"
                    value="Rp {{ number_format($produk->harga ?? 0, 0, ',', '.') }}"
                    class="w-full border border-gray-300 p-2 rounded bg-gray-100"
                    readonly>
            </div>

            <!-- HARGA ASLI (DIKIRIM KE BACKEND) -->
            <input type="hidden" name="harga" value="{{ $produk->harga }}">



            <input type="hidden" name="id_katalog" value="{{ $produk->id ?? '' }}">


            {{-- Bagian Data Pemesan --}}
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Customer Name</label>
                <input type="text" name="nama" class="w-full border border-gray-300 p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Email</label>
                <input type="email" name="email" class="w-full border border-gray-300 p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Address</label>
                <textarea name="alamat" class="w-full border border-gray-300 p-2 rounded" rows="3" required></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Phone Number</label>
                <input type="text" name="no_telp" class="w-full border border-gray-300 p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Delivery Date</label>
                <input type="date" name="tgl_kirim" class="w-full border border-gray-300 p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Note</label>
                <textarea name="catatan" class="w-full border border-gray-300 p-2 rounded" rows="3"></textarea>
            </div>

            {{-- Pilihan Tipe Pembelian --}}
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-1">Purchase Type</label>
                <select name="tipe_pembelian" class="w-full border border-gray-300 p-2 rounded" required>
                    <option value="">-- Select Purchase Type --</option>
                    <option value="Antar">Delivery</option>
                    <option value="Ambil Sendiri">Pick Up</option>
                </select>
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('katalog.index') }}"
                    class="block bg-[#f48f8f] border border-[#f48f8f] text-white text-center px-4 py-2 mt-3 rounded-md hover:bg-white hover:text-[#f48f8f]">

                    ← Back
                </a>

                <button type="submit"
                    class="block bg-[#E26EE5] border border-[#E26EE5] text-white px-4 py-2 rounded-md">
                    Pay Now
                </button>

            </div>

        </form>


    </div>
    </div>


    <script src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>

    @if (session('snapToken'))
    <script>
        window.onload = function() {
            snap.pay("{{ session('snapToken') }}", {
                onSuccess: function(result) {
                    alert('Pembayaran berhasil!');
                    console.log(result);
                    // window.location.href = "/payment/success";
                },
                onPending: function(result) {
                    alert('Menunggu pembayaran');
                    console.log(result);
                },
                onError: function(result) {
                    alert('Pembayaran gagal');
                    console.log(result);
                },
                onClose: function() {
                    alert('Popup ditutup');
                }
            });
        };
    </script>
    @endif


</body>

</html>