<x-navbar />

<x-hero-home />

<div class="grid grid-cols-3 gap-4 px-10 mt-40 mb-40">

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
        <img src="img/icon3.svg" class="h-16 mb-4 opacity-90" alt="Safe Payment Icon">
        <h3 class="text-xl font-semibold text-[#a45aa5] mb-2">Safe Payment</h3>
        <p class="text-gray-600">
            A secure and seamless payment experience — crafted to make every purchase feel effortless and worry-free.
        </p>
    </div>




</div>

<div class="bg-[#fff9f1]">

    <div class="flex items-center justify-center pt-10">
        <h2 class="text-5xl text-black font-lobster leading-tight">
            Join Our Lovely <br> Floral Workshops
        </h2>
    </div>

    <div class="p-10 mt-3 flex flex-col md:flex-row items-center gap-12">

        <div class="md:w-1/2">

            <div class="relative w-full max-w-3xl mx-auto rounded-3xl overflow-hidden shadow-lg border-2 border-[#f5c8f6]">

                <!-- Thumbnail -->
                <img
                    src="img/hitam.jpg"
                    id="thumb"
                    class="w-full h-70 object-cover rounded-3xl cursor-pointer">

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


        <!-- Kiri: Teks -->
        <div class="md:w-1/2 text-left">

            <p class="text-gray-700 mb-6">
                Explore the art of floral arrangement through our curated workshops —
                suitable for beginners, enthusiasts, or anyone who simply loves flowers.
                Let creativity bloom in every session.
            </p>

            <a href="#"
                class="inline-block px-6 py-3 bg-[#E26EE5] text-white font-medium rounded-full hover:bg-[#c75ad3] transition">
                View All Events
            </a>
        </div>

        <!-- Kanan: Kartu Event -->


    </div>

</div>



<x-footer />