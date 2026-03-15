<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth" 
      x-data="{ theme: localStorage.getItem('theme') || 'light' }" 
      x-init="$watch('theme', val => localStorage.setItem('theme', val))"
      :class="theme === 'dark' ? 'dark' : ''">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buba Beach - @yield('title', 'Luxury Ocean Dining')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        .font-serif { font-family: 'Playfair Display', serif; }
        .font-sans { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="flex flex-col min-h-screen font-sans antialiased text-[#1A1A1A] bg-[#FCFBF7] dark:bg-[#0a0a0c] dark:text-gray-300 transition-colors duration-300 selection:bg-[#E5B25D] selection:text-white">

    <nav x-data="{ isScrolled: false }" 
         @scroll.window="isScrolled = (window.pageYOffset > 50)"
         :class="isScrolled ? 'bg-white/60 dark:bg-black/70 backdrop-blur-[12px] border-b border-white/80 dark:border-white/10 shadow-[0_8px_32px_rgba(0,0,0,0.05)] dark:shadow-2xl py-4' : 'bg-white/30 dark:bg-transparent py-6'"
         class="fixed top-0 z-50 w-full transition-all duration-300">
         
        <div class="container flex items-center justify-between px-6 mx-auto max-w-7xl">
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <svg class="w-8 h-8 text-[#E5B25D]" fill="currentColor" viewBox="0 0 24 24"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"/></svg>
                <span class="text-2xl font-bold tracking-[0.2em] text-[#1A1A1A] dark:text-[#E5B25D] font-serif uppercase transition-colors duration-300">Buba Beach</span>
            </a>
            
            <div class="hidden space-x-10 lg:flex items-center">
                <a href="{{ route('home') }}" class="text-xs font-bold tracking-[0.15em] text-[#1A1A1A] dark:text-[#E5B25D] uppercase transition-colors hover:text-[#E5B25D] dark:hover:text-white">Home</a>
                <a href="{{ route('menu') }}" class="text-xs font-bold tracking-[0.15em] text-[#1A1A1A] dark:text-[#E5B25D] uppercase transition-colors hover:text-[#E5B25D] dark:hover:text-white">Our Menu</a>
                <a href="{{ route('reservations.create') }}" class="text-xs font-bold tracking-[0.15em] text-[#1A1A1A] dark:text-[#E5B25D] uppercase transition-colors hover:text-[#E5B25D] dark:hover:text-white">Contact Us</a>
            </div>

            <div class="items-center hidden gap-6 lg:flex">
                <button @click="theme = theme === 'light' ? 'dark' : 'light'" 
                        class="p-2 text-[#4A5568] transition-colors rounded-full hover:bg-black/5 dark:text-gray-300 dark:hover:bg-white/10 focus:outline-none"
                        aria-label="Toggle Theme">
                    <svg x-show="theme === 'light'" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                    <svg x-show="theme === 'dark'" style="display: none;" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </button>

                <a href="{{ route('reservations.create') }}" class="flex items-center gap-2 px-6 py-2.5 text-xs font-bold tracking-[0.15em] text-white dark:text-black uppercase transition-all bg-[#E5B25D] rounded-full hover:bg-[#1A1A1A] dark:hover:bg-white hover:shadow-[0_0_15px_rgba(229,178,93,0.4)]">
                    Book A Table <span>&rarr;</span>
                </a>
            </div>
        </div>
    </nav>

    <main class="flex-grow opacity-0 page-content">
        @yield('content')
    </main>

    <footer class="pt-20 pb-10 transition-colors duration-300 bg-[#FFFFFF] border-t border-gray-100 dark:bg-[#050505] dark:border-white/5">
        <div class="container grid grid-cols-1 gap-12 px-6 mx-auto max-w-7xl md:grid-cols-4">
            <div class="md:col-span-1">
                <h3 class="mb-6 text-xl font-bold tracking-widest text-[#E5B25D] font-serif uppercase">Buba Beach</h3>
                <p class="mb-6 text-sm leading-relaxed text-[#4A5568] dark:text-gray-500 transition-colors duration-300">Where the ocean meets the plate. An elevated beachside dining experience designed for the senses.</p>
                <div class="flex gap-4">
                    <div class="w-8 h-8 rounded-full bg-black/5 dark:bg-white/5 border border-black/10 dark:border-white/10 flex items-center justify-center hover:bg-[#E5B25D] hover:text-white transition cursor-pointer">X</div>
                    <div class="w-8 h-8 rounded-full bg-black/5 dark:bg-white/5 border border-black/10 dark:border-white/10 flex items-center justify-center hover:bg-[#E5B25D] hover:text-white transition cursor-pointer">IG</div>
                </div>
            </div>
            
            <div>
                <h4 class="mb-6 text-sm font-bold tracking-[0.15em] text-[#1A1A1A] dark:text-white uppercase transition-colors duration-300">Quick Links</h4>
                <ul class="space-y-4 text-sm text-[#4A5568] dark:text-gray-400">
                    <li><a href="{{ route('menu') }}" class="transition hover:text-[#E5B25D]">Menu</a></li>
                    <li><a href="{{ route('reservations.create') }}" class="transition hover:text-[#E5B25D]">Reservations</a></li>
                    <li><a href="#" class="transition hover:text-[#E5B25D]">Private Events</a></li>
                    <li><a href="#" class="transition hover:text-[#E5B25D]">Careers</a></li>
                </ul>
            </div>

            <div class="md:col-span-2">
                <h4 class="mb-6 text-sm font-bold tracking-[0.15em] text-[#1A1A1A] dark:text-white uppercase transition-colors duration-300">Visit Us</h4>
                <ul class="space-y-4 text-sm text-[#4A5568] dark:text-gray-400">
                    <li class="flex items-start gap-3"><span class="text-[#E5B25D]">&mapstoup;</span><span class="transition-colors duration-300">123 Ocean Drive, Luxury Coastline,<br>Paradise Island, 00214</span></li>
                    <li class="flex items-center gap-3"><span class="text-[#E5B25D]">&phone;</span><span class="transition-colors duration-300">+1 (555) BEACH-VIBE</span></li>
                    <li class="flex items-center gap-3"><span class="text-[#E5B25D]">&#9993;</span><span class="transition-colors duration-300">concierge@bubabeach.com</span></li>
                </ul>
            </div>
        </div>
        <div class="container flex flex-col items-center justify-between px-6 pt-8 mx-auto mt-16 text-xs text-gray-400 border-t border-gray-100 md:flex-row dark:border-white/5 transition-colors duration-300">
            <p>&copy; {{ date('Y') }} BUBA BEACH RESTAURANT. ALL RIGHTS RESERVED.</p>
            <div class="flex gap-6 mt-4 md:mt-0">
                <a href="#" class="hover:text-[#E5B25D] transition-colors">PRIVACY POLICY</a>
                <a href="#" class="hover:text-[#E5B25D] transition-colors">TERMS OF SERVICE</a>
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