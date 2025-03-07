@extends('layouts.home')

@section('content')
    <!-- Main content wrapper with shared background -->
    <div class="relative overflow-hidden">
        <!-- Shared Background with enhanced blur effect -->
        <div class="fixed inset-0 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 opacity-90"></div>

        <!-- Shared Animated Background -->
        <div id="main-particles" class="fixed inset-0 z-0 opacity-50"></div>

        <!-- Decorative Elements -->
        <div class="fixed top-0 left-0 w-96 h-96 bg-blue-600/10 rounded-full blur-[100px] animate-pulse"></div>
        <div class="fixed bottom-0 right-0 w-96 h-96 bg-purple-600/10 rounded-full blur-[100px] animate-pulse"
            style="animation-delay: 2s;"></div>

        <!-- Content sections -->
        <div class="relative z-10 pt-20">
            @include('information.section.news')
            @include('information.section.announcements')
            @include('information.section.events')
            @include('information.section.faq')
        </div>
    </div>
@endsection
