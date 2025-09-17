<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <title>{{ $title ?? 'Admin Panel' }}</title>
        <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
     <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    </head>
    <body>
            <!-- Mobile Header with Toggle -->
    <div class="lg:hidden bg-white p-2 sm:p-3 md:p-4 flex items-center justify-between sticky top-0 z-30 border-b border-gray-200">
        <button onclick="toggleSidebar()" class="text-gray-700 hover:text-purple-600 transition-colors duration-200 p-1.5 sm:p-2 rounded-lg hover:bg-purple-50 active:bg-purple-100">
            <svg class="h-5 w-5 sm:h-6 sm:w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <div class="flex items-center space-x-1.5 sm:space-x-2">
            {{-- <img src="/logo/logo1.png" alt="MedBuzzy Logo" class="h-12 sm:h-12 md:h-20"> --}}
            <div class="text-2xl text-center py-5 font-bold text-purple-600">Umeed</div>

        </div>
       
    </div>

        <!-- Page Container -->
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <livewire:admin.section.sidebar />

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col lg:ml-64 transition-all duration-300">
            

            <!-- Page Content -->
            <main class="flex-1  bg-gray-50 min-h-screen">
                <div class="mx-auto px-4 py-6 max-w-7xl">
                {{ $slot }}
                </div>
            </main>
        </div>
    </div> <!-- Sidebar Overlay for Mobile -->
    <div id="sidebar-overlay" class="fixed inset-0 bg-gray-900/50 z-15 lg:hidden hidden sidebar-overlay" onclick="toggleSidebar()"></div>
    @livewireScripts
    </body>
</html>
