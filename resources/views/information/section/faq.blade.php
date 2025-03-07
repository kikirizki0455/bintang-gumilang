<section id="faq" class="relative py-20 bg-gray-900/50">
    <div class="container mx-auto px-6 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
            <span
                class="inline-block py-1.5 px-4 bg-primary/10 border border-primary/20 rounded-full text-primary-light font-semibold text-sm uppercase tracking-wider mb-4">
                FAQ
            </span>
            <h2
                class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-white via-primary-light to-primary bg-clip-text text-transparent mb-6">
                Pertanyaan Umum
            </h2>
        </div>

        <!-- FAQ Grid -->
        <div class="max-w-4xl mx-auto grid gap-6" x-data="{ selected: null }">
            <!-- FAQ Item 1 -->
            <div class="group relative" data-aos="fade-up" data-aos-delay="100">
                <div
                    class="absolute -inset-0.5 bg-gradient-to-r from-primary to-purple-600 rounded-xl blur opacity-30 group-hover:opacity-100 transition duration-500">
                </div>
                <div class="relative bg-gray-900 rounded-xl">
                    <button @click="selected !== 1 ? selected = 1 : selected = null"
                        class="flex items-center justify-between w-full p-6 text-left">
                        <span class="text-lg font-semibold text-white">Bagaimana cara mendaftar layanan?</span>
                        <svg class="w-6 h-6 text-primary-light transition-transform"
                            :class="{ 'rotate-180': selected == 1 }" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="selected == 1" x-collapse>
                        <div class="p-6 pt-0 text-gray-400">
                            Anda dapat mendaftar layanan melalui website kami atau menghubungi tim sales kami melalui
                            nomor yang tertera di halaman kontak.
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="group relative" data-aos="fade-up" data-aos-delay="200">
                <div
                    class="absolute -inset-0.5 bg-gradient-to-r from-primary to-purple-600 rounded-xl blur opacity-30 group-hover:opacity-100 transition duration-500">
                </div>
                <div class="relative bg-gray-900 rounded-xl">
                    <button @click="selected !== 2 ? selected = 2 : selected = null"
                        class="flex items-center justify-between w-full p-6 text-left">
                        <span class="text-lg font-semibold text-white">Berapa lama proses implementasi?</span>
                        <svg class="w-6 h-6 text-primary-light transition-transform"
                            :class="{ 'rotate-180': selected == 2 }" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="selected == 2" x-collapse>
                        <div class="p-6 pt-0 text-gray-400">
                            Waktu implementasi bervariasi tergantung kompleksitas proyek, umumnya berkisar antara 2-8
                            minggu.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
