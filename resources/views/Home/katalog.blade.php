<x-navbar />

<x-hero-catalog />

<!-- Content -->

<div class="relative inline-block text-left pl-10">
    <button id="dropdownBtn" class="px-4 py-2 border rounded-lg">
        ALL
    </button>

    <div id="dropdownMenu" class="hidden absolute mt-2 w-40 bg-white shadow-lg rounded-lg">
        <button class="dropdown-item block w-full text-left px-4 py-2" data-category="all">All</button>
        <button class="dropdown-item block w-full text-left px-4 py-2" data-category="board">Board Flower</button>
        <button class="dropdown-item block w-full text-left px-4 py-2" data-category="standing">Standing Flower</button>
        <button class="dropdown-item block w-full text-left px-4 py-2" data-category="table">Table Flower</button>
    </div>
</div>

<div class="grid grid-cols-4 gap-6 mt-6" id="productList">

    <div class="product-card" data-category="board">
        <img src="img/board1.jpg" class="w-full">
        <p class="text-center">KARANGAN 1</p>
    </div>

    <div class="product-card" data-category="standing">
        <img src="img/standing1.jpg" class="w-full">
        <p class="text-center">KARANGAN 2</p>
    </div>

    <div class="product-card" data-category="table">
        <img src="img/table1.jpg" class="w-full">
        <p class="text-center">KARANGAN 3</p>
    </div>

</div>

<!--
<div class="bg-white p-3 mt-20">
    <div class="max-w-7xl mx-auto bg-[#ffff] rounded-xl p-6 mt-[-30px]">
        
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
  -->

  <script>
  const dropdownBtn = document.getElementById("dropdownBtn");
  const dropdownMenu = document.getElementById("dropdownMenu");
  const items = document.querySelectorAll(".dropdown-item");
  const products = document.querySelectorAll(".product-card");

  dropdownBtn.addEventListener("click", () => {
    dropdownMenu.classList.toggle("hidden");
  });

  items.forEach(item => {
    item.addEventListener("click", () => {
      const category = item.dataset.category;

      dropdownBtn.textContent = item.textContent; // Ubah text header

      // Filter produk
      products.forEach(product => {
        if (category === "all" || product.dataset.category === category) {
          product.classList.remove("hidden");
        } else {
          product.classList.add("hidden");
        }
      });

      dropdownMenu.classList.add("hidden");
    });
  });
</script>

<x-footer />