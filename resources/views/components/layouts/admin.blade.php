<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <title>{{ $title ?? 'Umeed IVF Admin Panel' }}</title>
        
        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
        
        <!-- Alpine.js -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <!-- Livewire Styles -->
        @livewireStyles
    </head>
    <body class="bg-gray-50">
        <!-- Mobile Header with Toggle -->
        <div class="lg:hidden bg-white p-3 flex items-center justify-between sticky top-0 z-30 border-b border-gray-200 shadow-sm">
            <button onclick="toggleSidebar()" class="text-gray-700 hover:text-[#a53692] transition-colors duration-200 p-2 rounded-lg hover:bg-[#f9f0f7]">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div class="flex items-center">
                <img src="{{ asset('image.png') }}" alt="Umeed IVF Logo" class="h-12">
            </div>
            <div class="w-10 h-10 bg-[#f9f0f7] rounded-full flex items-center justify-center">
                @auth
                    <span class="text-[#a53692] font-medium">{{ substr(auth()->user()->name, 0, 1) }}</span>
                @else
                    <svg class="h-5 w-5 text-[#a53692]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                @endauth
            </div>
        </div>

        <!-- Page Container -->
        <div class="min-h-screen flex">
            <!-- Sidebar -->
            <livewire:admin.section.sidebar />

            <!-- Main Content Area -->
            <div class="flex-1 flex flex-col lg:ml-64 transition-all duration-300">
                <!-- Top Header (Desktop) -->
                <div class="hidden lg:flex h-16 bg-white shadow-sm border-b border-gray-200 px-6 sticky top-0 z-10 items-center justify-between">
                    <div>
                        <h1 class="text-lg font-medium text-gray-800">Welcome back, Admin</h1>
                        <p class="text-sm text-gray-500">{{ now()->format('l, F j, Y') }}</p>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <button class="text-gray-500 hover:text-[#a53692] focus:outline-none">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>
                        
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center focus:outline-none">
                                <div class="w-8 h-8 bg-[#f9f0f7] rounded-full flex items-center justify-center mr-2">
                                    @auth
                                        <span class="text-[#a53692] font-medium">{{ substr(auth()->user()->name, 0, 1) }}</span>
                                    @else
                                        <svg class="h-4 w-4 text-[#a53692]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    @endauth
                                </div>
                                <span class="text-sm font-medium text-gray-700">
                                    @auth
                                        {{ auth()->user()->name ?? 'Admin User' }}
                                    @else
                                        Admin User
                                    @endauth
                                </span>
                                <svg class="h-5 w-5 text-gray-400 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" 
                                @click.away="open = false"
                                class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95">
                                <div class="py-1">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#f9f0f7] hover:text-[#a53692]">
                                        Your Profile
                                    </a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#f9f0f7] hover:text-[#a53692]">
                                        Settings
                                    </a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="w-full text-left block px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                            Logout
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Page Content -->
                <main class="flex-1 bg-gray-50 min-h-screen">
                    <div class="mx-auto py-6 px-4 sm:px-6 lg:px-8 max-w-7xl">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
        
        <!-- Sidebar Overlay for Mobile -->
        <div id="sidebar-overlay" class="fixed inset-0 bg-gray-900/50 z-15 lg:hidden hidden" onclick="toggleSidebar()"></div>
        
        <!-- Toggle Sidebar Function -->
        <script>
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
        </script>
        
        @livewireScripts
    </body>
</html>
