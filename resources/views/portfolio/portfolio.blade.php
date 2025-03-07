@extends('layouts.home')

@section('content')
    <!-- Main content wrapper with shared background -->
    <div class="relative overflow-hidden">
        <!-- Shared Background with enhanced blur effect -->
        <div class="fixed inset-0 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 opacity-90"></div>

        <!-- Three.js Canvas Background -->
        <canvas id="threejs-background" class="fixed inset-0 z-0"></canvas>

        <!-- Decorative Elements -->
        <div class="fixed top-0 left-0 w-96 h-96 bg-blue-600/10 rounded-full blur-[100px] animate-pulse"></div>
        <div class="fixed bottom-0 right-0 w-96 h-96 bg-purple-600/10 rounded-full blur-[100px] animate-pulse"
            style="animation-delay: 2s;"></div>

        <!-- Content sections -->
        <div class="relative z-10 pt-20">
            @include('portfolio.section.hero')
            @include('portfolio.section.bigcode')
            @include('portfolio.section.bigcons')
        </div>
    </div>
@endsection

@push('scripts')
    <script type="module">
        import * as THREE from 'three';

        // Three.js initialization
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({
            canvas: document.querySelector('#threejs-background'),
            alpha: true
        });

        renderer.setSize(window.innerWidth, window.innerHeight);

        // Create particles
        const particlesGeometry = new THREE.BufferGeometry();
        const particlesCount = 5000;
        const posArray = new Float32Array(particlesCount * 3);

        for (let i = 0; i < particlesCount * 3; i++) {
            posArray[i] = (Math.random() - 0.5) * 5;
        }

        particlesGeometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));

        const particlesMaterial = new THREE.PointsMaterial({
            size: 0.005,
            color: '#4F46E5',
            transparent: true,
            opacity: 0.8
        });

        const particlesMesh = new THREE.Points(particlesGeometry, particlesMaterial);
        scene.add(particlesMesh);

        camera.position.z = 2;

        // Animation
        function animate() {
            requestAnimationFrame(animate);
            particlesMesh.rotation.y += 0.001;
            renderer.render(scene, camera);
        }

        animate();

        // Handle resize
        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });
    </script>
@endpush
