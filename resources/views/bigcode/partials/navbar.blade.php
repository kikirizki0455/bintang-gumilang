<nav x-data="{ open: false }" class="bg-gray-900/80 backdrop-blur-md fixed top-0 left-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex items-center">
                <!-- Logo -->
                <a href="" class="flex items-center space-x-2">
                    <img src="{{ asset('images/bigcode-logo.svg') }}" alt="BIG.Code" class="h-10 w-auto">
                    <span class="text-2xl font-bold text-blue-400">BIG.Code</span>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden md:ml-10 md:flex md:space-x-8">
                    <x-nav-link href="" class="text-gray-300 hover:text-blue-400">
                        About Us
                    </x-nav-link>
                    <x-nav-link href="" class="text-gray-300 hover:text-blue-400">
                        Services
                    </x-nav-link>
                    <x-nav-link href="" class="text-gray-300 hover:text-blue-400">
                        Portfolio
                    </x-nav-link>
                    <x-nav-link href="" class="text-gray-300 hover:text-blue-400">
                        Our Team
                    </x-nav-link>
                    <x-nav-link href="" class="text-gray-300 hover:text-blue-400">
                        Careers
                    </x-nav-link>
                    <x-nav-link href="" class="text-gray-300 hover:text-blue-400">
                        Tech Blog
                    </x-nav-link>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="hidden md:flex items-center">
                <a href=""
                    class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-full transition duration-300">
                    Start Project
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex items-center md:hidden">
                <button @click="open = !open" class="text-gray-300 hover:text-white">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="open" class="md:hidden bg-gray-800">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="" class="block px-3 py-2 text-gray-300 hover:bg-gray-700">
                About Us
            </x-responsive-nav-link>
            <x-responsive-nav-link href="" class="block px-3 py-2 text-gray-300 hover:bg-gray-700">
                Services
            </x-responsive-nav-link>
            <x-responsive-nav-link href="" class="block px-3 py-2 text-gray-300 hover:bg-gray-700">
                Portfolio
            </x-responsive-nav-link>
            <x-responsive-nav-link href="" class="block px-3 py-2 text-gray-300 hover:bg-gray-700">
                Our Team
            </x-responsive-nav-link>
            <x-responsive-nav-link href="" class="block px-3 py-2 text-gray-300 hover:bg-gray-700">
                Careers
            </x-responsive-nav-link>
            <x-responsive-nav-link href="" class="block px-3 py-2 text-gray-300 hover:bg-gray-700">
                Tech Blog
            </x-responsive-nav-link>
            <x-responsive-nav-link href="" class="block px-3 py-2 bg-blue-500 text-white rounded-md">
                Start Project
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
