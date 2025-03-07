<nav x-data="{ open: false }" class="bg-secondary/40 backdrop-blur-md fixed top-0 left-0 w-full z-[100]">


    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="">
                        <x-application-logo class="block h-9 w-auto fill-current text-primary" />
                    </a>
                </div>

                <!-- Navigation Links (Desktop) -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="{{ route('information') }}" class="cursor-pointer text-white hover:text-primary">
                        {{ __('Information') }}
                    </x-nav-link>

                    <x-nav-link href="{{ route('team') }}" class="cursor-pointer text-white hover:text-primary">
                        {{ __('Team') }}
                    </x-nav-link>

                    <x-nav-link href="#faq" class="cursor-pointer text-white hover:text-primary">
                        {{ __('FAQ') }}
                    </x-nav-link>

                    <x-nav-link href="{{ route('portfolio') }}" class="cursor-pointer text-white hover:text-primary">
                        {{ __('Gallery Porto') }}
                    </x-nav-link>

                    <div x-data="{ open: false }" class="relative">
                        <!-- Trigger Button -->
                        <button @click="open = !open"
                            class="text-white bg-gray-800 px-4 py-2 rounded-lg transition-transform duration-300 ease-in-out hover:bg-gray-700">
                            {{ __('Divisi') }}
                        </button>

                        <!-- Dropdown Content -->
                        <div x-show="open" @click.away="open = false"
                            x-transition:enter="transition ease-out duration-200 transform"
                            x-transition:enter-start="scale-95 opacity-0" x-transition:enter-end="scale-100 opacity-100"
                            x-transition:leave="transition ease-in duration-150 transform"
                            x-transition:leave-start="scale-100 opacity-100" x-transition:leave-end="scale-95 opacity-0"
                            class="absolute mt-2 w-40 bg-white text-gray-900 rounded-lg shadow-lg py-2">

                            <a href="{{ route('bigcode') }}"
                                class="block px-4 py-2 hover:bg-gray-200 transition-colors">{{ __('BigCode') }}</a>

                            <a href="#bigcon"
                                class="block px-4 py-2 hover:bg-gray-200 transition-colors">{{ __('BigCon') }}</a>
                        </div>
                    </div>

                    <x-nav-link href="{{ route('sponsors') }}" class="cursor-pointer text-white hover:text-primary">
                        {{ __('Sponsors') }}
                    </x-nav-link>

                    <x-nav-link href="{{ route('testimonial') }}" class="cursor-pointer text-white hover:text-primary">
                        {{ __('Testimonials') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Hamburger (Mobile) -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = !open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-gray-200 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-gray-200 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu (Mobile) -->
    <div x-show="open" class="sm:hidden bg-gray-900/95 backdrop-blur-md text-white z-[100]">
        <div class="space-y-2 py-4">
            <x-nav-link href="#information" class="block px-4 py-2 hover:bg-gray-800">
                {{ __('Information') }}
            </x-nav-link>
            <x-nav-link href="#team" class="block px-4 py-2 hover:bg-gray-800">
                {{ __('Team') }}
            </x-nav-link>
            <x-nav-link href="#faq" class="block px-4 py-2 hover:bg-gray-800">
                {{ __('FAQ') }}
            </x-nav-link>
            <x-nav-link href="#portfolio" class="block px-4 py-2 hover:bg-gray-800">
                {{ __('Gallery Porto') }}
            </x-nav-link>

            <!-- Dropdown Mobile -->
            <div x-data="{ open: false }" class="relative px-4">
                <button @click="open = !open"
                    class="w-full text-left px-4 py-2 bg-gray-800 rounded-md hover:bg-gray-700">
                    {{ __('Divisi') }}
                </button>

                <div x-show="open" @click.away="open = false"
                    x-transition:enter="transition ease-out duration-200 transform"
                    x-transition:enter-start="scale-95 opacity-0" x-transition:enter-end="scale-100 opacity-100"
                    x-transition:leave="transition ease-in duration-150 transform"
                    x-transition:leave-start="scale-100 opacity-100" x-transition:leave-end="scale-95 opacity-0"
                    class="mt-2 bg-gray-800 rounded-lg shadow-lg">
                    <a href="#bigcode"
                        class="block px-4 py-2 hover:bg-gray-700 transition-colors">{{ __('BigCode') }}</a>
                    <a href="#bigcon"
                        class="block px-4 py-2 hover:bg-gray-700 transition-colors">{{ __('BigCon') }}</a>
                </div>
            </div>

            <x-nav-link href="#sponsors" class="block px-4 py-2 hover:bg-gray-800">
                {{ __('Sponsors') }}
            </x-nav-link>
            <x-nav-link href="#testimonials" class="block px-4 py-2 hover:bg-gray-800">
                {{ __('Testimonials') }}
            </x-nav-link>
        </div>
    </div>
</nav>
