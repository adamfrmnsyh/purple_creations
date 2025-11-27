  <!-- Navbar Fixed -->
  <header id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 bg-transparent">
    <div class="w-full max-w-7xl mx-auto px-6">
      <div class="flex h-20 items-center justify-between">

        <!-- Logo -->
        <a href="/" class="flex items-center">
          <img src="img/logopc.png" alt="Logo" class="h-20 md:h-24">
        </a>

        <!-- Desktop Menu -->
        <nav class="hidden md:block absolute left-[58%] transform -translate-x-1/2">
          <ul class="flex items-center justify-center gap-12 text-sm font-medium">
            <li><a class="text-[#4f056c] hover:text-[#de8bf3] transition" href="/">Home</a></li>
            <li><a class="text-[#4f056c] hover:text-[#de8bf3] transition" href="/katalog">Catalog</a></li>
            <li><a class="text-[#4f056c] hover:text-[#de8bf3] transition" href="/aboutUs">About Us</a></li>
            <li><a class="text-[#4f056c] hover:text-[#de8bf3] transition" href="#">Contact Us</a></li>
          </ul>
        </nav>

        <!-- Mobile Hamburger -->
        <button id="menu-btn"
          class="md:hidden text-[#4f056c] focus:outline-none text-3xl">
          ☰
        </button>

      </div>
    </div>


    <!-- Mobile Menu Slide -->
    <div id="mobile-menu"
      class="fixed top-0 right-0 w-64 h-full bg-[#fff9f1] shadow-lg transform translate-x-full transition-transform duration-300 z-[60]">

      <div class="p-6">
        <button id="close-menu" class="text-2xl text-[#4f056c] mb-6">✕</button>

        <ul class="flex flex-col gap-6 text-lg font-medium">
          <li><a class="text-[#4f056c] hover:text-[#de8bf3] transition" href="/">Home</a></li>
          <li><a class="text-[#4f056c] hover:text-[#de8bf3] transition" href="/katalog">Catalog</a></li>
          <li><a class="text-[#4f056c] hover:text-[#de8bf3] transition" href="#">About Us</a></li>
          <li><a class="text-[#4f056c] hover:text-[#de8bf3] transition" href="#">Contact Us</a></li>
        </ul>
      </div>

    </div>

    <!-- Overlay (blur background) -->
    <div id="overlay"
      class="fixed inset-0 bg-black bg-opacity-40 hidden z-50">
    </div>

  </header>