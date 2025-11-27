<footer class="bg-[#fff1f7] border-t-2 border-gray-200">
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
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  const overlay = document.getElementById('overlay');
  const closeMenu = document.getElementById('close-menu');

  // Navbar change background & link color on scroll
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

  // Open Mobile Menu
  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.remove('translate-x-full');
    overlay.classList.remove('hidden');
  });

  // Close Mobile Menu
  closeMenu.addEventListener('click', () => {
    mobileMenu.classList.add('translate-x-full');
    overlay.classList.add('hidden');
  });

  // Close when clicking overlay
  overlay.addEventListener('click', () => {
    mobileMenu.classList.add('translate-x-full');
    overlay.classList.add('hidden');
  });
</script>

<script>
document.addEventListener("DOMContentLoaded", () => {

  /* ===========================
        VIDEO 1 (LANDSCAPE)
     =========================== */

  const video1 = document.getElementById('video1');
  const thumb1 = document.getElementById('thumb');
  const playBtn1 = document.getElementById('playBtn');
  const volumeBox1 = document.getElementById('volumeBox');
  const volumeControl1 = document.getElementById('volumeControl');

  // default volume
  video1.volume = 0.5;

  function startVideo1() {
    thumb1.classList.add("hidden");
    playBtn1.classList.add("hidden");
    video1.classList.remove("hidden");
    volumeBox1.classList.remove("hidden");
    video1.controls = false;
    video1.play();
  }

  playBtn1.addEventListener("click", startVideo1);
  thumb1.addEventListener("click", startVideo1);

  // Show play button when paused
  video1.addEventListener("pause", () => {
    if (!thumb1.classList.contains("hidden")) return;
    playBtn1.classList.remove("hidden");
  });

  // Volume control
  volumeControl1.addEventListener("input", () => {
    video1.volume = volumeControl1.value;
  });

  // Auto-pause when out of view
  const observer1 = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting && !video1.paused) {
          video1.pause();
        }
      });
    },
    { threshold: 0.2 }
  );

  observer1.observe(video1);


  /* ===========================
        VIDEO 2 (PORTRAIT)
     =========================== */

  const video2 = document.getElementById("videoPortrait");
  const thumb2 = document.getElementById("thumbPortrait");
  const playBtn2 = document.getElementById("playBtnPortrait");
  const volumeBox2 = document.getElementById("volumeBoxPortrait");
  const volumeControl2 = document.getElementById("volumeControlPortrait");

  // default volume
  video2.volume = 0.7;

  function startVideo2() {
    thumb2.classList.add("hidden");
    playBtn2.classList.add("hidden");
    video2.classList.remove("hidden");
    volumeBox2.classList.remove("hidden");
    video2.controls = false;
    video2.play();
  }

  playBtn2.addEventListener("click", startVideo2);
  thumb2.addEventListener("click", startVideo2);

  // Show play button when paused
  video2.addEventListener("pause", () => {
    if (!thumb2.classList.contains("hidden")) return;
    playBtn2.classList.remove("hidden");
  });

  // Volume
  volumeControl2.addEventListener("input", () => {
    video2.volume = volumeControl2.value;
  });

  // Auto-pause when keluar layar
  const observer2 = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting && !video2.paused) {
          video2.pause();
        }
      });
    },
    { threshold: 0.2 }
  );

  observer2.observe(video2);
});
</script>


</body>

</html>