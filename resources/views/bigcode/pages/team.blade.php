@extends('layouts.bigcode')

@section('content')
    <div class="relative overflow-hidden">
        <!-- Background Elements -->
        <div class="fixed inset-0 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 opacity-90"></div>
        <div id="main-particles" class="fixed inset-0 z-0 opacity-50"></div>
        <div class="fixed top-0 left-0 w-96 h-96 bg-blue-600/10 rounded-full blur-[100px] animate-pulse"></div>
        <div class="fixed bottom-0 right-0 w-96 h-96 bg-purple-600/10 rounded-full blur-[100px] animate-pulse"
            style="animation-delay: 2s;"></div>

        <!-- Content sections -->
        <div class="relative z-10">
            <!-- Hero Section -->
            <section class="py-32">
                <div class="container mx-auto px-6 relative">
                    <!-- Section Header -->
                    <div class="text-center mb-24">
                        <span
                            class="inline-block py-1.5 px-4 bg-blue-500/10 border border-blue-500/20 rounded-full text-blue-400 font-semibold text-sm uppercase tracking-wider mb-4 backdrop-blur-sm">
                            Our Team
                        </span>
                        <h2
                            class="text-6xl font-bold mb-6 bg-gradient-to-r from-white via-blue-400 to-blue-600 bg-clip-text text-transparent">
                            Meet the Innovators
                        </h2>
                        <p class="text-gray-300 max-w-2xl mx-auto text-lg">
                            Our diverse team of experts brings together years of experience in software development,
                            design, and project management.
                        </p>
                    </div>

                    <!-- Leadership Team -->
                    <div class="mb-32">
                        <h3 class="text-3xl font-bold text-white mb-12 text-center">Leadership Team</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                            <!-- Leader 1 -->
                            <div class="group" data-aos="fade-up">
                                <div class="relative rounded-2xl overflow-hidden mb-6">
                                    <img src="{{ asset('images/team/leader1.jpg') }}" alt="CEO"
                                        class="w-full aspect-square object-cover">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                                    </div>
                                </div>
                                <h4 class="text-xl font-bold text-white mb-2">John Doe</h4>
                                <p class="text-blue-400 mb-4">Chief Executive Officer</p>
                                <p class="text-gray-400">15+ years of experience in tech leadership and innovation.</p>
                            </div>

                            <!-- Leader 2 -->
                            <div class="group" data-aos="fade-up" data-aos-delay="100">
                                <div class="relative rounded-2xl overflow-hidden mb-6">
                                    <img src="{{ asset('images/team/leader2.jpg') }}" alt="CTO"
                                        class="w-full aspect-square object-cover">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                                    </div>
                                </div>
                                <h4 class="text-xl font-bold text-white mb-2">Jane Smith</h4>
                                <p class="text-blue-400 mb-4">Chief Technology Officer</p>
                                <p class="text-gray-400">Expert in cloud architecture and emerging technologies.</p>
                            </div>

                            <!-- Leader 3 -->
                            <div class="group" data-aos="fade-up" data-aos-delay="200">
                                <div class="relative rounded-2xl overflow-hidden mb-6">
                                    <img src="{{ asset('images/team/leader3.jpg') }}" alt="COO"
                                        class="w-full aspect-square object-cover">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                                    </div>
                                </div>
                                <h4 class="text-xl font-bold text-white mb-2">Mike Johnson</h4>
                                <p class="text-blue-400 mb-4">Chief Operations Officer</p>
                                <p class="text-gray-400">Specialized in scaling operations and team management.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Development Team -->
                    <div class="mb-32">
                        <h3 class="text-3xl font-bold text-white mb-12 text-center">Development Team</h3>
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                            @foreach (range(1, 8) as $index)
                                <div class="group" data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                                    <div class="relative rounded-xl overflow-hidden mb-4">
                                        <img src="{{ asset('images/team/dev' . $index . '.jpg') }}"
                                            alt="Developer {{ $index }}" class="w-full aspect-square object-cover">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                                        </div>
                                    </div>
                                    <h4 class="text-lg font-bold text-white mb-1">Developer Name</h4>
                                    <p class="text-blue-400 text-sm mb-2">Senior Developer</p>
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="px-2 py-1 bg-blue-500/10 text-blue-400 rounded-full text-xs">React</span>
                                        <span
                                            class="px-2 py-1 bg-blue-500/10 text-blue-400 rounded-full text-xs">Node.js</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Team Stats -->
                    <div class="mb-32">
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                            <div class="bg-gray-800/30 backdrop-blur-sm rounded-xl p-8 text-center" data-aos="fade-up">
                                <div class="text-4xl font-bold text-blue-400 mb-2">50+</div>
                                <div class="text-gray-300">Team Members</div>
                            </div>
                            <div class="bg-gray-800/30 backdrop-blur-sm rounded-xl p-8 text-center" data-aos="fade-up"
                                data-aos-delay="100">
                                <div class="text-4xl font-bold text-blue-400 mb-2">200+</div>
                                <div class="text-gray-300">Projects Completed</div>
                            </div>
                            <div class="bg-gray-800/30 backdrop-blur-sm rounded-xl p-8 text-center" data-aos="fade-up"
                                data-aos-delay="200">
                                <div class="text-4xl font-bold text-blue-400 mb-2">15+</div>
                                <div class="text-gray-300">Countries Reached</div>
                            </div>
                            <div class="bg-gray-800/30 backdrop-blur-sm rounded-xl p-8 text-center" data-aos="fade-up"
                                data-aos-delay="300">
                                <div class="text-4xl font-bold text-blue-400 mb-2">98%</div>
                                <div class="text-gray-300">Client Satisfaction</div>
                            </div>
                        </div>
                    </div>

                    <!-- Join Our Team -->
                    <section>
                        <div
                            class="bg-gradient-to-r from-blue-600/20 to-purple-600/20 rounded-3xl p-12 backdrop-blur-sm border border-white/10">
                            <div class="max-w-3xl mx-auto text-center">
                                <h2 class="text-4xl font-bold text-white mb-6">Join Our Team</h2>
                                <p class="text-gray-300 mb-8">We're always looking for talented individuals to join our
                                    growing team.</p>
                                <div class="flex gap-4 justify-center">
                                    <a href="#careers"
                                        class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-8 py-4 rounded-full transition-all duration-300 transform hover:scale-105">
                                        View Open Positions
                                    </a>
                                    <a href="#contact"
                                        class="inline-block border-2 border-blue-500/30 hover:border-blue-500 text-gray-300 hover:text-blue-400 px-8 py-4 rounded-full transition-all duration-300 transform hover:scale-105">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </div>
    </div>
@endsection
