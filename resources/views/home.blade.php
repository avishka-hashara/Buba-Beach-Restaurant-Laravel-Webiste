@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="relative flex items-center justify-center h-screen overflow-hidden bg-gray-900">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?q=80&w=2070&auto=format&fit=crop" alt="Buba Beach Resort" class="object-cover w-full h-full opacity-60">
        </div>
        
        <div class="relative z-10 px-4 text-center text-white">
            <h1 class="mb-4 font-extrabold tracking-tight hero-element text-7xl md:text-9xl text-secondary drop-shadow-lg">BUBA BEACH</h1>
            <p class="max-w-2xl mx-auto mb-8 text-xl hero-element md:text-3xl drop-shadow-md">Escape to paradise. Taste the ocean. Feel the vibe.</p>
            <div class="hero-element">
                <a href="#menu" class="px-8 py-4 font-bold text-gray-900 transition-all rounded-full bg-secondary hover:bg-yellow-300 hover:shadow-xl">Explore Our Menu</a>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="container px-4 mx-auto max-w-7xl">
            <div class="flex flex-col items-center justify-between gap-12 md:flex-row">
                <div class="w-full about-text md:w-1/2">
                    <h2 class="mb-6 text-4xl font-bold text-gray-900">A Taste of the Tropics</h2>
                    <p class="mb-4 text-lg text-gray-600">Located on the pristine shores, Buba Beach is more than just a restaurant—it's an experience. We combine freshly caught seafood with vibrant local flavors.</p>
                    <p class="text-lg text-gray-600">Whether you are here for a sunset cocktail or a full-course dinner, we promise unforgettable memories.</p>
                </div>
                <div class="w-full about-image md:w-1/2">
                    <div class="relative group">
                        <img src="https://images.unsplash.com/photo-1544148103-0773bf10d330?q=80&w=2070&auto=format&fit=crop" alt="Restaurant Interior" class="object-cover w-full h-auto rounded-lg shadow-2xl">
                        <div class="absolute inset-0 transition-opacity opacity-0 bg-primary/20 group-hover:opacity-100 rounded-lg"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        // Register ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);

        // Hero Entrance Animation
        gsap.from(".hero-element", {
            duration: 1.2, 
            y: 50, 
            opacity: 0, 
            stagger: 0.2, 
            ease: "power3.out",
            delay: 0.2
        });

        // About Section Scroll Animation
        gsap.from(".about-text", {
            scrollTrigger: {
                trigger: ".about-text",
                start: "top 80%",
            },
            duration: 1, 
            x: -50, 
            opacity: 0, 
            ease: "power2.out"
        });

        gsap.from(".about-image", {
            scrollTrigger: {
                trigger: ".about-image",
                start: "top 80%",
            },
            duration: 1, 
            x: 50, 
            opacity: 0, 
            ease: "power2.out"
        });
    });
</script>
@endpush