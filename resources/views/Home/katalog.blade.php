<x-navbar />

<!-- Hero Section -->
<div class="bg-purple-100 min-h-[180px] flex items-center">
    <div class="px-10 mt-10">
        <h1 class="text-white text-4xl font-bold">Katalog Produk</h1>
        <p class="text-white/90 mt-2 text-lg">Temukan rangkaian bunga terbaik untuk momen spesialmu 🌸</p>
    </div>
</div>

<!-- Content -->
<div class="bg-purple-100 p-6">
    <div class="max-w-7xl mx-auto bg-[#abe257] rounded-xl">
        <!-- Catalog Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-5">

            @foreach ($produk as $item)
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:scale-[1.02] transition">
                <img src="{{ asset('storage/' . $item->gambar) }}"
                    class="w-full h-52 object-cover" alt="{{ $item->nama_produk }}">
                <div class="p-4">
                    <h3 class="font-semibold text-lg">{{ $item->nama_produk }}</h3>
                    <p class="text-sm text-gray-500 mb-2">{{ $item->jenis }}</p>
                    <p class="text-sm text-gray-500 mb-2">{{ $item->deskripsi }}</p>

                    <div class="font-bold text-pink-600">
                        Rp {{ number_format($item->harga, 0, ',', '.') }}
                    </div>
                </div>
                <a href="{{ route('pesanan.create', ['id_katalog' => $item->id_katalog]) }}"
                    class="bg-pink-600 text-white px-4 py-2 rounded hover:bg-pink-700">
                    Pesan Sekarang
                </a>

            </div>
            @endforeach

            @if ($produk->isEmpty())
            <p class="col-span-full text-center text-gray-600">Belum ada produk tersedia.</p>
            @endif

        </div>
    </div>
</div>

<x-footer />