import * as THREE from 'three';

class BackgroundAnimation {
    constructor() {
        this.container = document.getElementById('three-container');
        if (!this.container) return;

        // Perbaikan deteksi halaman
        this.isBigCodePage = document.body.classList.contains('bigcode-page');

        // Set warna berdasarkan halaman
        this.themeColor = this.isBigCodePage ? 0x3b82f6 : 0xc3912e;

        this.scene = new THREE.Scene();
        this.camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        this.renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });

        this.particles = [];
        this.mouse = new THREE.Vector2();
        this.targetRotation = new THREE.Vector2();
        
        this.init();
        this.setupMouseListeners();
    }

    init() {
        this.renderer.setSize(window.innerWidth, window.innerHeight);
        this.renderer.setClearColor(0x000000, 0);
        this.container.appendChild(this.renderer.domElement);

        this.camera.position.z = 30;

        const particleCount = 200;
        const geometry = new THREE.BufferGeometry();
        const positions = new Float32Array(particleCount * 3);
        const colors = new Float32Array(particleCount * 3);
        const sizes = new Float32Array(particleCount);

        // Gunakan warna yang sudah ditentukan
        const color = new THREE.Color(this.themeColor);
        
        for (let i = 0; i < particleCount; i++) {
            positions[i * 3] = (Math.random() - 0.5) * 50;
            positions[i * 3 + 1] = (Math.random() - 0.5) * 50;
            positions[i * 3 + 2] = (Math.random() - 0.5) * 50;

            colors[i * 3] = color.r;
            colors[i * 3 + 1] = color.g;
            colors[i * 3 + 2] = color.b;

            sizes[i] = Math.random() * 2;
        }

        geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
        geometry.setAttribute('color', new THREE.BufferAttribute(colors, 3));
        geometry.setAttribute('size', new THREE.BufferAttribute(sizes, 1));

        const material = new THREE.PointsMaterial({
            size: 0.1,
            vertexColors: true,
            color: this.themeColor,  // Gunakan warna yang sudah ditentukan
            transparent: true,
            opacity: 0.8,
            sizeAttenuation: true
        });

        this.particleSystem = new THREE.Points(geometry, material);
        this.scene.add(this.particleSystem);

        const ambientLight = new THREE.AmbientLight(0xffffff, 0.5);
        this.scene.add(ambientLight);

        window.addEventListener('resize', this.onWindowResize.bind(this));
        this.animate();
    }

    setupMouseListeners() {
        document.addEventListener('mousemove', (event) => {
            this.mouse.x = (event.clientX / window.innerWidth) * 2 - 1;
            this.mouse.y = -(event.clientY / window.innerHeight) * 2 + 1;

            this.targetRotation.x = this.mouse.y * 0.5;
            this.targetRotation.y = this.mouse.x * 0.5;
        });
    }

    animate() {
        requestAnimationFrame(this.animate.bind(this));

        this.particleSystem.rotation.y += 0.002;
        this.particleSystem.rotation.x += 0.001;

        const positions = this.particleSystem.geometry.attributes.position.array;
        for (let i = 0; i < positions.length; i += 3) {
            positions[i + 1] += Math.sin(Date.now() * 0.001 + positions[i] * 0.1) * 0.01;
        }
        this.particleSystem.geometry.attributes.position.needsUpdate = true;

        this.renderer.render(this.scene, this.camera);
    }

    onWindowResize() {
        this.camera.aspect = window.innerWidth / window.innerHeight;
        this.camera.updateProjectionMatrix();
        this.renderer.setSize(window.innerWidth, window.innerHeight);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new BackgroundAnimation();
});
