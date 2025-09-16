<!-- Header -->
<header id="main-header" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 py-4">
    <div class="header-backdrop absolute inset-0 bg-white/0 backdrop-blur-0 transition-all duration-300"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="{{ asset("image.png") }}" class="h-16" alt="">
                
            </div>
            
            <!-- Navigation -->
            <nav class="hidden md:flex space-x-8">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-[#a53692] font-medium {{ request()->routeIs('home') ? 'text-[#a53692]' : '' }} transition-colors duration-300 py-2">
                    Home
                </a>
                <a href="#" class="text-gray-700 hover:text-purple-600 font-medium transition-colors duration-300 py-2">
                    About Us
                </a>
                <a href="#" class="text-gray-700 hover:text-purple-600 font-medium transition-colors duration-300 py-2">
                    Doctors
                </a>
                <a href="#" class="text-gray-700 hover:text-purple-600 font-medium transition-colors duration-300 py-2">
                    Services
                </a>
                <a href="#" class="text-gray-700 hover:text-purple-600 font-medium transition-colors duration-300 py-2">
                    Contact
                </a>
            </nav>
            
            <!-- CTA Buttons -->
            <div class="flex items-center space-x-4">
                <a href="tel:+1234567890" class="hidden sm:flex text-gray-700 hover:text-[#a53692] font-medium transition-colors duration-300">
                    📞 Call Now
                </a>
                <button class="bg-[#a53692] text-white px-6 py-2 rounded-md hover:bg-[#8c2b7b] font-medium transition-all duration-300">
                    Book Appointment
                </button>
                
                <!-- Mobile Menu Button -->
                <button class="md:hidden p-2" onclick="toggleMobileMenu()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="hidden md:hidden pb-6 mt-4">
            <div class="flex flex-col space-y-4">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-[#a53692] font-medium {{ request()->routeIs('home') ? 'text-[#a53692]' : '' }} transition-colors duration-300">
                    Home
                </a>
                <a href="#" class="text-gray-700 hover:text-purple-600 font-medium transition-colors duration-300">
                    About Us
                </a>
                <a href="#" class="text-gray-700 hover:text-purple-600 font-medium transition-colors duration-300">
                    Doctors
                </a>
                <a href="#" class="text-gray-700 hover:text-purple-600 font-medium transition-colors duration-300">
                    Services
                </a>
                <a href="#" class="text-gray-700 hover:text-purple-600 font-medium transition-colors duration-300">
                    Contact
                </a>
                <a href="tel:+1234567890" class="text-gray-700 hover:text-[#a53692] font-medium transition-colors duration-300">
                    📞 Call Now
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Spacer to prevent content from going under the fixed header -->
<div id="header-spacer" class="h-20"></div>

<script>
    function toggleMobileMenu() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    }
    
    // Glassy Header Effect on Scroll
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.getElementById('main-header');
        const backdrop = header.querySelector('.header-backdrop');
        const logo = header.querySelector('h1');
        const subtitle = header.querySelector('p');
        const spacer = document.getElementById('header-spacer');
        
        function updateHeader() {
            if (window.scrollY > 50) {
                header.classList.add('py-2');
                header.classList.remove('py-4');
                backdrop.classList.add('bg-white/80', 'backdrop-blur-lg');
                backdrop.classList.remove('bg-white/0', 'backdrop-blur-0');
            } else {
                header.classList.remove('py-2');
                header.classList.add('py-4');
                backdrop.classList.remove('bg-white/80', 'backdrop-blur-lg');
                backdrop.classList.add('bg-white/0', 'backdrop-blur-0');
            }
        }
        
        // Set initial state
        updateHeader();
        
        // Update header on scroll
        window.addEventListener('scroll', updateHeader);
        
        // Update spacer height based on header height
        function updateSpacerHeight() {
            spacer.style.height = header.offsetHeight + 'px';
        }
        
        // Set initial spacer height and update on resize
        updateSpacerHeight();
        window.addEventListener('resize', updateSpacerHeight);
    });
</script>