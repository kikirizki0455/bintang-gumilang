@extends('layouts.bigcode')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 overflow-hidden">
        <div class="absolute inset-0 z-0 ">
            <!-- Background gradients -->
            <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 opacity-95"></div>
            <div
                class="absolute inset-0 bg-gradient-to-r from-blue-600/10 via-purple-600/10 to-blue-600/10 animate-gradient-x">
            </div>
        </div>

        <div class="container mx-auto px-4 relative z-10 mt-20">
            <!-- Page Header -->
            <div class="max-w-4xl mx-auto text-center mb-20 ">
                <span
                    class="inline-block py-1.5 px-4 bg-blue-500/10 border border-blue-500/20 rounded-full text-blue-400 font-semibold text-sm uppercase tracking-wider mb-4">
                    Our Services
                </span>
                <h1
                    class="text-4xl md:text-6xl font-bold bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent mb-6">
                    Comprehensive Software Solutions
                </h1>
                <p class="text-xl text-gray-300">
                    End-to-end software development services tailored to your business needs
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                <!-- Service 1: Web Development -->
                <div class="group bg-gray-800/50 backdrop-blur-sm rounded-xl border border-gray-700/50 hover:border-blue-500/50 transition-all duration-500"
                    data-aos="fade-up">
                    <div class="p-8">
                        <div class="text-blue-400 mb-6">
                            <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4 group-hover:text-blue-400 transition-colors">Web
                            Development</h3>
                        <p class="text-gray-400 mb-6">Custom web applications, responsive websites, and progressive web apps
                            built with modern technologies.</p>
                        <ul class="space-y-2 text-gray-300">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                                </svg>
                                Frontend Development
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                                </svg>
                                Backend Development
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                                </svg>
                                API Development
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Service 2: Mobile Development -->
                <div class="group bg-gray-800/50 backdrop-blur-sm rounded-xl border border-gray-700/50 hover:border-blue-500/50 transition-all duration-500"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="p-8">
                        <div class="text-blue-400 mb-6">
                            <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4 group-hover:text-blue-400 transition-colors">Mobile
                            Development</h3>
                        <p class="text-gray-400 mb-6">Native and cross-platform mobile applications for iOS and Android
                            platforms.</p>
                        <ul class="space-y-2 text-gray-300">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                                </svg>
                                iOS Development
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                                </svg>
                                Android Development
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                                </svg>
                                Cross-platform Solutions
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Service 3: Cloud Solutions -->
                <div class="group bg-gray-800/50 backdrop-blur-sm rounded-xl border border-gray-700/50 hover:border-blue-500/50 transition-all duration-500"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="p-8">
                        <div class="text-blue-400 mb-6">
                            <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M5.5 16a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 16h-8z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4 group-hover:text-blue-400 transition-colors">Cloud
                            Solutions</h3>
                        <p class="text-gray-400 mb-6">Cloud infrastructure setup, management, and optimization services.</p>
                        <ul class="space-y-2 text-gray-300">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                                </svg>
                                Cloud Architecture
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                                </svg>
                                DevOps Services
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-blue-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" />
                                </svg>
                                Cloud Security
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center" data-aos="fade-up">
                <a href="#contact"
                    class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-8 py-3 rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-blue-500/25">
                    Start Your Project
                </a>
            </div>
        </div>
    </section>

    <!-- Additional Services Section -->
    <section class="py-20 relative">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Additional Service 1 -->
                <div class="bg-gray-800/30 p-6 rounded-xl border border-gray-700/50" data-aos="fade-up">
                    <h4 class="text-lg font-semibold text-white mb-3">UI/UX Design</h4>
                    <p class="text-gray-400">User-centered design solutions that enhance user experience and engagement.</p>
                </div>

                <!-- Additional Service 2 -->
                <div class="bg-gray-800/30 p-6 rounded-xl border border-gray-700/50" data-aos="fade-up"
                    data-aos-delay="100">
                    <h4 class="text-lg font-semibold text-white mb-3">Quality Assurance</h4>
                    <p class="text-gray-400">Comprehensive testing and QA services to ensure software reliability.</p>
                </div>

                <!-- Additional Service 3 -->
                <div class="bg-gray-800/30 p-6 rounded-xl border border-gray-700/50" data-aos="fade-up"
                    data-aos-delay="200">
                    <h4 class="text-lg font-semibold text-white mb-3">DevOps</h4>
                    <p class="text-gray-400">Streamlined development and deployment processes for faster delivery.</p>
                </div>

                <!-- Additional Service 4 -->
                <div class="bg-gray-800/30 p-6 rounded-xl border border-gray-700/50" data-aos="fade-up"
                    data-aos-delay="300">
                    <h4 class="text-lg font-semibold text-white mb-3">Maintenance</h4>
                    <p class="text-gray-400">Ongoing support and maintenance to keep your software running smoothly.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
