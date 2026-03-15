<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Buba Beach - @yield('title', 'Escape to Paradise')</title>
    <meta name="description" content="@yield('meta_description', 'Buba Beach is a premium seaside restaurant offering fresh seafood, signature cocktails, and unforgettable ocean views.')">
    <meta name="keywords" content="restaurant, beach, seafood, cocktails, dining, reservations">
    
    <meta property="og:title" content="Buba Beach - @yield('title', 'Escape to Paradise')">
    <meta property="og:description" content="@yield('meta_description', 'Experience the best beachside dining.')">
    <meta property="og:type" content="website">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen font-sans antialiased text-gray-900 bg-gray-50">

    <nav class="p-6 text-white shadow-md bg-primary" x-data="{ open: false }">
        <div class="container flex items-center justify-between mx-auto max-w-7xl">
            <a href="{{ route('home') }}" class="text-2xl font-bold tracking-wider transition-colors hover:text-secondary">BUBA BEACH</a>
            
            <div class="hidden space-x-6 md:flex">
                <a href="{{ route('home') }}" class="font-semibold transition-colors hover:text-secondary">Home</a>
                <a href="{{ route('menu') }}" class="font-semibold transition-colors hover:text-secondary">Menu</a>
                <a href="{{ route('reservations.create') }}" class="font-semibold transition-colors hover:text-secondary">Reservations</a>
            </div>
        </div>
    </nav>

    <main class="flex-grow opacity-0 page-content">
        @yield('content')
    </main>

    <footer class="py-12 text-white bg-gray-900">
        <div class="container grid grid-cols-1 gap-8 px-4 mx-auto max-w-7xl md:grid-cols-3">
            <div>
                <h3 class="mb-4 text-2xl font-bold tracking-wider text-secondary">BUBA BEACH</h3>
                <p class="text-gray-400">Escape to paradise. Taste the ocean. Feel the vibe.</p>
            </div>
            <div>
                <h4 class="mb-4 text-lg font-bold">Quick Links</h4>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="{{ route('home') }}" class="transition-colors hover:text-secondary">Home</a></li>
                    <li><a href="{{ route('menu') }}" class="transition-colors hover:text-secondary">Menu</a></li>
                    <li><a href="{{ route('reservations.create') }}" class="transition-colors hover:text-secondary">Book a Table</a></li>
                </ul>
            </div>
            <div>
                <h4 class="mb-4 text-lg font-bold">Visit Us</h4>
                <p class="text-gray-400">123 Oceanfront Drive<br>Coastal City, CC 90210<br>Phone: (555) 123-4567</p>
            </div>
        </div>
        <div class="pt-8 mt-8 text-center text-gray-500 border-t border-gray-800">
            <p>&copy; {{ date('Y') }} Buba Beach. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            gsap.to('.page-content', {
                duration: 0.6,
                opacity: 1,
                ease: 'power2.out'
            });
        });
    </script>

    @stack('scripts')
</body>
</html>