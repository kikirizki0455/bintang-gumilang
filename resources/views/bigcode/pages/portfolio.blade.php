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
                            Our Portfolio
                        </span>
                        <h2
                            class="text-6xl font-bold mb-6 bg-gradient-to-r from-white via-blue-400 to-blue-600 bg-clip-text text-transparent">
                            Innovative Solutions Portfolio
                        </h2>
                        <p class="text-gray-300 max-w-2xl mx-auto text-lg">
                            Explore our collection of successful projects that showcase our expertise in creating
                            cutting-edge digital solutions.
                        </p>
                    </div>

                    <!-- Featured Projects -->
                    <div class="mb-32">
                        <h3 class="text-3xl font-bold text-white mb-12 text-center">Featured Projects</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                            <!-- Large Featured Project 1 -->
                            <div class="group relative rounded-2xl overflow-hidden" data-aos="fade-up">
                                <div class="relative aspect-video">
                                    <img src="{{ asset('images/portfolio/featured1.jpg') }}" alt="Enterprise Platform"
                                        class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/50 to-transparent">
                                    </div>
                                </div>
                                <div class="absolute bottom-0 left-0 right-0 p-8">
                                    <h4 class="text-2xl font-bold text-white mb-3">Enterprise Management Platform</h4>
                                    <p class="text-gray-300 mb-4">Comprehensive solution for large-scale business operations
                                    </p>
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="px-3 py-1 bg-blue-500/20 text-blue-300 rounded-full text-sm">React</span>
                                        <span
                                            class="px-3 py-1 bg-blue-500/20 text-blue-300 rounded-full text-sm">Node.js</span>
                                        <span
                                            class="px-3 py-1 bg-blue-500/20 text-blue-300 rounded-full text-sm">PostgreSQL</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Large Featured Project 2 -->
                            <div class="group relative rounded-2xl overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                                <div class="relative aspect-video">
                                    <img src="{{ asset('images/portfolio/featured2.jpg') }}" alt="Mobile App"
                                        class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/50 to-transparent">
                                    </div>
                                </div>
                                <div class="absolute bottom-0 left-0 right-0 p-8">
                                    <h4 class="text-2xl font-bold text-white mb-3">Smart City Mobile App</h4>
                                    <p class="text-gray-300 mb-4">IoT-integrated urban management solution</p>
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="px-3 py-1 bg-blue-500/20 text-blue-300 rounded-full text-sm">Flutter</span>
                                        <span
                                            class="px-3 py-1 bg-blue-500/20 text-blue-300 rounded-full text-sm">Firebase</span>
                                        <span class="px-3 py-1 bg-blue-500/20 text-blue-300 rounded-full text-sm">IoT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Categories -->
                    <div class="mb-32">
                        <h3 class="text-3xl font-bold text-white mb-12 text-center">Our Solutions</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <!-- Category 1: Web Applications -->
                            <div class="bg-gray-800/30 backdrop-blur-sm rounded-xl p-6 border border-gray-700"
                                data-aos="fade-up">
                                <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center mb-4">
                                    <i class="fas fa-globe text-blue-400 text-2xl"></i>
                                </div>
                                <h4 class="text-xl font-bold text-white mb-3">Web Applications</h4>
                                <p class="text-gray-400 mb-4">Custom web solutions for modern businesses</p>
                                <ul class="text-gray-300 space-y-2">
                                    <li>• E-commerce Platforms</li>
                                    <li>• CRM Systems</li>
                                    <li>• Enterprise Dashboards</li>
                                </ul>
                            </div>

                            <!-- Category 2: Mobile Development -->
                            <div class="bg-gray-800/30 backdrop-blur-sm rounded-xl p-6 border border-gray-700"
                                data-aos="fade-up" data-aos-delay="100">
                                <div class="w-12 h-12 bg-purple-500/20 rounded-lg flex items-center justify-center mb-4">
                                    <i class="fas fa-mobile-alt text-purple-400 text-2xl"></i>
                                </div>
                                <h4 class="text-xl font-bold text-white mb-3">Mobile Solutions</h4>
                                <p class="text-gray-400 mb-4">Cross-platform mobile applications</p>
                                <ul class="text-gray-300 space-y-2">
                                    <li>• iOS Applications</li>
                                    <li>• Android Applications</li>
                                    <li>• PWA Development</li>
                                </ul>
                            </div>

                            <!-- Category 3: Custom Solutions -->
                            <div class="bg-gray-800/30 backdrop-blur-sm rounded-xl p-6 border border-gray-700"
                                data-aos="fade-up" data-aos-delay="200">
                                <div class="w-12 h-12 bg-green-500/20 rounded-lg flex items-center justify-center mb-4">
                                    <i class="fas fa-cogs text-green-400 text-2xl"></i>
                                </div>
                                <h4 class="text-xl font-bold text-white mb-3">Custom Solutions</h4>
                                <p class="text-gray-400 mb-4">Tailored software solutions</p>
                                <ul class="text-gray-300 space-y-2">
                                    <li>• API Development</li>
                                    <li>• System Integration</li>
                                    <li>• Legacy Modernization</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Projects Grid -->
                    <div class="mb-32">
                        <h3 class="text-3xl font-bold text-white mb-12 text-center">Recent Projects</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            @foreach (range(1, 6) as $index)
                                <div class="group relative overflow-hidden rounded-xl" data-aos="fade-up"
                                    data-aos-delay="{{ $index * 50 }}">
                                    <div class="relative">
                                        <img src="{{ asset('images/portfolio/project' . $index . '.jpg') }}"
                                            alt="Project {{ $index }}"
                                            class="w-full aspect-video object-cover rounded-xl transform group-hover:scale-105 transition-transform duration-500">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500">
                                        </div>
                                    </div>
                                    <div class="p-6">
                                        <h4 class="text-xl font-bold text-white mb-2">Project Title {{ $index }}</h4>
                                        <p class="text-gray-400 mb-4">Brief project description goes here</p>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="px-3 py-1 bg-blue-500/10 text-blue-400 rounded-full text-sm">Tech
                                                1</span>
                                            <span class="px-3 py-1 bg-blue-500/10 text-blue-400 rounded-full text-sm">Tech
                                                2</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Technologies Section -->
                    <section class="mb-32">
                        <h3 class="text-3xl font-bold text-white mb-12 text-center">Our Tech Stack</h3>
                        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8">
                            @foreach (['React', 'Laravel', 'Vue', 'Node', 'Flutter', 'PostgreSQL', 'MongoDB', 'AWS', 'Docker', 'Kubernetes', 'Python', 'TypeScript'] as $tech)
                                <div class="bg-gray-800/20 backdrop-blur-sm p-6 rounded-xl text-center hover:bg-gray-800/30 transition-all duration-300"
                                    data-aos="fade-up">
                                    <img src="{{ asset('images/tech/' . strtolower($tech) . '.svg') }}"
                                        alt="{{ $tech }}" class="w-12 h-12 mx-auto mb-4">
                                    <h4 class="text-white font-semibold">{{ $tech }}</h4>
                                </div>
                            @endforeach
                        </div>
                    </section>

                    <!-- Call to Action -->
                    <section>
                        <div
                            class="bg-gradient-to-r from-blue-600/20 to-purple-600/20 rounded-3xl p-12 backdrop-blur-sm border border-white/10">
                            <div class="max-w-3xl mx-auto text-center">
                                <h2 class="text-4xl font-bold text-white mb-6">Ready to Build Something Amazing?</h2>
                                <p class="text-gray-300 mb-8">Let's collaborate to create innovative solutions that drive
                                    your business forward.</p>
                                <div class="flex gap-4 justify-center">
                                    <a href="#contact"
                                        class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-8 py-4 rounded-full transition-all duration-300 transform hover:scale-105">
                                        Start a Project
                                    </a>
                                    <a href="/our-team"
                                        class="inline-block border-2 border-blue-500/30 hover:border-blue-500 text-gray-300 hover:text-blue-400 px-8 py-4 rounded-full transition-all duration-300 transform hover:scale-105">
                                        Meet Our Team
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
