<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>


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

<script>
  const navbar = document.getElementById("navbar");
  window.addEventListener("scroll", () => {
    if (window.scrollY > 10) {
      navbar.classList.add("bg-white/90", "shadow-lg", "backdrop-blur");
    } else {
      navbar.classList.remove("bg-white/90", "shadow-lg", "backdrop-blur");
    }
  });
</script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  const swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,     // jumlah card yang kelihatan di desktop
    spaceBetween: 20,     // jarak antar card
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
      320: { slidesPerView: 1 },
      640: { slidesPerView: 2 },
      1024: { slidesPerView: 4 },
    },
  });
</script>

</body>

</html>