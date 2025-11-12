<x-navbar />

<!-- Hero Section -->
<div class="bg-white min-h-[180px] flex items-center justify-center">
    <div class="px-5">
        <h1 class="text-black text-7xl font-bold font-lobster">Our Catalog</h1>
    </div>
</div>

<!-- Content -->
<div class="bg-white p-3">
    <div class="max-w-7xl mx-auto bg-[#ffff] rounded-xl p-6 mt-[-30px]">
        <!-- Swiper Container -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                @foreach ($produk as $item)
                <div class="swiper-slide bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="transform transition-transform duration-300 hover:scale-110 hover:z-10 w-[250px]">
                        <img src="{{ asset('storage/' . $item->gambar) }}"
                            class="w-full  object-cover" alt="{{ $item->nama_produk }}">
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">{{ $item->nama_produk }}</h3>
                        <p class="text-sm text-gray-500 mb-2">{{ $item->jenis }}</p>
                        <p class="text-sm text-gray-500 mb-2 line-clamp-2">{{ $item->deskripsi }}</p>

                        <div class="font-bold text-pink-600">
                            Rp {{ number_format($item->harga, 0, ',', '.') }}
                        </div>
                    </div>
                    <a href="{{ route('pesanan.create', ['id_katalog' => $item->id_katalog]) }}"
                        class="block bg-pink-600 text-white text-center px-4 py-2 rounded hover:bg-pink-700 transition">
                        Pesan Sekarang
                    </a>

                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>


<x-footer />