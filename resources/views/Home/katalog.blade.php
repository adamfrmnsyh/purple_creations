<x-navbar />
<x-hero-catalog />

<div class="category-slider w-full overflow-x-auto snap-x snap-mandatory flex gap-3 px-4 py-3">

    @php
    $kategori = [
    'All',
    'Bunga Papan',
    'Standing Flower',
    'Bunga Meja',
    'Paper Flower',
    'Handbouquet',
    'Money Bouquet',
    'Pecah Belah Parcel',
    'Parcel Buah',
    'Hampers Baby Born',
    'Handbouquet (Artificial)',
    'Bunga Meja (Artificial)',
    'Money Bouquet (Artificial)',
    ];
    @endphp

    @foreach ($kategori as $item)
    <button data-category="{{ $item }}"
        class="cat-btn px-5 py-2 shrink-0 bg-pink-200 text-pink-700 rounded-full snap-center">
        {{ $item }}
    </button>
    @endforeach


</div>

<div class="bg-white p-3 mt-10">
    <div class="max-w-7xl mx-auto bg-[#ffff] rounded-xl p-6 mt-[-30px]">

        <!-- MODE GRID (HANYA UNTUK ALL) -->
        <div id="gridMode" class="hidden">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">

                @foreach ($produk as $item)
                <div class="bg-white rounded-xl shadow-md overflow-hidden p-4 transform transition-transform duration-300 hover:scale-110"
                    data-type="{{ $item->jenis }}">


                    <img src="{{ asset('storage/' . $item->gambar) }}"
                        class="w-full aspect-square object-cover rounded-md" alt="{{ $item->nama_produk }}">


                    <h3 class="font-semibold text-lg mt-3">{{ $item->nama_produk }}</h3>
                    <p class="text-sm text-gray-500">{{ $item->jenis }}</p>
                    <p class="text-sm text-gray-600 line-clamp-2">{{ $item->deskripsi }}</p>

                    <div class="font-bold text-pink-600 mt-2">
                        Rp {{ number_format($item->harga, 0, ',', '.') }}
                    </div>

                    <a href="{{ route('pesanan.create', ['id_katalog' => $item->id_katalog]) }}"
                        class="block bg-pink-600 text-white text-center px-4 py-2 mt-3 rounded hover:bg-pink-700">
                        Pesan Sekarang
                    </a>

                </div>
                @endforeach

            </div>
        </div>

        <!-- MODE SWIPER (UNTUK KATEGORI BIASA) -->
        <div id="swiperMode">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    @foreach ($produk as $item)
                    <div class="swiper-slide product-item bg-white rounded-xl shadow-md overflow-hidden"
                        data-type="{{ $item->jenis }}">

                        <div class="transform transition-transform duration-300 hover:scale-110">
                            <img src="{{ asset('storage/' . $item->gambar) }}"
                                class="w-full object-cover" alt="{{ $item->nama_produk }}">
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
</div>

<script>
    const buttons = document.querySelectorAll('.cat-btn');
    const gridMode = document.getElementById('gridMode');
    const swiperMode = document.getElementById('swiperMode');

    // --- INIT SWIPER UNTUK MODE KATEGORI ---
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 20,
        loop: false,
        grabCursor: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            320: {
                slidesPerView: 1
            },
            640: {
                slidesPerView: 2
            },
            1024: {
                slidesPerView: 4
            },
        }
    });

    // --- FUNCTION PILIH KATEGORI ---
    function selectCategory(category) {

        // Highlight tombol aktif
        buttons.forEach(b => b.classList.remove('bg-pink-500', 'text-white'));
        const activeBtn = [...buttons].find(btn => btn.dataset.category === category);
        if (activeBtn) activeBtn.classList.add('bg-pink-500', 'text-white');

        // Mode ALL → tampilkan GRID
        if (category === "All") {
            gridMode.classList.remove("hidden");
            swiperMode.classList.add("hidden");
            return;
        }

        // Mode kategori → tampilkan SWIPER
        gridMode.classList.add("hidden");
        swiperMode.classList.remove("hidden");

        // Filter produk pada swiper
        document.querySelectorAll('.product-item').forEach(product => {
            const type = product.dataset.type.trim();
            product.style.display = (type === category) ? "block" : "none";
        });

        swiper.slideTo(0);
        swiper.update();
    }

    // --- EVENT CLICK BUTTON ---
    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            selectCategory(btn.dataset.category);
        });
    });

    // --- DEFAULT SAAT HALAMAN DIBUKA: pilih All ---
    window.addEventListener('DOMContentLoaded', () => {
        selectCategory("All");
    });
</script>






<x-footer />