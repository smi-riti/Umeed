<aside id="sidebar"
    class="fixed h-full w-64 bg-white -translate-x-full lg:translate-x-0 transition-transform duration-150 ease-in-out z-20 border-r border-gray-200 shadow-sm">
    <div class="flex flex-col h-full">
        <!-- Brand/Logo -->
        <div class="flex items-center justify-center h-20 border-b border-gray-200 px-6 bg-white lg:block hidden">
            <div class="flex items-center justify-center mt-2">
                <img src="{{ asset('image.png') }}" alt="Umeed IVF Logo">
            </div>
        </div>

        <!-- Navigation -->
        <div class="flex flex-col flex-1 overflow-y-auto">
            <!-- Main Navigation -->
            <div class="px-4 pt-5 pb-2">
                <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 px-3">Main</p>
            </div>
            <nav class="space-y-1 px-3">
                <a wire:navigate href="/admin/dashboard"
                    class="group flex items-center px-3 py-3 rounded-lg text-gray-800 hover:bg-[#f9f0f7] hover:text-[#a53692] transition-all">
                    <svg class="h-5 w-5 text-gray-500 group-hover:text-[#a53692] transition-colors"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="ml-3 text-sm font-medium">Dashboard</span>
                </a>
            </nav>

            <!-- Hospital Management -->
            <div class="px-4 pt-5 pb-2">
                <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 px-3">Hospital Management
                </p>
            </div>
            <nav class="space-y-1 px-3">
                <a wire:navigate href="{{ route('admin.departments.list') }}"
                    class="group flex items-center px-3 py-3 rounded-lg text-gray-800 hover:bg-[#f9f0f7] hover:text-[#a53692] transition-all">
                    <svg class="h-5 w-5 text-gray-500 group-hover:text-[#a53692] transition-colors"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    <span class="ml-3 text-sm font-medium">Departments</span>
                </a>

                <a wire:navigate href="{{ route('admin.doctors.list') }}"
                    class="group flex items-center px-3 py-3 rounded-lg text-gray-800 hover:bg-[#f9f0f7] hover:text-[#a53692] transition-all">
                    <svg class="h-5 w-5 text-gray-500 group-hover:text-[#a53692] transition-colors"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span class="ml-3 text-sm font-medium">Doctors</span>
                </a>

                <a wire:navigate href=""
                    class="group flex items-center px-3 py-3 rounded-lg text-gray-800 hover:bg-[#f9f0f7] hover:text-[#a53692] transition-all">
                    <svg class="h-5 w-5 text-gray-500 group-hover:text-[#a53692] transition-colors"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="ml-3 text-sm font-medium">Patients</span>
                </a>
            </nav>

            <!-- Appointments & Scheduling -->
            <div class="px-4 pt-5 pb-2">
                <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 px-3">Appointments</p>
            </div>
            <nav class="space-y-1 px-3">
                <a wire:navigate href="{{ route('admin.appointments.list') }}"
                    class="group flex items-center px-3 py-3 rounded-lg text-gray-800 hover:bg-[#f9f0f7] hover:text-[#a53692] transition-all">
                    <svg class="h-5 w-5 text-gray-500 group-hover:text-[#a53692] transition-colors"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span class="ml-3 text-sm font-medium">All Appointments</span>
                </a>
{{-- 
                <a wire:navigate href=""
                    class="group flex items-center px-3 py-3 rounded-lg text-gray-800 hover:bg-[#f9f0f7] hover:text-[#a53692] transition-all">
                    <svg class="h-5 w-5 text-gray-500 group-hover:text-[#a53692] transition-colors"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="ml-3 text-sm font-medium">Pending Appointments</span>
                </a> --}}
            </nav>

            <!-- Communication & Feedback -->
            <div class="px-4 pt-5 pb-2">
                <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 px-3">Communication</p>
            </div>
            <nav class="space-y-1 px-3">
                <a wire:navigate href="{{ route('admin.enquiries') }}"
                    class="group flex items-center px-3 py-3 rounded-lg text-gray-800 hover:bg-[#f9f0f7] hover:text-[#a53692] transition-all">
                    <svg class="h-5 w-5 text-gray-500 group-hover:text-[#a53692] transition-colors"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                    <span class="ml-3 text-sm font-medium">Enquiries</span>
                </a>

                <a wire:navigate href="{{ route('admin.review-create') }}"
                    class="group flex items-center px-3 py-3 rounded-lg text-gray-800 hover:bg-[#f9f0f7] hover:text-[#a53692] transition-all">
                    <svg class="h-5 w-5 text-gray-500 group-hover:text-[#a53692] transition-colors"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                    </svg>
                    <span class="ml-3 text-sm font-medium">Reviews</span>
                </a>
            </nav>

            <!-- Financial Management -->
            <div class="px-4 pt-5 pb-2">
                <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 px-3">Financial</p>
            </div>
            <nav class="space-y-1 px-3">
                <a wire:navigate href=""
                    class="group flex items-center px-3 py-3 rounded-lg text-gray-800 hover:bg-[#f9f0f7] hover:text-[#a53692] transition-all">
                    <svg class="h-5 w-5 text-gray-500 group-hover:text-[#a53692] transition-colors"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="ml-3 text-sm font-medium">Payments</span>
                </a>

                <a wire:navigate href=""
                    class="group flex items-center px-3 py-3 rounded-lg text-gray-800 hover:bg-[#f9f0f7] hover:text-[#a53692] transition-all">
                    <svg class="h-5 w-5 text-gray-500 group-hover:text-[#a53692] transition-colors"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <span class="ml-3 text-sm font-medium">Reports</span>
                </a>
            </nav>
        </div>

        <!-- User Profile Section -->
        <div class="border-t border-gray-200 p-4">
            <div class="flex items-center space-x-3">
                <div class="flex-shrink-0">
                    <div class="w-10 h-10 bg-[#f9f0f7] rounded-full flex items-center justify-center">
                        @auth
                            <span class="text-[#a53692] font-medium">{{ substr(auth()->user()->name, 0, 1) }}</span>
                        @else
                            <svg class="h-5 w-5 text-[#a53692]" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        @endauth
                    </div>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-gray-900 truncate">
                        @auth
                            {{ auth()->user()->name ?? 'Admin User' }}
                        @else
                            Guest
                        @endauth
                    </p>
                    <p class="text-xs text-gray-500">Administrator</p>
                </div>

                <!-- Logout Dropdown -->
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="text-gray-400 hover:text-[#a53692] focus:outline-none">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                    </button>
                    <div x-show="open" @click.away="open = false"
                        class="origin-top-right absolute right-0 bottom-full mb-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95">
                        <div class="py-1">
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#f9f0f7] hover:text-[#a53692]">
                                Profile Settings
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="w-full text-left block px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        /* Sidebar-specific styles */
        @media (max-width: 1023px) {
            #sidebar {
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            }
        }
    </style>

    <script>
        // Sidebar toggle function
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');
            if (sidebar.classList.contains('-translate-x-full')) {
                // Show sidebar
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            } else {
                // Hide sidebar
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }
        }

        // Initialize sidebar state on page load to ensure it's closed in mobile view
        document.addEventListener('DOMContentLoaded', function() {
            if (window.innerWidth < 1024) {
                const sidebar = document.getElementById('sidebar');
                const overlay = document.getElementById('sidebar-overlay');
                sidebar.classList.add('-translate-x-full'); // Ensure sidebar is closed
                overlay.classList.add('hidden'); // Ensure overlay is hidden
                document.body.classList.remove('overflow-hidden'); // Ensure body scroll is enabled
            }

            // Add active state to current sidebar link
            const currentPath = window.location.pathname;
            const sidebarLinks = document.querySelectorAll('nav a');
            sidebarLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href === currentPath || (currentPath.startsWith(href) && href !== '/')) {
                    link.classList.add('bg-[#f9f0f7]', 'text-[#a53692]');

                    // Also highlight the SVG icon
                    const svg = link.querySelector('svg');
                    if (svg) {
                        svg.classList.remove('text-gray-500');
                        svg.classList.add('text-[#a53692]');
                    }
                }
            });
        });

        // Handle window resize to reset sidebar and overlay states
        window.addEventListener('resize', function() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');
            if (window.innerWidth >= 1024) {
                // Desktop view: Show sidebar, hide overlay
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            } else {
                // Mobile view: Close sidebar, hide overlay
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }
        });
    </script>
</aside>
