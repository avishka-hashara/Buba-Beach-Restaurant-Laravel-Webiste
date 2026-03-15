@extends('layouts.app')

@section('title', 'Our Menu')

@section('content')
<div class="min-h-screen pt-32 pb-24 bg-[#0a0a0c]">
    <div class="container px-4 mx-auto max-w-7xl">
        
        <div class="mb-16 text-center">
            <span class="text-[#D4AF37] tracking-[0.3em] text-xs font-bold uppercase block mb-4">Culinary Excellence</span>
            <h1 class="mb-6 font-serif text-5xl md:text-6xl text-white">Our Menu</h1>
            <p class="max-w-2xl mx-auto text-lg font-light text-gray-400">Fresh ingredients, local flavors, and a touch of ocean magic.</p>
        </div>

        @if($categories->isEmpty())
            <div class="p-10 text-center border bg-[#111113] rounded-2xl border-white/5">
                <p class="text-xl font-light text-gray-500">Our menu is currently being updated. Please check back soon!</p>
            </div>
        @else
            <div x-data="{ activeTab: {{ $categories->first()->id }} }">
                
                <div class="flex flex-wrap justify-center gap-4 mb-16">
                    @foreach($categories as $category)
                        <button 
                            @click="activeTab = {{ $category->id }}"
                            :class="activeTab === {{ $category->id }} 
                                ? 'bg-[#D4AF37] text-black shadow-[0_0_15px_rgba(212,175,55,0.3)]' 
                                : 'bg-white/5 text-gray-400 border border-white/10 hover:text-white hover:border-white/30'"
                            class="px-8 py-3 text-xs font-bold tracking-[0.15em] uppercase transition-all duration-300 rounded-full">
                            {{ $category->name }}
                        </button>
                    @endforeach
                </div>

                <div>
                    @foreach($categories as $category)
                        <div x-show="activeTab === {{ $category->id }}" 
                             x-transition:enter="transition ease-out duration-500"
                             x-transition:enter-start="opacity-0 translate-y-8"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3"
                             style="display: none;">
                            
                            @forelse($category->menuItems as $item)
                                <div class="flex flex-col overflow-hidden transition-all duration-500 border bg-[#111113] border-white/5 rounded-xl hover:-translate-y-2 hover:shadow-[0_10px_30px_rgba(0,0,0,0.5)] group">
                                    <div class="relative overflow-hidden h-52">
                                        @if($item->image_url)
                                            <img src="{{ asset('storage/' . $item->image_url) }}" alt="{{ $item->name }}" loading="lazy" class="object-cover w-full h-full transition-transform duration-700 opacity-80 group-hover:scale-110">
                                        @else
                                            <div class="flex items-center justify-center w-full h-full bg-[#1a1a1e]">
                                                <span class="text-xs tracking-widest text-gray-600 uppercase">No Image</span>
                                            </div>
                                        @endif
                                        <div class="absolute inset-0 bg-gradient-to-t from-[#111113] to-transparent opacity-80"></div>
                                    </div>
                                    
                                    <div class="flex flex-col flex-grow p-8 -mt-6 relative z-10">
                                        <div class="flex items-start justify-between mb-4">
                                            <h3 class="font-serif text-2xl text-[#D4AF37]">{{ $item->name }}</h3>
                                            <span class="text-lg font-semibold tracking-wider text-white">${{ number_format($item->price, 2) }}</span>
                                        </div>
                                        <p class="flex-grow font-light leading-relaxed text-gray-400 text-sm">{{ $item->description }}</p>
                                    </div>
                                </div>
                            @empty
                                <div class="col-span-full">
                                    <p class="p-8 text-center text-gray-500 border border-white/5 rounded-xl bg-white/5">No items available in this category yet.</p>
                                </div>
                            @endforelse
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</div>
@endsection