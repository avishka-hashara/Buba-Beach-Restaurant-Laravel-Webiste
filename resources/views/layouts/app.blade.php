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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen font-sans antialiased text-gray-900 bg-gray-50">

    <nav x-data="{ isMobileMenuOpen: false, isScrolled: false }" 
         @scroll.window="isScrolled = (window.pageYOffset > 50)"
         :class="isScrolled ? 'bg-white/95 backdrop-blur-sm shadow-lg py-2' : 'bg-white shadow-sm py-4'"
         class="fixed top-0 z-50 w-full transition-all duration-300">
         
        <div class="container flex items-center justify-between px-4 mx-auto max-w-7xl">
            
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="flex items-center justify-center w-12 h-12 text-xl font-bold text-white rounded shadow-md bg-primary">
                    BB
                </div>
                <div class="flex flex-col">
                    <span class="text-2xl font-bold tracking-wide text-gray-900" style="font-family: 'Playfair Display', serif;">Buba Beach</span>
                    <span class="text-[0.65rem] tracking-[0.2em] font-bold text-secondary uppercase">Premium Ocean Dining</span>
                </div>
            </a>
            
            <div class="hidden space-x-8 lg:flex items-center">
                <a href="{{ route('home') }}" class="relative py-2 text-sm font-bold tracking-wider text-gray-700 uppercase transition-colors hover:text-primary group">
                    Home
                    <span class="absolute bottom-0 left-0 w-full h-[3px] transition-transform duration-300 origin-left scale-x-0 bg-secondary group-hover:scale-x-100 {{ request()->routeIs('home') ? 'scale-x-100' : '' }}"></span>
                </a>
                
                <a href="{{ route('menu') }}" class="relative py-2 text-sm font-bold tracking-wider text-gray-700 uppercase transition-colors hover:text-primary group">
                    Our Menu
                    <span class="absolute bottom-0 left-0 w-full h-[3px] transition-transform duration-300 origin-left scale-x-0 bg-secondary group-hover:scale-x-100 {{ request()->routeIs('menu') ? 'scale-x-100' : '' }}"></span>
                </a>

                <a href="{{ route('reservations.create') }}" class="relative py-2 text-sm font-bold tracking-wider text-gray-700 uppercase transition-colors hover:text-primary group">
                    Contact Us
                    <span class="absolute bottom-0 left-0 w-full h-[3px] transition-transform duration-300 origin-left scale-x-0 bg-secondary group-hover:scale-x-100 {{ request()->routeIs('contact') ? 'scale-x-100' : '' }}"></span>
                </a>
            </div>

            <div class="hidden lg:block">
                <a href="{{ route('reservations.create') }}" class="flex items-center gap-2 px-6 py-3 text-sm font-bold tracking-wider text-gray-900 uppercase transition-all shadow-md bg-secondary hover:bg-yellow-400 hover:shadow-lg hover:-translate-y-0.5">
                    Book A Table
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg>
                </a>
            </div>

            <button @click="isMobileMenuOpen = !isMobileMenuOpen" class="p-2 text-gray-600 lg:hidden hover:text-primary focus:outline-none">
                <svg x-show="!isMobileMenuOpen" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                <svg x-show="isMobileMenuOpen" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <div x-show="isMobileMenuOpen" 
             x-collapse 
             class="bg-white border-t border-gray-100 shadow-xl lg:hidden">
            <div class="flex flex-col px-4 pt-2 pb-6 space-y-2">
                <a href="{{ route('home') }}" class="block px-4 py-3 text-sm font-bold tracking-wider text-gray-700 uppercase rounded hover:bg-gray-50 {{ request()->routeIs('home') ? 'text-primary bg-blue-50' : '' }}">Home</a>
                <a href="{{ route('menu') }}" class="block px-4 py-3 text-sm font-bold tracking-wider text-gray-700 uppercase rounded hover:bg-gray-50 {{ request()->routeIs('menu') ? 'text-primary bg-blue-50' : '' }}">Our Menu</a>
                <a href="{{ route('reservations.create') }}" class="block px-4 py-3 text-sm font-bold tracking-wider text-gray-700 uppercase rounded hover:bg-gray-50 {{ request()->routeIs('contact') ? 'text-primary bg-blue-50' : '' }}">Contact Us</a>
                
                <a href="{{ route('reservations.create') }}" class="flex items-center justify-center gap-2 px-4 py-3 mt-4 text-sm font-bold tracking-wider text-gray-900 uppercase shadow-sm bg-secondary rounded-xl">
                    Book A Table
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg>
                </a>
            </div>
        </div>
    </nav>

    <main class="flex-grow pt-24 opacity-0 page-content">
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