<footer class="bg-[#fff1f7] border-t border-pink-200 mt-20">
  <div class="max-w-7xl mx-auto px-6 py-14 grid grid-cols-1 md:grid-cols-4 gap-10">

    <!-- Brand -->
    <div>
      <h2 class="text-2xl font-lobster text-[#d260ee] mb-3">Purple Creations</h2>
      <p class="text-gray-600 leading-relaxed">
        Creating meaningful moments with floral artistry crafted from soft tones
        and hand-picked blooms for every occasion.
      </p>
    </div>

    <!-- Navigation -->
    <div>
      <h3 class="text-lg font-semibold text-[#d260ee] mb-3">Explore</h3>
      <ul class="space-y-2 text-gray-700">
        <li><a href="/" class="hover:text-[#d87cc9] transition">Home</a></li>
        <li><a href="/katalog" class="hover:text-[#d87cc9] transition">Catalog</a></li>
        <li><a href="#" class="hover:text-[#d87cc9] transition">About Us</a></li>
        <li><a href="#" class="hover:text-[#d87cc9] transition">Contact</a></li>
      </ul>
    </div>

    <!-- Support -->
    <div>
      <h3 class="text-lg font-semibold text-[#d260ee] mb-3">Support</h3>
      <ul class="space-y-2 text-gray-700">
        <li><a href="#" class="hover:text-[#d87cc9] transition">FAQ</a></li>
        <li><a href="#" class="hover:text-[#d87cc9] transition">Refund Policy</a></li>
        <li><a href="#" class="hover:text-[#d87cc9] transition">Order Tracking</a></li>
        <li><a href="#" class="hover:text-[#d87cc9] transition">Shipping Info</a></li>
      </ul>
    </div>

    <!-- Contact -->
    <div>
      <h3 class="text-lg font-semibold text-[#d260ee] mb-3">Contact Us</h3>
      <p class="text-gray-700">📍 Jakarta, Indonesia</p>
      <p class="text-gray-700">📞 +62 812-3456-7890</p>
      <p class="text-gray-700">✉️ support@purplecreations.com</p>

      <div class="flex gap-4 mt-4">
        <a class="hover:scale-110 transition" href="#">
          <img src="img/ig.png" class="h-7 opacity-80 hover:opacity-100" alt="">
        </a>
        <a class="hover:scale-110 transition" href="#">
          <img src="img/fb.png" class="h-7 opacity-80 hover:opacity-100" alt="">
        </a>
      </div>
    </div>
  </div>

  <!-- Bottom -->
  <div class="border-t border-pink-200 text-center py-4">
    <p class="text-gray-600 text-sm">
      © 2025 Purple Creations — Made with Love & Flowers 🌸
    </p>
  </div>
</footer>

<!-- Tawk.to Live Chat -->
<script type="text/javascript">
  var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
  (function() {
    var s1 = document.createElement("script"),
      s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/6916a52dc326601962b4e9f3/1ja07aeui';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
  })();
</script>

<!-- Navbar Scroll Effect -->
<script>
  window.addEventListener("scroll", function() {
    const navbar = document.getElementById("navbar");
    if (window.scrollY > 0) {
      navbar.classList.add("backdrop-blur-sm", "bg-white/10");
    } else {
      navbar.classList.remove("backdrop-blur-sm", "bg-white/10");
    }
  });
</script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  const swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 20,
    grabCursor: true,
    loop: true,
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
    },
  });
</script>

<script>
  const navbar = document.getElementById('navbar');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar.classList.add('bg-white', 'shadow-md');
      navbar.classList.remove('bg-transparent');
      navbar.querySelectorAll('a').forEach(a => {
        a.classList.remove('text-[#4f056c]');
        a.classList.add('text-gray-700');
      });
    } else {
      navbar.classList.remove('bg-white', 'shadow-md');
      navbar.classList.add('bg-transparent');
      navbar.querySelectorAll('a').forEach(a => {
        a.classList.remove('text-gray-700');
        a.classList.add('text-[#4f056c]');
      });
    }
  });
</script>

</body>

</html>