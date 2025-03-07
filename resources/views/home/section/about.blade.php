<section id="about" class="relative py-32"> <!-- Added negative margin to create overlap -->
    <div class="container mx-auto px-6 relative z-10">
        <!-- Section Header with improved gradient -->
        <div class="text-center mb-24" data-aos="fade-up" data-aos-duration="800">
            <span
                class="inline-block py-1 px-3 bg-primary/10 border border-primary/20 rounded-full text-primary-light font-semibold text-sm uppercase tracking-wider mb-4 backdrop-blur-sm">
                Discover Our Story
            </span>
            <h2
                class="text-6xl font-bold mb-6 bg-gradient-to-r from-white via-primary-light to-primary bg-clip-text text-transparent">
                Tentang Kami
            </h2>
            <div class="w-32 h-1.5 bg-gradient-to-r from-primary-dark via-primary to-primary-light mx-auto rounded-full">
            </div>
        </div>

        <div class="flex flex-wrap items-center gap-20">
            <!-- Image Section with enhanced blur effects -->
            <div class="w-full lg:w-5/12">
                <div class="relative group" data-aos="fade-right" data-aos-duration="1000">
                    <!-- Main Image with improved hover effects -->
                    <div
                        class="relative z-10 rounded-3xl overflow-hidden shadow-2xl border border-white/5 backdrop-blur-sm">
                        <img src="{{ asset('build/assets/img/about-us.jpg') }}" alt="Tentang CV Bintang Gumilang"
                            class="w-full h-auto transform group-hover:scale-105 transition-transform duration-700 filter group-hover:brightness-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-gray-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                        </div>
                    </div>

                    <!-- Enhanced Decorative Elements with softer blur -->
                    <div
                        class="absolute -bottom-8 -right-8 w-40 h-40 bg-gradient-to-br from-primary/40 to-primary-light/40 rounded-3xl -z-10 blur-[30px] group-hover:blur-[40px] group-hover:scale-110 transition-all duration-700">
                    </div>
                    <div
                        class="absolute -top-8 -left-8 w-40 h-40 bg-gradient-to-br from-primary-dark/30 to-primary/30 rounded-full -z-10 blur-[30px] group-hover:blur-[40px] group-hover:scale-110 transition-all duration-700">
                    </div>
                </div>
            </div>

            <!-- Content Section with improved backdrop blur -->
            <div class="w-full lg:w-6/12 relative" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <div class="absolute inset-0 bg-gray-900/30 backdrop-blur-md rounded-3xl"></div>
                <div class="relative p-8">
                    <h3
                        class="text-4xl font-bold mb-6 bg-gradient-to-r from-white via-primary-light to-primary bg-clip-text text-transparent">
                        CV Bintang Gumilang
                    </h3>

                    <p class="text-gray-300 text-lg mb-8 leading-relaxed">
                        CV Bintang Gumilang adalah perusahaan inovatif yang berkomitmen untuk memberikan solusi terbaik
                        bagi
                        bisnis Anda. Dengan pengalaman lebih dari <span class="text-blue-400 font-semibold">10
                            tahun</span>,
                        kami telah membangun reputasi yang kuat dalam
                        industri ini.
                    </p>

                    <p class="text-gray-300 text-lg mb-12 leading-relaxed">
                        Visi kami adalah menjadi <span class="text-purple-400 font-semibold">mitra terpercaya</span>
                        yang
                        membantu bisnis Anda berkembang melalui solusi
                        inovatif dan berkelanjutan. Kami percaya bahwa keberhasilan Anda adalah keberhasilan kami juga.
                    </p>

                    <!-- Improved Features Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-gradient-to-br from-white/5 to-white/10 backdrop-blur-lg p-8 rounded-3xl hover:transform hover:-translate-y-2 transition-all duration-300 border border-white/10 hover:border-blue-500/30 hover:shadow-lg hover:shadow-blue-500/10"
                            data-aos="zoom-in" data-aos-delay="100">
                            <div class="flex items-center mb-5">
                                <div
                                    class="rounded-2xl bg-gradient-to-br from-blue-500 to-blue-700 p-4 mr-5 shadow-lg shadow-blue-500/20">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span class="text-2xl font-semibold text-white">Terpercaya</span>
                            </div>
                            <p class="text-gray-300 text-base">Layanan profesional yang dapat diandalkan dengan standar
                                kualitas
                                tinggi untuk semua kebutuhan bisnis Anda</p>
                        </div>

                        <div class="bg-gradient-to-br from-white/5 to-white/10 backdrop-blur-lg p-8 rounded-3xl hover:transform hover:-translate-y-2 transition-all duration-300 border border-white/10 hover:border-purple-500/30 hover:shadow-lg hover:shadow-purple-500/10"
                            data-aos="zoom-in" data-aos-delay="200">
                            <div class="flex items-center mb-5">
                                <div
                                    class="rounded-2xl bg-gradient-to-br from-purple-500 to-purple-700 p-4 mr-5 shadow-lg shadow-purple-500/20">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <span class="text-2xl font-semibold text-white">Inovatif</span>
                            </div>
                            <p class="text-gray-300 text-base">Solusi modern dan kreatif untuk era digital yang dinamis
                                dengan pendekatan yang selalu up-to-date</p>
                        </div>
                    </div>

                    <div class="mt-12 text-center md:text-left">
                        <a href="#contact"
                            class="group relative inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white overflow-hidden rounded-full transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg hover:shadow-primary/20">
                            <!-- Gradient background -->
                            <span
                                class="absolute inset-0 bg-gradient-to-r from-primary-dark via-primary to-primary-light"></span>

                            <!-- Hover effect overlay -->
                            <span
                                class="absolute inset-0 bg-gradient-to-r from-primary to-primary-light opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>

                            <!-- Button text -->
                            <span class="relative flex items-center">
                                Hubungi Kami
                                <!-- Optional icon -->
                                <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</section>
