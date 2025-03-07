@extends('layouts.bigcode')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="relative min-h-screen flex items-center overflow-hidden">
        <!-- Background Layers -->
        <div class="absolute inset-0 z-0">
            <!-- Primary gradient background -->
            <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 opacity-95"></div>

            <!-- Animated gradient overlay -->
            <div
                class="absolute inset-0 bg-gradient-to-r from-blue-600/10 via-purple-600/10 to-blue-600/10 animate-gradient-x">
            </div>

            <!-- Particles container -->
            <div id="header-particles" class="absolute inset-0 opacity-30"></div>

            <!-- Three.js container -->
            <div id="three-container" class="absolute inset-0"></div>
        </div>

        <!-- Content Container -->
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <!-- Hero Content -->
                <div class="space-y-8">
                    <h1 class="text-5xl md:text-7xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-600"
                        data-aos="fade-up">
                        Transform Your Digital Vision Into Reality
                    </h1>

                    <p class="text-xl text-gray-300" data-aos="fade-up" data-aos-delay="100">
                        We craft innovative software solutions that drive business growth and efficiency
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex justify-center space-x-6" data-aos="fade-up" data-aos-delay="200">
                        <a href="#contact"
                            class="bg-blue-500 hover:bg-blue-600 text-white px-8 py-3 rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-blue-500/25">
                            Start Your Project
                        </a>
                        <a href="#portfolio"
                            class="border-2 border-blue-500/30 hover:border-blue-500 text-gray-300 hover:text-blue-400 px-8 py-3 rounded-full transition-all duration-300 transform hover:scale-105">
                            View Portfolio
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Gradient Fade -->
        <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-gray-900 to-transparent"></div>
    </section>

    <!-- Main Content Sections -->
    <div class="relative z-10">
        @include('bigcode.section.about')
        @include('bigcode.section.services')
        @include('bigcode.section.vision-mission')
        @include('bigcode.section.portfolio')
        @include('bigcode.section.partnership')
        @include('bigcode.section.team')

        <!-- Contact Section -->
        <section id="contact" class="py-20 relative">
            <div class="absolute inset-0 bg-gradient-to-b from-gray-800/50 to-gray-900/50 backdrop-blur-sm"></div>
            <div class="container mx-auto px-4 relative">
                <div class="max-w-4xl mx-auto text-center space-y-8">
                    <h2 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-600"
                        data-aos="fade-up">
                        Ready to Start Your Project?
                    </h2>
                    <p class="text-gray-300 text-lg" data-aos="fade-up" data-aos-delay="100">
                        Let's discuss how we can help you achieve your digital transformation goals
                    </p>
                    <a href="#"
                        class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-8 py-3 rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-blue-500/25"
                        data-aos="fade-up" data-aos-delay="200">
                        Contact Us Now
                    </a>
                </div>
            </div>
        </section>
    </div>

    <!-- Floating WhatsApp Button -->
    <div class="fixed bottom-8 right-8 z-50 animate-bounce-slow">
        <a href="https://wa.me/yourwhatsappnumber"
            class="flex items-center justify-center w-16 h-16 bg-green-500 hover:bg-green-600 rounded-full transition-all duration-300 shadow-lg hover:shadow-green-500/25 transform hover:scale-110">
            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2M12 20C7.59 20 4 16.41 4 12C4 7.59 7.59 4 12 4C16.41 4 20 7.59 20 12C20 16.41 16.41 20 12 20M13 7H11V13H17V11H13V7Z" />
            </svg>
        </a>
    </div>
@endsection

@push('scripts')
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true,
            offset: 100,
            easing: 'ease-out-cubic'
        });

        // Optional: Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
@endpush
