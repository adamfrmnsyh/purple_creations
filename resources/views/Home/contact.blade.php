<x-app>
    @section('title', 'Contact | Purple Creations')

       <x-navbar />
       <x-hero-contactUs />   


    <!-- MAIN CONTENT -->
    <section class="max-w-7xl mx-auto px-6">

        <!-- PHOTO + SOCIAL MEDIA -->
        <div class="grid md:grid-cols-2 gap-12 items-center">

            <!-- PHOTO -->
            <div>
                <img src="img/logopurple.png"
                    class="w-full rounded-3xl">
            </div>

            <!-- SOCIAL MEDIA -->
            <div>
                <h2 class="text-3xl font-semibold text-[#4f056c] mb-6">
                    Connect With Us
                </h2>

                <div class="space-y-4">

                    <!-- Instagram -->
                    <a href="https://www.instagram.com/creations_purple?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"
                        class="flex items-center gap-4 bg-pink-100 hover:bg-pink-200 p-4 rounded-xl transition">
                        <img src="/img/icons/instagram.svg" class="w-8 h-8">
                        <span class="text-lg text-[#4f056c] font-medium">creations_purple</span>
                    </a>

                    <!-- WhatsApp -->
                    <a href="https://wa.me/628123456789" target="_blank"
                        class="flex items-center gap-4 bg-pink-100 hover:bg-pink-200 p-4 rounded-xl transition">
                        <img src="/img/icons/whatsapp.svg" class="w-8 h-8">
                        <span class="text-lg text-[#4f056c] font-medium">+62 812-3456-789</span>
                    </a>

                    <!-- Tiktok -->
                    <a href="https://www.tiktok.com/@creations_purple?is_from_webapp=1&sender_device=pc"
                        class="flex items-center gap-4 bg-pink-100 hover:bg-pink-200 p-4 rounded-xl transition">
                        <img src="/img/icons/tiktok.svg" class="w-8 h-8">
                        <span class="text-lg text-[#4f056c] font-medium">creations_purple</span>
                    </a>

                </div>
            </div>
        </div>

        <!-- MAP -->
        <div class="p-6">
            <h2 class="text-3xl font-semibold text-[#4f056c] mb-14 text-center">
                Visit Us!
            </h2>

            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-start">

                <!-- MAP KIRI -->
                <div class="w-full h-[350px] md:h-[350px] overflow-hidden rounded-3xl shadow-xl">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4354716499756!2d106.77734247409613!3d-6.206147760791634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6dafc39d96f%3A0x5a96c6b244c4f619!2sPurple%20Creation!5e0!3m2!1sen!2sus!4v1764826018270!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <!-- ALAMAT KANAN -->
                <div class="flex flex-col justify-center px-4">
                    <h3 class="text-2xl font-bold text-[#4f056c] mb-4">Alamat Kami</h3>

                    <p class="text-lg text-gray-700 leading-relaxed">
                        Purple Creations<br>
                        Jl. Sulaiman No.16A, RT.5/RW.3
                        Sukabumi Utara, Kec. Kb. Jeruk
                        Kota Jakarta Barat, DKI Jakarta 11540
                    </p>

                </div>

            </div>
        </div>

    </section>

</x-app>