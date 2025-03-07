<section id="services" class="relative py-32">
    <div class="container mx-auto px-6 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20" data-aos="fade-up" data-aos-duration="800">
            <span
                class="inline-block py-1.5 px-4 bg-primary/10 border border-primary/20 rounded-full text-primary-light font-semibold text-sm uppercase tracking-wider mb-4">
                Our Departments
            </span>
            <h2
                class="text-5xl md:text-6xl font-bold bg-gradient-to-r from-white via-primary-light to-primary bg-clip-text text-transparent mb-6">
                Departemen Kami
            </h2>
            <p class="max-w-2xl mx-auto text-gray-300 text-lg">
                Kami memiliki dua departemen utama yang siap memberikan layanan terbaik untuk memenuhi kebutuhan bisnis
                Anda
            </p>
        </div>

        <!-- Departments Cards - Changed to 2 column layout -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 max-w-5xl mx-auto">
            <!-- BigCode Department Card -->
            <div class="group relative bg-gradient-to-br from-gray-800/60 to-gray-900/60 backdrop-blur-md rounded-3xl overflow-hidden border border-gray-700/50 hover:border-blue-500/50 transition-all duration-500 hover:shadow-xl hover:shadow-blue-500/10"
                data-aos="fade-up" data-aos-delay="100">

                <!-- Hover Background Effect -->
                <div
                    class="absolute inset-0 bg-gradient-to-br from-blue-600/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>

                <!-- Department Header with Ribbon -->
                <div class="relative">
                    <!-- Main Image with Overlay -->
                    <div class="h-56 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-gray-900/90 z-10"></div>
                        <img src="{{ asset('build/assets/img/about-us.jpg') }}" alt="BigCode Department"
                            class="w-full h-full object-cover object-center transform group-hover:scale-110 transition-transform duration-700 filter brightness-75">
                    </div>

                    <!-- Department Logo -->
                    <div
                        class="absolute top-6 left-6 z-20 bg-blue-500/20 backdrop-blur-xl p-3 rounded-2xl border border-blue-500/30 group-hover:bg-blue-500/30 transition-all duration-300">
                        <svg class="w-10 h-10 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>

                    <!-- Department Title -->
                    <div class="absolute bottom-6 left-6 z-20">
                        <h3 class="text-3xl font-bold text-white mb-1">Big<span class="text-blue-400">Code</span></h3>
                        <p class="text-blue-300">Solusi Digital Terpadu</p>
                    </div>
                </div>

                <!-- Department Content -->
                <div class="p-8 relative z-10">
                    <p class="text-gray-300 mb-8">
                        Departemen BigCode fokus pada pengembangan solusi digital yang inovatif dan terdepan untuk
                        membantu bisnis Anda tumbuh di era digital.
                    </p>

                    <h4 class="text-lg font-semibold text-white mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-blue-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        Layanan Unggulan
                    </h4>

                    <ul class="space-y-4 mb-8">
                        <li
                            class="flex items-start text-gray-300 group-hover:text-gray-200 transition-colors duration-300">
                            <span
                                class="w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3 group-hover:scale-125 transition-transform duration-300"></span>
                            <span>Web Development &amp; Design</span>
                        </li>
                        <li
                            class="flex items-start text-gray-300 group-hover:text-gray-200 transition-colors duration-300">
                            <span
                                class="w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3 group-hover:scale-125 transition-transform duration-300"></span>
                            <span>Mobile App Development</span>
                        </li>
                        <li
                            class="flex items-start text-gray-300 group-hover:text-gray-200 transition-colors duration-300">
                            <span
                                class="w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3 group-hover:scale-125 transition-transform duration-300"></span>
                            <span>UI/UX Design &amp; Prototyping</span>
                        </li>
                        <li
                            class="flex items-start text-gray-300 group-hover:text-gray-200 transition-colors duration-300">
                            <span
                                class="w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3 group-hover:scale-125 transition-transform duration-300"></span>
                            <span>Custom Software Development</span>
                        </li>
                    </ul>

                    <!-- CTA Button -->
                    <a href="#contact-bigcode"
                        class="inline-block w-full text-center py-3 px-6 bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800 rounded-xl text-white font-medium transition-all duration-300 transform group-hover:-translate-y-1 hover:shadow-lg hover:shadow-blue-500/20">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>

            <!-- BigCons Department Card -->
            <div class="group relative bg-gradient-to-br from-gray-800/60 to-gray-900/60 backdrop-blur-md rounded-3xl overflow-hidden border border-gray-700/50 hover:border-purple-500/50 transition-all duration-500 hover:shadow-xl hover:shadow-purple-500/10"
                data-aos="fade-up" data-aos-delay="200">

                <!-- Hover Background Effect -->
                <div
                    class="absolute inset-0 bg-gradient-to-br from-purple-600/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </div>

                <!-- Department Header with Ribbon -->
                <div class="relative">
                    <!-- Main Image with Overlay -->
                    <div class="h-56 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-gray-900/90 z-10"></div>
                        <img src="{{ asset('build/assets/img/about-us.jpg') }}" alt="BigCons Department"
                            class="w-full h-full object-cover object-center transform group-hover:scale-110 transition-transform duration-700 filter brightness-75">
                    </div>

                    <!-- Department Logo -->
                    <div
                        class="absolute top-6 left-6 z-20 bg-purple-500/20 backdrop-blur-xl p-3 rounded-2xl border border-purple-500/30 group-hover:bg-purple-500/30 transition-all duration-300">
                        <svg class="w-10 h-10 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>

                    <!-- Department Title -->
                    <div class="absolute bottom-6 left-6 z-20">
                        <h3 class="text-3xl font-bold text-white mb-1">Big<span class="text-purple-400">Cons</span></h3>
                        <p class="text-purple-300">Konsultasi dan Konstruksi</p>
                    </div>
                </div>

                <!-- Department Content -->
                <div class="p-8 relative z-10">
                    <p class="text-gray-300 mb-8">
                        Departemen BigCons menawarkan layanan konsultasi profesional dan solusi konstruksi berkualitas
                        tinggi untuk proyek-proyek bisnis Anda.
                    </p>

                    <h4 class="text-lg font-semibold text-white mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        Layanan Unggulan
                    </h4>

                    <ul class="space-y-4 mb-8">
                        <li
                            class="flex items-start text-gray-300 group-hover:text-gray-200 transition-colors duration-300">
                            <span
                                class="w-2 h-2 bg-purple-500 rounded-full mt-2 mr-3 group-hover:scale-125 transition-transform duration-300"></span>
                            <span>Konsultasi Bisnis Strategis</span>
                        </li>
                        <li
                            class="flex items-start text-gray-300 group-hover:text-gray-200 transition-colors duration-300">
                            <span
                                class="w-2 h-2 bg-purple-500 rounded-full mt-2 mr-3 group-hover:scale-125 transition-transform duration-300"></span>
                            <span>Manajemen Proyek Konstruksi</span>
                        </li>
                        <li
                            class="flex items-start text-gray-300 group-hover:text-gray-200 transition-colors duration-300">
                            <span
                                class="w-2 h-2 bg-purple-500 rounded-full mt-2 mr-3 group-hover:scale-125 transition-transform duration-300"></span>
                            <span>Arsitektur dan Desain Interior</span>
                        </li>
                        <li
                            class="flex items-start text-gray-300 group-hover:text-gray-200 transition-colors duration-300">
                            <span
                                class="w-2 h-2 bg-purple-500 rounded-full mt-2 mr-3 group-hover:scale-125 transition-transform duration-300"></span>
                            <span>Engineering & Project Planning</span>
                        </li>
                    </ul>

                    <!-- CTA Button -->
                    <a href="#contact-bigcons"
                        class="inline-block w-full text-center py-3 px-6 bg-gradient-to-r from-purple-500 to-purple-700 hover:from-purple-600 hover:to-purple-800 rounded-xl text-white font-medium transition-all duration-300 transform group-hover:-translate-y-1 hover:shadow-lg hover:shadow-purple-500/20">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>
        </div>

        <!-- Additional Feature Section -->
        <div class="mt-20 text-center" data-aos="fade-up" data-aos-delay="300">
            <div
                class="inline-block px-6 py-3 bg-gradient-to-r from-blue-500/10 to-purple-500/10 rounded-xl backdrop-blur-md border border-white/10">
                <p class="text-gray-300">
                    Butuh informasi lebih lanjut tentang departemen kami?
                    <a href="#contact"
                        class="font-medium text-primary-light hover:text-primary transition-colors duration-300">Hubungi
                        tim kami sekarang</a>
                </p>
            </div>
        </div>
    </div>
</section>
