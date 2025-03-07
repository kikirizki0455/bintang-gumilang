<section class="relative py-20 overflow-hidden">
    <div class="container mx-auto px-6 relative z-10">
        <h2 class="text-3xl font-bold text-center text-white mb-16" data-aos="fade-up">
            Trusted By Industry Leaders
        </h2>

        <!-- Infinite Scroll Animation with Mask -->
        <div class="relative overflow-hidden">
            <!-- Gradient masks for smooth fade effect -->
            <div class="absolute left-0 top-0 bottom-0 w-20 bg-gradient-to-r from-transparent to-transparent z-10"></div>
            <div class="absolute right-0 top-0 bottom-0 w-20 bg-gradient-to-l from-transparent to-transparent z-10">
            </div>

            <!-- Scrolling content -->
            <div class="sponsor-scroll-container">
                <!-- First Set of Logos -->
                <div class="sponsor-group">
                    <div class="sponsor-card group">
                        <div
                            class="relative p-6 bg-gray-900/80 backdrop-blur-sm rounded-xl border border-gray-700/50 hover:border-blue-500/50 transition-all duration-500">
                            <img src="{{ asset('images/sponsors/facebook.png') }}" alt="Facebook"
                                class="h-16 w-auto filter grayscale group-hover:grayscale-0 transition-all duration-500">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-xl">
                            </div>
                        </div>
                    </div>
                    <div class="sponsor-card group">
                        <div
                            class="relative p-6 bg-gray-900/80 backdrop-blur-sm rounded-xl border border-gray-700/50 hover:border-blue-500/50 transition-all duration-500">
                            <img src="{{ asset('images/sponsors/twitter.png') }}" alt="Twitter"
                                class="h-16 w-auto filter grayscale group-hover:grayscale-0 transition-all duration-500">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-xl">
                            </div>
                        </div>
                    </div>
                    <div class="sponsor-card group">
                        <div
                            class="relative p-6 bg-gray-900/80 backdrop-blur-sm rounded-xl border border-gray-700/50 hover:border-blue-500/50 transition-all duration-500">
                            <img src="{{ asset('images/sponsors/pertamina.png') }}" alt="Pertamina"
                                class="h-16 w-auto filter grayscale group-hover:grayscale-0 transition-all duration-500">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-xl">
                            </div>
                        </div>
                    </div>
                    <div class="sponsor-card group">
                        <div
                            class="relative p-6 bg-gray-900/80 backdrop-blur-sm rounded-xl border border-gray-700/50 hover:border-blue-500/50 transition-all duration-500">
                            <img src="{{ asset('images/sponsors/kominfo.png') }}" alt="Kominfo"
                                class="h-16 w-auto filter grayscale group-hover:grayscale-0 transition-all duration-500">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-xl">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Duplicate for seamless infinite scroll -->
                <div class="sponsor-group">
                    <div class="sponsor-card group">
                        <div
                            class="relative p-6 bg-gray-900/80 backdrop-blur-sm rounded-xl border border-gray-700/50 hover:border-blue-500/50 transition-all duration-500">
                            <img src="{{ asset('images/sponsors/facebook.png') }}" alt="Facebook"
                                class="h-16 w-auto filter grayscale group-hover:grayscale-0 transition-all duration-500">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-xl">
                            </div>
                        </div>
                    </div>
                    <div class="sponsor-card group">
                        <div
                            class="relative p-6 bg-gray-900/80 backdrop-blur-sm rounded-xl border border-gray-700/50 hover:border-blue-500/50 transition-all duration-500">
                            <img src="{{ asset('images/sponsors/twitter.png') }}" alt="Twitter"
                                class="h-16 w-auto filter grayscale group-hover:grayscale-0 transition-all duration-500">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-xl">
                            </div>
                        </div>
                    </div>
                    <div class="sponsor-card group">
                        <div
                            class="relative p-6 bg-gray-900/80 backdrop-blur-sm rounded-xl border border-gray-700/50 hover:border-blue-500/50 transition-all duration-500">
                            <img src="{{ asset('images/sponsors/pertamina.png') }}" alt="Pertamina"
                                class="h-16 w-auto filter grayscale group-hover:grayscale-0 transition-all duration-500">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-xl">
                            </div>
                        </div>
                    </div>
                    <div class="sponsor-card group">
                        <div
                            class="relative p-6 bg-gray-900/80 backdrop-blur-sm rounded-xl border border-gray-700/50 hover:border-blue-500/50 transition-all duration-500">
                            <img src="{{ asset('images/sponsors/kominfo.png') }}" alt="Kominfo"
                                class="h-16 w-auto filter grayscale group-hover:grayscale-0 transition-all duration-500">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-xl">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .sponsor-scroll-container {
        display: flex;
        width: 200%;
        animation: scroll 30s linear infinite;
    }

    .sponsor-group {
        display: flex;
        align-items: center;
        justify-content: space-around;
        min-width: 50%;
        gap: 2rem;
    }

    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .sponsor-scroll-container:hover {
        animation-play-state: paused;
    }

    .sponsor-card {
        transition: transform 0.3s ease;
    }

    .sponsor-card:hover {
        transform: translateY(-10px);
    }

    /* Hide scrollbar */
    .overflow-hidden::-webkit-scrollbar {
        display: none;
    }

    /* For Firefox */
    .overflow-hidden {
        scrollbar-width: none;
    }
</style>
