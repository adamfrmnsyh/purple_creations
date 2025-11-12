<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <title>Document</title>
</head>

<body class="min-h-screen overflow-x-hidden bg-white">

  <!-- Navbar Fixed -->
  <header id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 bg-white backdrop-blur-md">
    <div class="w-full max-w-7xl mx-auto px-6">
      <div class="flex h-20 items-center justify-between">

        <!-- Logo -->
        <a href="/" class="flex items-center">
          <img src="img/logo.svg" alt="Logo" class="h-24">
        </a>

        <!-- Menu -->
        <nav class="hidden md:block mx-3">
          <ul class="flex items-center gap-8 text-md font-medium">
            <li><a class="text-gray-700 hover:text-[#de8bf3]" href="/">Beranda</a></li>
            <li><a class="text-gray-700 hover:text-[#de8bf3]" href="/katalog">Katalog</a></li>
            <li><a class="text-gray-700 hover:text-[#de8bf3]" href="#">Tentang Kami</a></li>
            <li><a class="text-gray-700 hover:text-[#de8bf3]" href="#">Kontak Kami</a></li>
          </ul>
        </nav>

      </div>
    </div>
  </header>

  <!-- Spacer for fixed navbar -->
  <div class="h-20"></div>