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
  <header id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 bg-transparent">
    <div class="w-full max-w-7xl mx-auto px-6">
      <div class="flex h-20 items-center justify-between">

        <!-- Logo -->
        <a href="/" class="flex items-center">
          <img src="img/logopc.png" alt="Logo" class="h-24">
        </a>

        <!-- Menu -->
        <nav class="hidden md:block absolute left-[58%] transform -translate-x-1/2">
          <ul class="flex items-center justify-center gap-12 text-sm font-medium">
            <li><a class="text-[#4f056c] hover:text-[#de8bf3] transition" href="/">Home</a></li>
            <li><a class="text-[#4f056c] hover:text-[#de8bf3] transition" href="/katalog">Catalog</a></li>
            <li><a class="text-[#4f056c] hover:text-[#de8bf3] transition" href="#">About Us</a></li>
            <li><a class="text-[#4f056c] hover:text-[#de8bf3] transition" href="#">Contact Us</a></li>
          </ul>
        </nav>

      </div>
    </div>
  </header>

