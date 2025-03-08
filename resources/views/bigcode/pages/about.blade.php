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
                            About Us
                        </span>
                        <h2
                            class="text-6xl font-bold mb-6 bg-gradient-to-r from-white via-blue-400 to-blue-600 bg-clip-text text-transparent">
                            Our Journey in Tech Excellence
                        </h2>
                        <div
                            class="w-32 h-1.5 bg-gradient-to-r from-blue-600 via-blue-400 to-blue-600 mx-auto rounded-full">
                        </div>
                    </div>

                    <!-- Company Story -->
                    <div class="flex flex-wrap items-center gap-20">
                        <!-- Image Section -->
                        <div class="w-full lg:w-5/12">
                            <div class="relative group">
                                <div
                                    class="relative z-10 rounded-3xl overflow-hidden shadow-2xl border border-white/5 backdrop-blur-sm">
                                    <img src="{{ asset('build/assets/img/about-us.jpg') }}" alt="About BIG.Code"
                                        class="w-full h-auto transform group-hover:scale-105 transition-transform duration-700 filter">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-gray-900/20 to-transparent">
                                    </div>
                                </div>
                                <div
                                    class="absolute -bottom-8 -right-8 w-40 h-40 bg-gradient-to-br from-blue-600/40 to-blue-400/40 rounded-3xl -z-10 blur-[30px]">
                                </div>
                                <div
                                    class="absolute -top-8 -left-8 w-40 h-40 bg-gradient-to-br from-blue-800/30 to-blue-600/30 rounded-full -z-10 blur-[30px]">
                                </div>
                            </div>
                        </div>

                        <!-- Content Section -->
                        <div class="w-full lg:w-6/12 relative">
                            <div class="absolute inset-0 bg-gray-900/30 backdrop-blur-md rounded-3xl"></div>
                            <div class="relative p-8">
                                <h3 class="text-3xl font-bold text-white mb-6">Our Story</h3>
                                <p class="text-gray-300 leading-relaxed mb-8">
                                    BIG.Code was founded with a vision to bridge the gap between innovative technology and
                                    business
                                    success. Our journey began with a simple mission: to provide exceptional software
                                    solutions that
                                    empower businesses to thrive in the digital age.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Section -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-20">
                        @foreach ([['number' => '100+', 'label' => 'Projects Completed'], ['number' => '50+', 'label' => 'Happy Clients'], ['number' => '25+', 'label' => 'Team Members'], ['number' => '5+', 'label' => 'Years Experience']] as $stat)
                            <div class="text-center group">
                                <div
                                    class="text-5xl font-bold bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent mb-3">
                                    {{ $stat['number'] }}
                                </div>
                                <div class="text-gray-300 font-medium">{{ $stat['label'] }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <!-- Values Section -->
            <section class="py-20 relative">
                <div class="container mx-auto px-6">
                    <h2
                        class="text-4xl font-bold text-center mb-16 bg-gradient-to-r from-white via-blue-400 to-blue-600 bg-clip-text text-transparent">
                        Our Core Values
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Innovation -->
                        <div
                            class="bg-gray-800/30 backdrop-blur-sm p-8 rounded-2xl border border-gray-700/50 hover:border-blue-500/50 transition-all duration-300">
                            <div class="w-14 h-14 bg-blue-500/10 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-4">Innovation First</h3>
                            <p class="text-gray-400">We embrace cutting-edge technologies and creative solutions to solve
                                complex challenges.</p>
                        </div>

                        <!-- Excellence -->
                        <div
                            class="bg-gray-800/30 backdrop-blur-sm p-8 rounded-2xl border border-gray-700/50 hover:border-blue-500/50 transition-all duration-300">
                            <div class="w-14 h-14 bg-blue-500/10 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-4">Excellence in Delivery</h3>
                            <p class="text-gray-400">We maintain the highest standards in every project we undertake.</p>
                        </div>

                        <!-- Client Focus -->
                        <div
                            class="bg-gray-800/30 backdrop-blur-sm p-8 rounded-2xl border border-gray-700/50 hover:border-blue-500/50 transition-all duration-300">
                            <div class="w-14 h-14 bg-blue-500/10 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-4">Client-Centric Approach</h3>
                            <p class="text-gray-400">Your success is our priority. We build lasting partnerships through
                                trust and results.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Technology Stack -->
            <section class="py-20 relative">
                <div class="container mx-auto px-6">
                    <h2
                        class="text-4xl font-bold text-center mb-16 bg-gradient-to-r from-white via-blue-400 to-blue-600 bg-clip-text text-transparent">
                        Our Technology Stack
                    </h2>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                        <div
                            class="bg-gray-800/20 backdrop-blur-sm p-6 rounded-xl text-center hover:bg-gray-800/30 transition-all duration-300">
                            <img src="{{ asset('images/tech/react.svg') }}" alt="React" class="w-16 h-16 mx-auto mb-4">
                            <h3 class="text-white font-semibold">React</h3>
                        </div>
                        <div
                            class="bg-gray-800/20 backdrop-blur-sm p-6 rounded-xl text-center hover:bg-gray-800/30 transition-all duration-300">
                            <img src="{{ asset('images/tech/laravel.svg') }}" alt="Laravel" class="w-16 h-16 mx-auto mb-4">
                            <h3 class="text-white font-semibold">Laravel</h3>
                        </div>
                        <div
                            class="bg-gray-800/20 backdrop-blur-sm p-6 rounded-xl text-center hover:bg-gray-800/30 transition-all duration-300">
                            <img src="{{ asset('images/tech/node.svg') }}" alt="Node.js" class="w-16 h-16 mx-auto mb-4">
                            <h3 class="text-white font-semibold">Node.js</h3>
                        </div>
                        <div
                            class="bg-gray-800/20 backdrop-blur-sm p-6 rounded-xl text-center hover:bg-gray-800/30 transition-all duration-300">
                            <img src="{{ asset('images/tech/flutter.svg') }}" alt="Flutter" class="w-16 h-16 mx-auto mb-4">
                            <h3 class="text-white font-semibold">Flutter</h3>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Team Section -->
            <section class="py-20 relative">
                <div class="container mx-auto px-6">
                    <h2
                        class="text-4xl font-bold text-center mb-16 bg-gradient-to-r from-white via-blue-400 to-blue-600 bg-clip-text text-transparent">
                        Meet Our Leadership
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                        <!-- Team Member Card -->
                        <div class="group">
                            <div class="relative rounded-2xl overflow-hidden mb-6">
                                <img src="{{ asset('images/team/ceo.jpg') }}" alt="CEO"
                                    class="w-full aspect-square object-cover">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-2">John Doe</h3>
                            <p class="text-blue-400 mb-4">Chief Executive Officer</p>
                            <p class="text-gray-400">Visionary leader with 15+ years of tech industry experience.</p>
                        </div>
                        <!-- Add more team members as needed -->
                    </div>
                </div>
            </section>

            <!-- Call to Action -->
            <section class="py-20 relative">
                <div class="container mx-auto px-6">
                    <div
                        class="bg-gradient-to-r from-blue-600/20 to-purple-600/20 rounded-3xl p-12 backdrop-blur-sm border border-white/10">
                        <div class="max-w-3xl mx-auto text-center">
                            <h2 class="text-4xl font-bold text-white mb-6">Ready to Transform Your Ideas into Reality?</h2>
                            <p class="text-gray-300 mb-8">Let's collaborate to build innovative solutions that drive your
                                business forward.</p>
                            <a href="#contact"
                                class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-8 py-4 rounded-full transition-all duration-300 transform hover:scale-105">
                                Start Your Project
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
