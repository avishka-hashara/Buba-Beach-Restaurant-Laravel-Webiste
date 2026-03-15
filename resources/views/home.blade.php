@extends('layouts.app')

@section('content')
    <section class="relative flex flex-col items-center justify-center min-h-screen text-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1544148103-0773bf10d330?q=80&w=2070&auto=format&fit=crop" alt="Luxury Dining" class="object-cover w-full h-full">
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-[#0a0a0c]"></div>
        </div>
        
        <div class="relative z-10 px-4 mt-20">
            <h1 class="font-serif text-[4rem] md:text-[7rem] lg:text-[9rem] leading-none text-[#D4AF37] drop-shadow-2xl hero-element">BUBA BEACH</h1>
            <p class="mt-6 text-sm md:text-lg tracking-[0.3em] text-gray-300 uppercase hero-element">Escape to paradise. Taste the ocean. Feel the vibe.</p>
            
            <div class="mt-12 hero-element">
                <a href="{{ route('menu') }}" class="px-8 py-3 text-sm font-bold tracking-widest text-white uppercase transition-all border border-white/30 rounded-full bg-white/5 backdrop-blur-sm hover:bg-white hover:text-black">
                    Explore Our Menu
                </a>
            </div>
        </div>

        <div class="absolute bottom-10 animate-bounce text-[#D4AF37] z-10 hero-element">
            &darr;
        </div>
    </section>

    <section class="py-32 bg-[#0a0a0c]">
        <div class="container px-6 mx-auto max-w-7xl">
            <div class="grid items-center gap-16 md:grid-cols-2">
                <div class="p-10 md:p-14 bg-[#111113] border border-white/5 rounded-2xl shadow-2xl about-anim">
                    <h2 class="mb-8 font-serif text-4xl md:text-5xl text-[#D4AF37]">A Taste of the Tropics</h2>
                    <p class="mb-6 text-gray-400 leading-relaxed font-light">
                        Experience a refined culinary journey where the essence of the ocean meets sophisticated tropical elegance. Our story is one of passion, flavor, and the perfect sunset vibe.
                    </p>
                    <p class="text-gray-400 leading-relaxed font-light">
                        At Buba Beach, every ingredient is hand-picked from the local coast, ensuring that every bite carries the freshness of the Atlantic. Join us for an unforgettable evening where fine dining meets the rhythmic pulse of the shore.
                    </p>
                </div>
                <div class="relative about-anim">
                    <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=2070&auto=format&fit=crop" alt="Interior" class="object-cover w-full h-[600px] rounded-2xl shadow-2xl opacity-90">
                    <div class="absolute inset-0 border rounded-2xl border-white/10 pointer-events-none"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-32 bg-[#0a0a0c] border-t border-white/5">
        <div class="container px-6 mx-auto max-w-7xl">
            <div class="mb-20 text-center text-anim">
                <span class="text-[#D4AF37] tracking-[0.3em] text-xs font-bold uppercase block mb-4">Exquisite Selections</span>
                <h2 class="font-serif text-4xl md:text-5xl text-white">Our Signature Dishes</h2>
            </div>

            <div class="grid gap-8 md:grid-cols-3">
                <div class="relative overflow-hidden transition-transform duration-500 rounded-xl group hover:-translate-y-2 card-anim">
                    <img src="https://images.unsplash.com/photo-1599487488170-d11ec9c172f0?q=80&w=1000&auto=format&fit=crop" alt="Grilled Calamari" class="object-cover w-full h-[450px] transition-transform duration-700 group-hover:scale-110 opacity-80">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4 p-6 bg-white/5 backdrop-blur-md border border-white/10 rounded-lg">
                        <h3 class="mb-2 font-serif text-2xl text-[#D4AF37]">Grilled Calamari</h3>
                        <p class="text-sm font-light text-gray-300">Zesty lemon-herb glaze with smoked sea salt.</p>
                    </div>
                </div>

                <div class="relative overflow-hidden transition-transform duration-500 rounded-xl group hover:-translate-y-2 card-anim" style="transition-delay: 100ms;">
                    <img src="https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?q=80&w=1000&auto=format&fit=crop" alt="Artisanal Cocktails" class="object-cover w-full h-[450px] transition-transform duration-700 group-hover:scale-110 opacity-80">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4 p-6 bg-white/5 backdrop-blur-md border border-white/10 rounded-lg">
                        <h3 class="mb-2 font-serif text-2xl text-[#D4AF37]">Artisanal Cocktails</h3>
                        <p class="text-sm font-light text-gray-300">Hand-crafted infusions inspired by the islands.</p>
                    </div>
                </div>

                <div class="relative overflow-hidden transition-transform duration-500 rounded-xl group hover:-translate-y-2 card-anim" style="transition-delay: 200ms;">
                    <img src="https://images.unsplash.com/photo-1565680018434-b513d5e5fd47?q=80&w=1000&auto=format&fit=crop" alt="Seafood Platter" class="object-cover w-full h-[450px] transition-transform duration-700 group-hover:scale-110 opacity-80">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4 p-6 bg-white/5 backdrop-blur-md border border-white/10 rounded-lg">
                        <h3 class="mb-2 font-serif text-2xl text-[#D4AF37]">Seafood Platter</h3>
                        <p class="text-sm font-light text-gray-300">The daily catch served with roasted aromatics.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        gsap.registerPlugin(ScrollTrigger);

        // Hero Text Fade up
        gsap.from('.hero-element', {
            y: 30, opacity: 0, duration: 1.5, stagger: 0.2, ease: 'power3.out', delay: 0.5
        });

        // About Section Fade
        gsap.from('.about-anim', {
            scrollTrigger: { trigger: '.about-anim', start: 'top 80%' },
            y: 50, opacity: 0, duration: 1.2, stagger: 0.3, ease: 'power2.out'
        });

        // Signature Dishes Title
        gsap.from('.text-anim', {
            scrollTrigger: { trigger: '.text-anim', start: 'top 85%' },
            y: 30, opacity: 0, duration: 1
        });

        // Cards Staggered Fade
        gsap.from('.card-anim', {
            scrollTrigger: { trigger: '.card-anim', start: 'top 85%' },
            y: 50, opacity: 0, duration: 1, stagger: 0.2, ease: 'power2.out'
        });
    });
</script>
@endpush