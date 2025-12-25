<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <style>
    /* Wrapper khusus slider kategori */
    .category-slider::-webkit-scrollbar {
      height: 6px;
      /* tinggi scrollbar (kecil & tipis) */
    }

    .category-slider::-webkit-scrollbar-track {
      background: #fce7f3;
      /* soft pink pastel */
      border-radius: 10px;
    }

    .category-slider::-webkit-scrollbar-thumb {
      background: #f9a8d4;
      /* pink bold */
      border-radius: 10px;
    }

    .category-slider::-webkit-scrollbar-thumb:hover {
      background: #ec4899;
      /* sedikit lebih gelap ketika hover */
    }

    .swiper-button-next,
    .swiper-button-prev {
      color: #E26EE5;
      /* warna panah */
      scale: 0.7;
      /* kecilkan */
    }
    
    
  </style>


  <title>@yield('title', 'Document')</title>
  <link rel="shortcut icon" href="img/logopurplecreations.png" type="image/png">
</head>

<body class="min-h-screen overflow-x-hidden bg-white">
  {{-- Semua konten halaman akan masuk ke sini --}}
  {{ $slot }}

  {{-- Footer global --}}
  <x-footer />