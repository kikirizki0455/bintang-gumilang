<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CV Bintang Gumilang') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Three.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

    <!-- Three.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="antialiased">
    <div class="min-h-screen relative">
        <!-- Particles container for header -->
        <div id="header-particles" class="fixed inset-0 z-0"></div>

        <!-- Header/Hero Section -->
        @include('layouts.partials.navbar')
        @include('layouts.partials.header')

        <!-- Main Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        @include('layouts.partials.footer')
    </div>

    <!-- Three.js Canvas Container -->
    <div id="three-container" class="fixed top-0 left-0 w-full h-full -z-10"></div>
</body>

</html>
