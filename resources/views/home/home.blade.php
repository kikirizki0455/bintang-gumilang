@extends('layouts.home')

@section('content')
    <!-- Main content wrapper with shared background -->
    <div class="relative overflow-hidden">
        <!-- Shared Background with enhanced blur effect -->
        <div class="fixed inset-0 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 opacity-90"></div>

        <!-- Shared Animated Background with enhanced blurs -->
        <div id="main-particles" class="fixed inset-0 z-0 opacity-50"></div>

        <!-- Shared Enhanced Decorative Elements with softer edges -->
        <div class="fixed top-0 left-0 w-96 h-96 bg-blue-600/10 rounded-full blur-[100px] animate-pulse"></div>
        <div class="fixed bottom-0 right-0 w-96 h-96 bg-purple-600/10 rounded-full blur-[100px] animate-pulse"
            style="animation-delay: 2s;"></div>
        <div class="fixed top-1/2 right-1/4 w-64 h-64 bg-primary/10 rounded-full blur-[80px] animate-pulse"
            style="animation-delay: 1s;"></div>

        <!-- Content sections -->
        <div class="relative z-10">
            @include('home.section.about')
            @include('home.section.why-choose-us')
            @include('home.section.service')
            @include('home.section.customer-service')
            @include('home.section.contact-blade')
        </div>
    </div>
@endsection
