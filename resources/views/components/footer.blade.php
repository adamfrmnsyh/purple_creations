<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
    effect: "fade",
    loop: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
  });
</script>

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


</body>

</html>