<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buba Beach - @yield('title', 'Luxury Ocean Dining')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        /* Custom Font Application */
        .font-serif { font-family: 'Playfair Display', serif; }
        .font-sans { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="flex flex-col min-h-screen font-sans text-gray-300 bg-[#0a0a0c] antialiased selection:bg-[#D4AF37] selection:text-black">

    <nav x-data="{ isScrolled: false }" 
         @scroll.window="isScrolled = (window.pageYOffset > 50)"
         :class="isScrolled ? 'bg-black/70 backdrop-blur-md border-b border-white/10 shadow-2xl' : 'bg-transparent'"
         class="fixed top-0 z-50 w-full transition-all duration-500 py-4">
         
        <div class="container flex items-center justify-between px-6 mx-auto max-w-7xl">
            <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                <svg class="w-8 h-8 text-[#D4AF37]" fill="currentColor" viewBox="0 0 24 24"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"/></svg>
                <span class="text-2xl font-bold tracking-[0.2em] text-[#D4AF37] font-serif uppercase">Buba Beach</span>
            </a>
            
            <div class="hidden space-x-10 lg:flex items-center">
                <a href="{{ route('home') }}" class="text-xs font-bold tracking-[0.15em] text-[#D4AF37] uppercase transition-colors hover:text-white">Home</a>
                <a href="{{ route('menu') }}" class="text-xs font-bold tracking-[0.15em] text-[#D4AF37] uppercase transition-colors hover:text-white">Our Menu</a>
                <a href="{{ route('reservations.create') }}" class="text-xs font-bold tracking-[0.15em] text-[#D4AF37] uppercase transition-colors hover:text-white">Contact Us</a>
            </div>

            <div class="hidden lg:block">
                <a href="{{ route('reservations.create') }}" class="flex items-center gap-2 px-6 py-2.5 text-xs font-bold tracking-[0.15em] text-black uppercase transition-all bg-[#D4AF37] rounded-full hover:bg-white hover:shadow-[0_0_15px_rgba(212,175,55,0.4)]">
                    Book A Table <span>&rarr;</span>
                </a>
            </div>
        </div>
    </nav>

    <main class="flex-grow opacity-0 page-content">
        @yield('content')
    </main>

    <footer class="pt-20 pb-10 border-t bg-[#050505] border-white/5">
        <div class="container grid grid-cols-1 gap-12 px-6 mx-auto max-w-7xl md:grid-cols-4">
            <div class="md:col-span-1">
                <h3 class="mb-6 text-xl font-bold tracking-widest text-[#D4AF37] font-serif uppercase">Buba Beach</h3>
                <p class="text-sm leading-relaxed text-gray-500 mb-6">Where the ocean meets the plate. An elevated beachside dining experience designed for the senses.</p>
                <div class="flex gap-4">
                    <div class="w-8 h-8 rounded-full bg-white/5 border border-white/10 flex items-center justify-center hover:bg-[#D4AF37] hover:text-black transition cursor-pointer">X</div>
                    <div class="w-8 h-8 rounded-full bg-white/5 border border-white/10 flex items-center justify-center hover:bg-[#D4AF37] hover:text-black transition cursor-pointer">IG</div>
                </div>
            </div>
            
            <div>
                <h4 class="mb-6 text-sm font-bold tracking-[0.15em] text-white uppercase">Quick Links</h4>
                <ul class="space-y-4 text-sm text-gray-400">
                    <li><a href="{{ route('menu') }}" class="transition hover:text-[#D4AF37]">Menu</a></li>
                    <li><a href="{{ route('reservations.create') }}" class="transition hover:text-[#D4AF37]">Reservations</a></li>
                    <li><a href="#" class="transition hover:text-[#D4AF37]">Private Events</a></li>
                    <li><a href="#" class="transition hover:text-[#D4AF37]">Careers</a></li>
                </ul>
            </div>

            <div class="md:col-span-2">
                <h4 class="mb-6 text-sm font-bold tracking-[0.15em] text-white uppercase">Visit Us</h4>
                <ul class="space-y-4 text-sm text-gray-400">
                    <li class="flex items-start gap-3">
                        <span class="text-[#D4AF37]">&mapstoup;</span>
                        <span>123 Ocean Drive, Luxury Coastline,<br>Paradise Island, 00214</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="text-[#D4AF37]">&phone;</span>
                        <span>+1 (555) BEACH-VIBE</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="text-[#D4AF37]">&#9993;</span>
                        <span>concierge@bubabeach.com</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container flex flex-col items-center justify-between px-6 pt-8 mx-auto mt-16 text-xs text-gray-600 border-t md:flex-row border-white/5">
            <p>&copy; {{ date('Y') }} BUBA BEACH RESTAURANT. ALL RIGHTS RESERVED.</p>
            <div class="flex gap-6 mt-4 md:mt-0">
                <a href="#" class="hover:text-gray-300">PRIVACY POLICY</a>
                <a href="#" class="hover:text-gray-300">TERMS OF SERVICE</a>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            gsap.to('.page-content', { duration: 0.8, opacity: 1, ease: 'power2.out' });
        });
    </script>
    @stack('scripts')
</body>
</html>