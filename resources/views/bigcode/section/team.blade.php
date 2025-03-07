<section id="team" class="py-20 relative">
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="inline-block py-1.5 px-4 bg-blue-500/10 border border-blue-500/20 rounded-full text-blue-400 font-semibold text-sm uppercase tracking-wider mb-4">
                Our Team
            </span>
            <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent mb-6">
                Meet Our Experts
            </h2>
            <p class="text-gray-300 max-w-2xl mx-auto">
                Our talented team of professionals is dedicated to delivering excellence in every project
            </p>
        </div>

        <!-- Team Members Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Team Member 1 -->
            <div class="group" data-aos="fade-up" data-aos-delay="100">
                <div class="relative overflow-hidden rounded-xl mb-4">
                    <img src="{{ asset('images/team/member1.jpg') }}" alt="Team Member 1" class="w-full aspect-square object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <div class="flex justify-center space-x-4">
                                <a href="#" class="text-white hover:text-blue-400">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                    </svg>
                                </a>
                                <a href="#" class="text-white hover:text-blue-400">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h3 class="text-xl font-bold text-white mb-1">John Doe</h3>
                    <p class="text-gray-400">CEO & Founder</p>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="group" data-aos="fade-up" data-aos-delay="200">
                <div class="relative overflow-hidden rounded-xl mb-4">
                    <img src="{{ asset('images/team/member2.jpg') }}" alt="Team Member 2" class="w-full aspect-square object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <div class="flex justify-center space-x-4">
                                <a href="#" class="text-white hover:text-blue-400">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                    </svg>
                                </a>
                                <a href="#" class="text-white hover:text-blue-400">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h3 class="text-xl font-bold text-white mb-1">Jane Smith</h3>
                    <p class="text-gray-400">CTO</p>
                </div>
            </div>

            <!-- Add more team members as needed -->
        </div>
    </div>
</section>