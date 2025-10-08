<!-- Header -->
<header id="main-header" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 py-4">
    <div class="header-backdrop absolute inset-0 bg-white/0 backdrop-blur-0 transition-all duration-300"></div>
    <div class="max-w-7xl mx-auto md:px-4  lg:px-8 relative z-10">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <a wire:navigate href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset("image.png") }}" class="sm:h-16 h-12" alt="">
            </a>
            <!-- Navigation -->
            <nav class="hidden md:flex gap-8">
                <a wire:navigate href="{{ route('home') }}" class="text-gray-700 hover:text-[#a53692] font-medium {{ request()->routeIs('home') ? 'text-[#a53692]' : '' }} transition-colors duration-300 py-2">Home</a>
                <a wire:navigate href="{{ route('about') }}" class="text-gray-700 hover:text-[#a53692] font-medium {{ request()->routeIs('about') ? 'text-[#a53692]' : '' }} transition-colors duration-300 py-2">About Us</a>
                <a wire:navigate href="{{ route('doctors') }}" class="text-gray-700 hover:text-[#a53692] font-medium {{ request()->routeIs('doctors') ? 'text-[#a53692]' : '' }} transition-colors duration-300 py-2">Doctors</a>
                <a wire:navigate href="{{ route('services') }}" class="text-gray-700 hover:text-[#a53692] font-medium {{ request()->routeIs('services') ? 'text-[#a53692]' : '' }} transition-colors duration-300 py-2">Services</a>
                <a wire:navigate href="{{ route('contact') }}" class="text-gray-700 hover:text-[#a53692] font-medium {{ request()->routeIs('contact') ? 'text-[#a53692]' : '' }} transition-colors duration-300 py-2">Contact</a>
            </nav>
            
            <!-- CTA Buttons -->
            <div class="flex items-center md:space-x-4">
                <a href="tel:+1234567890" class="hidden sm:flex text-gray-700 hover:text-[#a53692] font-medium transition-colors duration-300">
                    📞 Call Now
                </a>
                <a wire:navigate href="{{ route('booking') }}" class="bg-[#a53692] text-white px-6 py-2 rounded-md hover:bg-[#8c2b7b] font-medium transition-all duration-300 flex gap-2 text-xs sm:text-base">
                    <span class="hidden sm:flex">Book</span> Appointment
                </a>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="hidden md:hidden backdrop bg-white shadow-lg pb-6 mt-4">
            <div class="flex flex-col p-4 space-y-4">
                <a wire:navigate href="{{ route('home') }}" class="text-gray-700 hover:text-[#a53692] font-medium {{ request()->routeIs('home') ? 'text-[#a53692]' : '' }} transition-colors duration-300">Home</a>
                <a wire:navigate href="{{ route('about') }}" class="text-gray-700 hover:text-[#a53692] font-medium {{ request()->routeIs('about') ? 'text-[#a53692]' : '' }} transition-colors duration-300">About Us</a>
                <a wire:navigate href="{{ route('doctors') }}" class="text-gray-700 hover:text-[#a53692] font-medium {{ request()->routeIs('doctors') ? 'text-[#a53692]' : '' }} transition-colors duration-300">Doctors</a>
                <a wire:navigate href="{{ route('services') }}" class="text-gray-700 hover:text-[#a53692] font-medium {{ request()->routeIs('services') ? 'text-[#a53692]' : '' }} transition-colors duration-300">Services</a>
                <a wire:navigate href="{{ route('contact') }}" class="text-gray-700 hover:text-[#a53692] font-medium {{ request()->routeIs('contact') ? 'text-[#a53692]' : '' }} transition-colors duration-300">Contact</a>
                <a wire:navigate href="{{ route('booking') }}" class="text-gray-700 hover:text-[#a53692] font-medium transition-colors duration-300">Book Appointment</a>
                <a href="tel:+1234567890" class="text-gray-700 hover:text-[#a53692] font-medium transition-colors duration-300">📞 Call Now</a>
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
