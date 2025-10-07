<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield("title")</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    <!-- Meta Tags for SEO -->
    <meta name="description" content="@yield("description")">
    <meta name="keywords" content="@yield("keywords")">
    
    <!-- Open Graph Tags -->
    <meta property="og:title" content="@yield("title")">
    <meta property="og:description" content="@yield("description")">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    
    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    
    <!-- Livewire Styles -->
    @livewireStyles
    
    <!-- Custom Styles -->
    @stack('styles')
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f9f0f7',
                            100: '#f4e1ef',
                            200: '#e9c3df',
                            300: '#dea5cf',
                            400: '#cd7ab8',
                            500: '#bc4fa1',
                            600: '#a53692', /* Base color */
                            700: '#8c2b7b',
                            800: '#732064',
                            900: '#5a1a4d',
                        }
                    },
                    backdropBlur: {
                        xs: '2px',
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom styles for glassy effects */
        .backdrop-blur-lg {
            -webkit-backdrop-filter: blur(16px);
            backdrop-filter: blur(16px);
        }
        
        /* Smooth scrolling for the page */
        html {
            scroll-behavior: smooth;
        }
        
        /* Hide scrollbar for Chrome, Safari and Opera */
        ::-webkit-scrollbar {
            display: none;
        }
        
        /* Hide scrollbar for IE, Edge and Firefox */
        body {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
    </style>
</head>
<body class="font-sans antialiased bg-white">
    <!-- Header Component -->
    <x-header />
    
    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>
    
    <!-- Footer Component -->
    <x-footer />
    
    <!-- Livewire Scripts -->
    @livewireScripts
    
    <!-- Custom Scripts -->
    @stack('scripts')
    
    <!-- Analytics or other tracking scripts -->
    @if(app()->environment('production'))
        <!-- Add your analytics code here -->
    @endif
</body>
</html>