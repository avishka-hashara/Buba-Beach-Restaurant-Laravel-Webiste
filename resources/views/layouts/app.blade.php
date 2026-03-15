<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buba Beach - @yield('title', 'Welcome')</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-900 bg-gray-50">

    <nav class="p-6 text-white shadow-md bg-primary" x-data="{ open: false }">
        <div class="container flex items-center justify-between mx-auto max-w-7xl">
            <a href="/" class="text-2xl font-bold tracking-wider">BUBA BEACH</a>
            
            <div class="hidden space-x-6 md:flex">
                <a href="/" class="hover:text-secondary">Home</a>
                <a href="{{ route('menu') }}" class="hover:text-secondary">Menu</a>
                <a href="{{ route('reservations.create') }}" class="hover:text-secondary">Reservations</a>
            </div>
        </div>
    </nav>

    <main class="min-h-screen">
        @yield('content')
    </main>

    <footer class="py-8 text-center text-white bg-gray-900">
        <p>&copy; {{ date('Y') }} Buba Beach. All rights reserved.</p>
    </footer>

</body>
    <footer class="py-8 text-center text-white bg-gray-900">
            <p>&copy; {{ date('Y') }} Buba Beach. All rights reserved.</p>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
        
        @stack('scripts') </body>
</html>