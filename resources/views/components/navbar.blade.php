<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <title>Document</title>
</head>

<body class="w-full min-h-screen overflow-x-hidden">
  <header id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 bg-transparent">
  <div class="w-full px-12">
    <div class="flex h-16 items-center justify-between">

      <!-- Logo -->
      <div class="flex items-center">
        <a class="block text-teal-600" href="#">
          <span class="sr-only">Home</span>
          <img src="img/logo.svg" alt="" class="h-20">
        </a>
      </div>

      <!-- Menu -->
      <div class="hidden md:block">
        <nav aria-label="Global">
          <ul class="flex items-center gap-8 text-md font-medium">
            <li><a class=" text-white hover:text-gray-700" href="#">Beranda</a></li>
            <li><a class=" text-white hover:text-gray-700" href="#">Katalog</a></li>
            <li><a class=" text-white hover:text-gray-700" href="#">Tentang Kami</a></li>
            <li><a class=" text-white hover:text-gray-700" href="#">Kontak Kami</a></li>
          </ul>
        </nav>
      </div>

    </div>
  </div>
</header>


