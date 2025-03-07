<section id="contact" class="relative py-16 md:py-32">
    <div class="container  mx-auto px-4 sm:px-6 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-12 md:mb-20" data-aos="fade-up" data-aos-duration="800">
            <span class="inline-block py-1.5 px-4 bg-primary/10 border border-primary/20 rounded-full text-primary-light font-semibold text-xs sm:text-sm uppercase tracking-wider mb-4">
                Hubungi Kami
            </span>
            <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold bg-gradient-to-r from-white via-primary-light to-primary bg-clip-text text-transparent mb-4 sm:mb-6">
                Kontak Kami
            </h2>
            <p class="max-w-2xl mx-auto text-gray-300 text-base sm:text-lg">
                Ingin menghubungi kami? Tim kami siap membantu dan menjawab semua pertanyaan Anda
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 max-w-6xl mx-auto">
            <!-- Contact Form -->
            <div class="group relative" data-aos="fade-up" data-aos-delay="100">
                <!-- Card Background with Gradient Border -->
                <div class="absolute -inset-0.5 bg-gradient-to-r from-primary to-purple-600 rounded-2xl blur opacity-30 group-hover:opacity-100 transition duration-500"></div>
                
                <!-- Card Content -->
                <div class="relative bg-gray-900 rounded-2xl p-5 sm:p-8">
                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4 sm:space-y-6">
                        @csrf
                        <div>
                            <label for="name" class="block text-white font-medium mb-2">Nama Lengkap</label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-3 bg-gray-800/70 border border-gray-700 focus:border-primary/50 rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-primary/20 transition duration-300">
                        </div>
                        <div>
                            <label for="email" class="block text-white font-medium mb-2">Email</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 bg-gray-800/70 border border-gray-700 focus:border-primary/50 rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-primary/20 transition duration-300">
                        </div>
                        <div>
                            <label for="subject" class="block text-white font-medium mb-2">Subjek</label>
                            <input type="text" id="subject" name="subject" required
                                class="w-full px-4 py-3 bg-gray-800/70 border border-gray-700 focus:border-primary/50 rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-primary/20 transition duration-300">
                        </div>
                        <div>
                            <label for="message" class="block text-white font-medium mb-2">Pesan</label>
                            <textarea id="message" name="message" rows="4" required
                                class="w-full px-4 py-3 bg-gray-800/70 border border-gray-700 focus:border-primary/50 rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-primary/20 transition duration-300"></textarea>
                        </div>
                        <button type="submit" 
                            class="w-full bg-gradient-to-r from-primary to-purple-600 hover:from-primary-light hover:to-purple-500 text-white font-semibold py-3 sm:py-4 px-6 rounded-xl transition duration-300 transform hover:-translate-y-1 shadow-lg shadow-primary/30 flex items-center justify-center">
                            <span>Kirim Pesan</span>
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="space-y-3 md:space-y-8" data-aos="fade-up" data-aos-delay="200">
                <!-- Info Card 1: Alamat -->
                <div class="group relative">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-600 to-teal-600 rounded-2xl blur opacity-30 group-hover:opacity-100 transition duration-500"></div>
                    <div class="relative flex flex-col sm:flex-row items-center sm:items-start space-y-4 sm:space-y-0 sm:space-x-6 bg-gray-900 p-6 rounded-2xl">
                        <div class="relative">
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-teal-500/20 rounded-2xl blur-xl"></div>
                            <div class="relative w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-gradient-to-br from-blue-500/10 to-teal-500/10 backdrop-blur-xl flex items-center justify-center border border-blue-500/20 group-hover:border-blue-500/50 transition-all duration-500">
                                <svg class="w-7 h-7 sm:w-8 sm:h-8 text-blue-400 group-hover:text-blue-300 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="text-center sm:text-left">
                            <h3 class="text-xl sm:text-2xl font-bold text-white mb-2 group-hover:text-blue-300 transition-colors duration-300">Alamat</h3>
                            <p class="text-gray-300">Jl. Contoh No. 123, Kota, Provinsi</p>
                            <p class="text-gray-400 mt-2">Senin - Jumat: 09.00 - 17.00 WIB</p>
                        </div>
                    </div>
                </div>

                <!-- Info Card 2: Email -->
                <div class="group relative">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-primary to-purple-600 rounded-2xl blur opacity-30 group-hover:opacity-100 transition duration-500"></div>
                    <div class="relative flex flex-col sm:flex-row items-center sm:items-start space-y-4 sm:space-y-0 sm:space-x-6 bg-gray-900 p-6 rounded-2xl">
                        <div class="relative">
                            <div class="absolute inset-0 bg-gradient-to-r from-primary/20 to-purple-500/20 rounded-2xl blur-xl"></div>
                            <div class="relative w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-gradient-to-br from-primary/10 to-purple-500/10 backdrop-blur-xl flex items-center justify-center border border-primary/20 group-hover:border-primary/50 transition-all duration-500">
                                <svg class="w-7 h-7 sm:w-8 sm:h-8 text-primary group-hover:text-primary-light transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="text-center sm:text-left">
                            <h3 class="text-xl sm:text-2xl font-bold text-white mb-2 group-hover:text-primary-light transition-colors duration-300">Email</h3>
                            <p class="text-gray-300">info@cvbintanggumilang.com</p>
                            <p class="text-gray-400 mt-2">Respons dalam 24 jam kerja</p>
                        </div>
                    </div>
                </div>

                <!-- Info Card 3: Telepon -->
                <div class="group relative">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-600 to-pink-600 rounded-2xl blur opacity-30 group-hover:opacity-100 transition duration-500"></div>
                    <div class="relative flex flex-col sm:flex-row items-center sm:items-start space-y-4 sm:space-y-0 sm:space-x-6 bg-gray-900 p-6 rounded-2xl">
                        <div class="relative">
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-500/20 to-pink-500/20 rounded-2xl blur-xl"></div>
                            <div class="relative w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-gradient-to-br from-purple-500/10 to-pink-500/10 backdrop-blur-xl flex items-center justify-center border border-purple-500/20 group-hover:border-purple-500/50 transition-all duration-500">
                                <svg class="w-7 h-7 sm:w-8 sm:h-8 text-purple-400 group-hover:text-purple-300 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="text-center sm:text-left">
                            <h3 class="text-xl sm:text-2xl font-bold text-white mb-2 group-hover:text-purple-300 transition-colors duration-300">Telepon</h3>
                            <p class="text-gray-300">+62 123 4567 890</p>
                            <p class="text-gray-400 mt-2">Tersedia 24/7 untuk bantuan darurat</p>
                        </div>
                    </div>
                </div>
                
                <!-- Social Media Links -->
                <div class="flex items-center justify-center sm:justify-start space-x-4 mt-6 sm:mt-8">
                    <a href="#" class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-gray-800 flex items-center justify-center border border-gray-700 hover:border-blue-500 hover:bg-blue-500/10 transition duration-300">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-400 hover:text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-gray-800 flex items-center justify-center border border-gray-700 hover:border-blue-700 hover:bg-blue-700/10 transition duration-300">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-400 hover:text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-gray-800 flex items-center justify-center border border-gray-700 hover:border-pink-600 hover:bg-pink-600/10 transition duration-300">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-400 hover:text-pink-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-gray-800 flex items-center justify-center border border-gray-700 hover:border-blue-500 hover:bg-blue-500/10 transition duration-300">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-400 hover:text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Google Maps -->
        <div class="mt-5 md:mt-20 mb-5 relative group" data-aos="fade-up" data-aos-delay="300">
            <div class="absolute -inset-0.5 bg-gradient-to-r from-primary to-purple-600 rounded-2xl blur opacity-30 group-hover:opacity-100 transition duration-500"></div>
            <div class="relative w-full h-64 sm:h-80 rounded-2xl overflow-hidden">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4548110147113!2d106.8222651!3d-6.1956156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f421963cd607%3A0x503cb9e9306e2f8f!2sMonumen%20Nasional!5e0!3m2!1sid!2sid!4v1646821026388!5m2!1sid!2sid" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    class="rounded-xl">
                </iframe>
            </div>
        </div>
    </div>
</section>