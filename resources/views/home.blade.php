@extends('layouts.app')

@section('content')
    <section class="relative flex flex-col items-center justify-center min-h-screen overflow-hidden text-center transition-colors duration-300">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1544148103-0773bf10d330?q=80&w=2070&auto=format&fit=crop" alt="Luxury Dining" class="object-cover w-full h-full">
            <div class="absolute inset-0 transition-colors duration-500 bg-white/20 dark:bg-gradient-to-b dark:from-black/60 dark:via-black/40 dark:to-[#0a0a0c]"></div>
        </div>
        
        <div class="relative z-10 px-4 mt-20">
            <h1 class="font-serif text-[4rem] md:text-[7rem] lg:text-[9rem] leading-none text-[#E5B25D] drop-shadow-2xl hero-element">BUBA BEACH</h1>
            <p class="mt-6 text-sm md:text-lg tracking-[0.3em] text-[#1A1A1A] dark:text-gray-300 uppercase hero-element transition-colors">Escape to paradise. Taste the ocean. Feel the vibe.</p>
            
            <div class="mt-12 hero-element">
                <a href="{{ route('menu') }}" class="px-8 py-4 text-sm font-bold tracking-widest text-white uppercase transition-all rounded-full bg-[#E5B25D] hover:bg-[#1A1A1A] dark:hover:bg-white dark:hover:text-black shadow-[0_8px_32px_rgba(0,0,0,0.1)]">
                    Explore Our Menu
                </a>
            </div>
        </div>

        <div class="absolute bottom-10 animate-bounce text-[#E5B25D] z-10 hero-element">
            &darr;
        </div>
    </section>

    <section class="py-32 transition-colors duration-300 bg-[#FCFBF7] dark:bg-[#0a0a0c]">
        <div class="container px-6 mx-auto max-w-7xl">
            <div class="grid items-center gap-16 md:grid-cols-2">
                <div class="p-10 md:p-14 bg-white/60 dark:bg-[#111113] backdrop-blur-[12px] border border-white/80 dark:border-white/5 rounded-2xl shadow-[0_8px_32px_rgba(0,0,0,0.05)] dark:shadow-2xl transition-all duration-300 about-anim relative z-10">
                    <h2 class="mb-8 font-serif text-4xl md:text-5xl text-[#1A1A1A] dark:text-[#E5B25D] transition-colors duration-300">A Taste of the Tropics</h2>
                    <hr class="w-12 border-[#E5B25D] border-t-2 mb-8">
                    <p class="mb-6 leading-relaxed font-light text-[#4A5568] dark:text-gray-400 transition-colors">
                        Experience a refined culinary journey where the essence of the ocean meets sophisticated tropical elegance. Our story is one of passion, flavor, and the perfect sunset vibe.
                    </p>
                    <p class="leading-relaxed font-light text-[#4A5568] dark:text-gray-400 transition-colors">
                        At Buba Beach, every ingredient is hand-picked from the local coast, ensuring that every bite carries the freshness of the Atlantic. Join us for an unforgettable evening.
                    </p>
                </div>
                <div class="relative about-anim md:-ml-12 z-0">
                    <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=2070&auto=format&fit=crop" alt="Interior" class="object-cover w-full h-[600px] rounded-2xl shadow-2xl opacity-90">
                    <div class="absolute inset-0 border rounded-2xl border-black/5 dark:border-white/10 pointer-events-none transition-colors"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-32 transition-colors duration-300 bg-[#F9F9F6] dark:bg-[#0a0a0c] border-t border-gray-200/50 dark:border-white/5">
        <div class="container px-6 mx-auto max-w-7xl">
            <div class="mb-20 text-center text-anim">
                <span class="text-[#E5B25D] tracking-[0.3em] text-xs font-bold uppercase block mb-4">Exquisite Selections</span>
                <h2 class="font-serif text-4xl text-[#1A1A1A] dark:text-white md:text-5xl transition-colors duration-300">Our Signature Dishes</h2>
            </div>

            <div class="grid gap-8 md:grid-cols-3">
                <div class="relative overflow-hidden transition-transform duration-500 bg-white dark:bg-transparent rounded-xl group hover:-translate-y-2 card-anim shadow-sm dark:shadow-none">
                    <img src="https://images.unsplash.com/photo-1599487488170-d11ec9c172f0?q=80&w=1000&auto=format&fit=crop" alt="Grilled Calamari" class="object-cover w-full h-[450px] transition-transform duration-700 group-hover:scale-110 opacity-90 dark:opacity-80">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 dark:from-black/90 dark:via-black/20 to-transparent transition-colors duration-300"></div>
                    <div class="absolute bottom-4 left-4 right-4 p-6 bg-white/80 dark:bg-white/5 backdrop-blur-[12px] border border-white/80 dark:border-white/10 rounded-lg shadow-[0_8px_32px_rgba(0,0,0,0.05)] transition-all duration-300">
                        <h3 class="mb-2 font-serif text-2xl text-[#1A1A1A] dark:text-[#E5B25D] transition-colors">Grilled Calamari</h3>
                        <p class="text-sm font-light text-[#4A5568] dark:text-gray-300 transition-colors">Zesty lemon-herb glaze with smoked sea salt.</p>
                    </div>
                </div>

                <div class="relative overflow-hidden transition-transform duration-500 bg-white dark:bg-transparent rounded-xl group hover:-translate-y-2 card-anim shadow-sm dark:shadow-none" style="transition-delay: 100ms;">
                    <img src="https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?q=80&w=1000&auto=format&fit=crop" alt="Artisanal Cocktails" class="object-cover w-full h-[450px] transition-transform duration-700 group-hover:scale-110 opacity-90 dark:opacity-80">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 dark:from-black/90 dark:via-black/20 to-transparent transition-colors duration-300"></div>
                    <div class="absolute bottom-4 left-4 right-4 p-6 bg-white/80 dark:bg-white/5 backdrop-blur-[12px] border border-white/80 dark:border-white/10 rounded-lg shadow-[0_8px_32px_rgba(0,0,0,0.05)] transition-all duration-300">
                        <h3 class="mb-2 font-serif text-2xl text-[#1A1A1A] dark:text-[#E5B25D] transition-colors">Artisanal Cocktails</h3>
                        <p class="text-sm font-light text-[#4A5568] dark:text-gray-300 transition-colors">Hand-crafted infusions inspired by the islands.</p>
                    </div>
                </div>

                <div class="relative overflow-hidden transition-transform duration-500 bg-white dark:bg-transparent rounded-xl group hover:-translate-y-2 card-anim shadow-sm dark:shadow-none" style="transition-delay: 200ms;">
                    <img src="https://images.unsplash.com/photo-1565680018434-b513d5e5fd47?q=80&w=1000&auto=format&fit=crop" alt="Seafood Platter" class="object-cover w-full h-[450px] transition-transform duration-700 group-hover:scale-110 opacity-90 dark:opacity-80">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 dark:from-black/90 dark:via-black/20 to-transparent transition-colors duration-300"></div>
                    <div class="absolute bottom-4 left-4 right-4 p-6 bg-white/80 dark:bg-white/5 backdrop-blur-[12px] border border-white/80 dark:border-white/10 rounded-lg shadow-[0_8px_32px_rgba(0,0,0,0.05)] transition-all duration-300">
                        <h3 class="mb-2 font-serif text-2xl text-[#1A1A1A] dark:text-[#E5B25D] transition-colors">Seafood Platter</h3>
                        <p class="text-sm font-light text-[#4A5568] dark:text-gray-300 transition-colors">The daily catch served with roasted aromatics.</p>
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
        gsap.from('.hero-element', { y: 30, opacity: 0, duration: 1.5, stagger: 0.2, ease: 'power3.out', delay: 0.5 });
        gsap.from('.about-anim', { scrollTrigger: { trigger: '.about-anim', start: 'top 80%' }, y: 50, opacity: 0, duration: 1.2, stagger: 0.3, ease: 'power2.out' });
        gsap.from('.text-anim', { scrollTrigger: { trigger: '.text-anim', start: 'top 85%' }, y: 30, opacity: 0, duration: 1 });
        gsap.from('.card-anim', { scrollTrigger: { trigger: '.card-anim', start: 'top 85%' }, y: 50, opacity: 0, duration: 1, stagger: 0.2, ease: 'power2.out' });
    });
</script>
@endpush