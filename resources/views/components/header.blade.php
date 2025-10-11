<!-- Header -->
<header id="main-header" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 py-4">
    <div class="header-backdrop absolute inset-0 bg-white/0 backdrop-blur-0 transition-all duration-300"></div>
    <div class="max-w-7xl mx-auto md:px-4 lg:px-8 relative z-10">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <a wire:navigate href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('image.png') }}" class="sm:h-16 h-12" alt="">
            </a>

            <!-- Navigation -->
            <nav class="hidden md:flex gap-8">
                <a wire:navigate href="{{ route('home') }}"
                    class="text-gray-700 hover:text-[#a53692] font-medium {{ request()->routeIs('home') ? 'text-[#a53692]' : '' }} transition-colors duration-300 py-2">Home</a>
                <a wire:navigate href="{{ route('about') }}"
                    class="text-gray-700 hover:text-[#a53692] font-medium {{ request()->routeIs('about') ? 'text-[#a53692]' : '' }} transition-colors duration-300 py-2">About
                    Us</a>
                <a wire:navigate href="{{ route('doctors') }}"
                    class="text-gray-700 hover:text-[#a53692] font-medium {{ request()->routeIs('doctors') ? 'text-[#a53692]' : '' }} transition-colors duration-300 py-2">Doctors</a>

                <!-- Services Dropdown -->
                <div class="relative group">
                    <button
                        class="text-gray-700 hover:text-[#a53692] font-medium {{ request()->routeIs('services') ? 'text-[#a53692]' : '' }} transition-colors duration-300 py-2 flex items-center gap-1">
                        Services
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div
                        class="absolute left-0 top-full mt-2 w-64 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 border border-gray-100">
                        <div class="py-2">
                            <a wire:navigate href="{{ route('services') }}"
                                class="block px-4 py-3 text-gray-700 hover:bg-[#a53692] hover:text-white transition-all duration-200 border-b border-gray-100">
                                <div class="font-medium">All Services</div>
                            </a>
                            <a wire:navigate href="{{ route('ivf-treatment') }}"
                                class="block px-4 py-3 text-gray-700 hover:bg-[#a53692] hover:text-white transition-all duration-200 border-b border-gray-100">
                                <div class="font-medium">IVF Treatment</div>
                            </a>
                            <a wire:navigate href="{{ route('male-infertility') }}"
                                class="block px-4 py-3 text-gray-700 hover:bg-[#a53692] hover:text-white transition-all duration-200 border-b border-gray-100">
                                <div class="font-medium">Male Infertility</div>
                            </a>
                            <a wire:navigate href="{{ route('egg-freezing') }}"
                                class="block px-4 py-3 text-gray-700 hover:bg-[#a53692] hover:text-white transition-all duration-200 border-b border-gray-100">
                                <div class="font-medium">Egg Freezing</div>
                            </a>
                            <a wire:navigate href="{{ route('embryo-genetic') }}"
                                class="block px-4 py-3 text-gray-700 hover:bg-[#a53692] hover:text-white transition-all duration-200 border-b border-gray-100">
                                <div class="font-medium">Genetic Testing</div>
                            </a>
                            <a wire:navigate href="{{ route('donor-programs') }}"
                                class="block px-4 py-3 text-gray-700 hover:bg-[#a53692] hover:text-white transition-all duration-200">
                                <div class="font-medium">Donor Programs</div>
                            </a>
                            <a wire:navigate href="{{ route('icsi-treatment') }}"
                                class="block px-4 py-3 text-gray-700 hover:bg-[#a53692] hover:text-white transition-all duration-200">
                                <div class="font-medium">ICSI Treatment</div>
                            </a>
                            <a wire:navigate href="{{ route('surrogacy') }}"
                                class="block px-4 py-3 text-gray-700 hover:bg-[#a53692] hover:text-white transition-all duration-200">
                                <div class="font-medium">Surrogacy Treatment</div>
                            </a>
                            <a wire:navigate href="{{ route('fertility-preservation') }}"
                                class="block px-4 py-3 text-gray-700 hover:bg-[#a53692] hover:text-white transition-all duration-200">
                                <div class="font-medium">Fertility Preservation</div>
                            </a>
                        </div>
                    </div>
                </div>

                <a wire:navigate href="{{ route('contact') }}"
                    class="text-gray-700 hover:text-[#a53692] font-medium {{ request()->routeIs('contact') ? 'text-[#a53692]' : '' }} transition-colors duration-300 py-2">Contact</a>
            </nav>

            <!-- CTA Buttons -->
            <div class="flex items-center md:space-x-4">
                <a href="tel:+1234567890"
                    class="hidden sm:flex text-gray-700 hover:text-[#a53692] font-medium transition-colors duration-300">
                <a href="tel:+917488880400" class="hidden sm:flex text-gray-700 hover:text-[#a53692] font-medium transition-colors duration-300">
                    📞 Call Now
                </a>
                <a wire:navigate href="{{ route('booking') }}"
                    class="bg-[#a53692] text-white px-6 py-2 rounded-md hover:bg-[#8c2b7b] font-medium transition-all duration-300 flex gap-2 text-xs sm:text-base">
                    <span class="hidden sm:flex">Book</span> Appointment
                </a>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
<!-- Mobile Navigation Menu -->
<div id="mobile-menu" class="hidden md:hidden backdrop bg-white shadow-lg pb-6 mt-4" x-data="{ openServices: false }">
    <div class="flex flex-col p-4 space-y-4">
        <a wire:navigate href="{{ route('home') }}"
            class="text-gray-700 hover:text-[#a53692] font-medium {{ request()->routeIs('home') ? 'text-[#a53692]' : '' }} transition-colors duration-300">Home</a>

        <a wire:navigate href="{{ route('about') }}"
            class="text-gray-700 hover:text-[#a53692] font-medium {{ request()->routeIs('about') ? 'text-[#a53692]' : '' }} transition-colors duration-300">About Us</a>

        <a wire:navigate href="{{ route('doctors') }}"
            class="text-gray-700 hover:text-[#a53692] font-medium {{ request()->routeIs('doctors') ? 'text-[#a53692]' : '' }} transition-colors duration-300">Doctors</a>

        <!-- Mobile Services Dropdown -->
        <div class="border-l-2 border-[#a53692] pl-3">
            <button @click="openServices = !openServices" class="flex justify-between items-center w-full text-gray-700 font-medium mb-2">
                <span>Services</span>
                <svg :class="openServices ? 'rotate-180' : ''" class="w-4 h-4 transition-transform duration-300"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <div x-show="openServices" x-transition class="flex flex-col space-y-3 ml-3">
                <a wire:navigate href="{{ route('services') }}" class="text-gray-600 hover:text-[#a53692] transition-colors duration-300 text-sm">All Services</a>
                <a wire:navigate href="{{ route('ivf-treatment') }}" class="text-gray-600 hover:text-[#a53692] transition-colors duration-300 text-sm">IVF Treatment</a>
                <a wire:navigate href="{{ route('male-infertility') }}" class="text-gray-600 hover:text-[#a53692] transition-colors duration-300 text-sm">Male Infertility</a>
                <a wire:navigate href="{{ route('egg-freezing') }}" class="text-gray-600 hover:text-[#a53692] transition-colors duration-300 text-sm">Egg Freezing</a>
                <a wire:navigate href="{{ route('embryo-genetic') }}" class="text-gray-600 hover:text-[#a53692] transition-colors duration-300 text-sm">Embryo Genetic Testing</a>
                <a wire:navigate href="{{ route('donor-programs') }}" class="text-gray-600 hover:text-[#a53692] transition-colors duration-300 text-sm">Donor Programs</a>
                <a wire:navigate href="{{ route('surrogacy') }}" class="text-gray-600 hover:text-[#a53692] transition-colors duration-300 text-sm">Surrogacy Treatment</a>
                <a wire:navigate href="{{ route('icsi-treatment') }}" class="text-gray-600 hover:text-[#a53692] transition-colors duration-300 text-sm">ICSI Treatment</a>
                <a wire:navigate href="{{ route('fertility-preservation') }}" class="text-gray-600 hover:text-[#a53692] transition-colors duration-300 text-sm">Fertility Preservation</a>
        
        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="hidden md:hidden backdrop bg-white shadow-lg pb-6 mt-4">
            <div class="flex flex-col p-4 space-y-4">
                <a wire:navigate href="{{ route('home') }}" class="text-gray-700 hover:text-[#a53692] font-medium {{ request()->routeIs('home') ? 'text-[#a53692]' : '' }} transition-colors duration-300">Home</a>
                <a wire:navigate href="{{ route('about') }}" class="text-gray-700 hover:text-[#a53692] font-medium {{ request()->routeIs('about') ? 'text-[#a53692]' : '' }} transition-colors duration-300">About Us</a>
                <a wire:navigate href="{{ route('doctors') }}" class="text-gray-700 hover:text-[#a53692] font-medium {{ request()->routeIs('doctors') ? 'text-[#a53692]' : '' }} transition-colors duration-300">Doctors</a>
                <a wire:navigate href="{{ route('services') }}" class="text-gray-700 hover:text-[#a53692] font-medium {{ request()->routeIs('services') ? 'text-[#a53692]' : '' }} transition-colors duration-300">Services</a>
                <a wire:navigate href="{{ route('contact') }}" class="text-gray-700 hover:text-[#a53692] font-medium {{ request()->routeIs('contact') ? 'text-[#a53692]' : '' }} transition-colors duration-300">Contact</a>
                <a wire:navigate href="{{ route('booking') }}" class="text-gray-700 hover:text-[#a53692] font-medium transition-colors duration-300">Book Appointment</a>
                <a href="tel:+917488880400" class="text-gray-700 hover:text-[#a53692] font-medium transition-colors duration-300">📞 Call Now</a>
            </div>
        </div>

        <a wire:navigate href="{{ route('contact') }}"
            class="text-gray-700 hover:text-[#a53692] font-medium {{ request()->routeIs('contact') ? 'text-[#a53692]' : '' }} transition-colors duration-300">Contact</a>

        <a wire:navigate href="{{ route('booking') }}"
            class="text-gray-700 hover:text-[#a53692] font-medium transition-colors duration-300">Book Appointment</a>

        <a href="tel:+1234567890"
            class="text-gray-700 hover:text-[#a53692] font-medium transition-colors duration-300">📞 Call Now</a>
    </div>
</div>

    </div>
</header>

<!-- Spacer -->
<div id="header-spacer" class="h-20"></div>

<script>
    function initHeaderScript() {
        const header = document.getElementById('main-header');
        if (!header) return;

        const backdrop = header.querySelector('.header-backdrop');
        const spacer = document.getElementById('header-spacer');
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        function updateHeader() {
            if (window.scrollY > 50) {
                header.classList.add('py-2');
                header.classList.remove('py-4');
                backdrop.classList.add('bg-white/80', 'backdrop-blur-lg');
                backdrop.classList.remove('bg-white/50', 'backdrop-blur-0');
            } else {
                header.classList.remove('py-2');
                header.classList.add('py-4');
                backdrop.classList.remove('bg-white/80', 'backdrop-blur-lg');
                backdrop.classList.add('bg-white/0', 'backdrop-blur-0');
            }
        }

        function updateSpacerHeight() {
            if (spacer) {
                spacer.style.height = header.offsetHeight + 'px';
            }
        }

        // Attach toggle
        if (mobileBtn && mobileMenu) {
            mobileBtn.onclick = () => {
                mobileMenu.classList.toggle('hidden');
            };
        }

        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                if (!mobileMenu.contains(e.target) && !mobileBtn.contains(e.target)) {
                    mobileMenu.classList.add('hidden');
                }
            }
        });

        updateHeader();
        updateSpacerHeight();

        window.addEventListener('scroll', updateHeader);
        window.addEventListener('resize', updateSpacerHeight);
    }

    // Run on page load
    document.addEventListener("DOMContentLoaded", initHeaderScript);

    // Re-run after Livewire navigation
    document.addEventListener("livewire:navigated", initHeaderScript);
</script>
