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
            @include('sponsor.section.hero')
            @include('sponsor.section.featured-sponsors')

            @include('sponsor.section.benefits')
        </div>
    </div>
@endsection

@push('scripts')
    <script type="module">
        import * as THREE from 'three';

        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({
            canvas: document.querySelector('#threejs-background'),
            alpha: true
        });

        renderer.setSize(window.innerWidth, window.innerHeight);

        // Create floating spheres
        const sphereGeometry = new THREE.SphereGeometry(0.5, 32, 32);
        const sphereMaterial = new THREE.MeshPhongMaterial({
            color: 0x4F46E5,
            transparent: true,
            opacity: 0.3,
            shininess: 100
        });

        const spheres = [];
        for (let i = 0; i < 10; i++) {
            const sphere = new THREE.Mesh(sphereGeometry, sphereMaterial);
            sphere.position.set(
                (Math.random() - 0.5) * 10,
                (Math.random() - 0.5) * 10,
                (Math.random() - 0.5) * 10
            );
            sphere.scale.setScalar(Math.random() * 0.5 + 0.5);
            spheres.push(sphere);
            scene.add(sphere);
        }

        // Add lights
        const ambientLight = new THREE.AmbientLight(0xffffff, 0.5);
        scene.add(ambientLight);

        const pointLight = new THREE.PointLight(0x4F46E5, 1);
        pointLight.position.set(5, 5, 5);
        scene.add(pointLight);

        camera.position.z = 5;

        function animate() {
            requestAnimationFrame(animate);

            spheres.forEach((sphere, i) => {
                sphere.rotation.x += 0.001 * (i + 1);
                sphere.rotation.y += 0.002 * (i + 1);
                sphere.position.y = Math.sin(Date.now() * 0.001 + i) * 0.5;
            });

            renderer.render(scene, camera);
        }

        animate();

        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });
    </script>
@endpush
