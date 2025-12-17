<x-app>

    @section('title', 'Home | Purple Creations')

    <x-navbar />
    <x-hero-home />




    <div class="bg-[#fdeef7]">


        <!-- Icon Section -->
        <div class="px-10 mb-24 border-t">

            <!-- DESKTOP GRID -->
            <div class="hidden md:grid grid-cols-3 gap-4 pt-20 px-2">
                <div class="flex flex-col items-center text-center">
                    <img src="img/icon1.svg" class="h-16 mb-4 opacity-90" alt="">
                    <h3 class="text-xl font-semibold text-[#a45aa5] mb-2">Fresh Flowers</h3>
                    <p class="text-gray-600">
                        Blooming with love — every stem is hand-picked to bring softness and beauty to your moments.
                    </p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <img src="img/icon2.svg" class="h-16 mb-4 opacity-90" alt="">
                    <h3 class="text-xl font-semibold text-[#a45aa5] mb-2">Professional Florists</h3>
                    <p class="text-gray-600">
                        Crafted with heart — our florists blend artistry and emotion to create timeless floral pieces.
                    </p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <img src="img/icon3.svg" class="h-16 mb-4 opacity-90" alt="">
                    <h3 class="text-xl font-semibold text-[#a45aa5] mb-2">Safe Payment</h3>
                    <p class="text-gray-600">
                        A secure and seamless payment experience — crafted to make every purchase feel effortless and worry-free.
                    </p>
                </div>
            </div>


            <!-- MOBILE CAROUSEL (Swiper) -->
            <div class="md:hidden pt-10">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="flex flex-col items-center text-center px-4">
                                <img src="img/icon1.svg" class="h-16 mb-4 opacity-90" alt="">
                                <h3 class="text-xl font-semibold text-[#a45aa5] mb-2">Fresh Flowers</h3>
                                <p class="text-gray-600">Blooming with love — every stem is hand-picked.</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col items-center text-center px-4">
                                <img src="img/icon2.svg" class="h-16 mb-4 opacity-90" alt="">
                                <h3 class="text-xl font-semibold text-[#a45aa5] mb-2">Professional Florists</h3>
                                <p class="text-gray-600">Crafted with heart — timeless floral pieces.</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col items-center text-center px-4">
                                <img src="img/icon3.svg" class="h-16 mb-4 opacity-90" alt="">
                                <h3 class="text-xl font-semibold text-[#a45aa5] mb-2">Safe Payment</h3>
                                <p class="text-gray-600">A secure and seamless payment experience.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>


        <div class="border-t border-pink-200">

            <div class="flex items-center justify-center mt-10">
                <h2 class="text-5xl text-[#4f056c] font-lobster leading-tight">
                    Join Our Lovely <br> Floral Workshops
                </h2>
            </div>

            <div class="p-10 mt-3 flex flex-col md:flex-row gap-12">

                <div class="md:w-1/2">

                    <div class="relative w-full max-w-3xl mx-auto rounded-3xl overflow-hidden shadow-lg border-2 border-[#f5c8f6]">

                        <!-- Thumbnail -->
                        <img
                            src="img/thumb1.jpg"
                            id="thumb"
                            class="w-full h-70 rounded-3xl cursor-pointer">

                        <!-- Video -->
                        <video id="video1" class="w-full rounded-3xl hidden" preload="metadata">
                            <source src="video/vid1.mp4" type="video/mp4">
                        </video>

                        <!-- Tombol Play -->
                        <button id="playBtn"
                            class="absolute inset-0 flex items-center justify-center bg-black/20 hover:bg-black/30 transition rounded-3xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-white drop-shadow-lg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </button>

                        <!-- Volume Control -->
                        <div id="volumeBox"
                            class="absolute bottom-4 left-4 bg-white/80 px-3 py-1 rounded-full shadow-md flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M5 9v6h4l5 5V4l-5 5H5z" />
                            </svg>
                            <input id="volumeControl" type="range" min="0" max="1" step="0.05" class="w-24 accent-pink-400" />
                        </div>
                    </div>



                </div>


                <!-- Kanan: Teks -->
                <div class="md:w-1/2 text-left">

                    <p class="text-[#4f056c] mb-6 text-xl font-semibold">
                        Explore the beauty of floral artistry with us!
                    </p>

                    <p class="text-base">
                        Discover the beauty of floral artistry in our curated workshops — perfect for beginners, enthusiasts, or anyone who simply loves flowers.
                        Create stunning arrangements, learn new techniques, and enjoy a relaxing hands-on experience.
                        Looking for a sweet date idea? Bring your partner and craft beautiful bouquets together — a memorable moment wrapped in petals and creativity.
                    </p>

                    <p class="font-semibold text-lg mt-5 mb-2 text-[#4f056c]">
                        Hurry and see what’s happening, explore all our events on Instagram! 
                    </p>

                    <a href="https://www.instagram.com/creations_purple?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                        class="inline-flex items-center gap-2 bg-[#E26EE5] border border-[#E26EE5] text-white text-center px-4 py-2 mt-2 rounded-full hover:bg-white hover:text-[#E26EE5]">

                        <!-- ICON INSTAGRAM -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.8" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.5 3h9A4.5 4.5 0 0 1 21 7.5v9A4.5 4.5 0 0 1 16.5 21h-9A4.5 4.5 0 0 1 3 16.5v-9A4.5 4.5 0 0 1 7.5 3zm9 3h.01M12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6z" />
                        </svg>

                        Click Here
                    </a>

                </div>



            </div>

        </div>

    </div>

</x-app>