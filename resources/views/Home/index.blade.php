<x-navbar />

<x-carousel />

<div class="grid grid-cols-3 gap-4 px-10 mt-20 mb-20">

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

<div class="p-10 mt-3 flex flex-col md:flex-row items-center gap-12 bg-[#fff9f1]">

    <!-- Kiri: Teks -->
    <div class="md:w-1/2 text-left">
        <h2 class="text-5xl text-black mb-5 font-lobster leading-tight">
            Join Our Lovely <br> Floral Workshops
        </h2>

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
    <div class="md:w-1/2">


        <div class="w-[500px] bg-white rounded-3xl shadow-md hover:shadow-xl transition overflow-hidden">

            <img src="img/rose.jpg"
                class="w-full h-[250px] object-cover">

            <div class="p-4">
                <h3 class="text-lg font-semibold text-[#a45aa5]">Basic Flower Arrangement</h3>
                <p class="text-gray-600 text-sm mt-1">
                    Learn the essentials of arranging fresh blooms.
                </p>
            </div>

        </div>



    </div>

</div>



<x-footer />