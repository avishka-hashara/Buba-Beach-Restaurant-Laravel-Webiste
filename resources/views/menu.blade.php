@extends('layouts.app')

@section('title', 'Our Menu')

@section('content')
<div class="py-24 bg-gray-50">
    <div class="container px-4 mx-auto max-w-7xl">
        
        <div class="mb-16 text-center">
            <h1 class="mb-4 text-5xl font-extrabold text-primary">Our Menu</h1>
            <p class="max-w-2xl mx-auto text-lg text-gray-600">Fresh ingredients, local flavors, and a touch of ocean magic.</p>
        </div>

        @if($categories->isEmpty())
            <div class="p-8 text-center bg-white rounded-lg shadow">
                <p class="text-xl text-gray-500">Our menu is currently being updated. Please check back soon!</p>
            </div>
        @else
            <div x-data="{ activeTab: {{ $categories->first()->id }} }">
                
                <div class="flex flex-wrap justify-center gap-4 mb-12">
                    @foreach($categories as $category)
                        <button 
                            @click="activeTab = {{ $category->id }}"
                            :class="activeTab === {{ $category->id }} ? 'bg-primary text-white shadow-lg' : 'bg-white text-gray-600 hover:bg-blue-50'"
                            class="px-8 py-3 text-lg font-bold transition-all duration-300 rounded-full shadow-sm">
                            {{ $category->name }}
                        </button>
                    @endforeach
                </div>

                <div>
                    @foreach($categories as $category)
                        <div x-show="activeTab === {{ $category->id }}" 
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 translate-y-4"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3"
                             style="display: none;">
                            @forelse($category->menuItems as $item)
                                <div class="flex flex-col overflow-hidden transition-shadow duration-300 bg-white rounded-lg shadow-md hover:shadow-xl">
                                    @if($item->image_url)
                                        @php
                                            $isAbsoluteUrl = str_starts_with($item->image_url, 'http://') || str_starts_with($item->image_url, 'https://');
                                            $normalizedPath = ltrim($item->image_url, '/');

                                            if (str_starts_with($normalizedPath, 'storage/')) {
                                                $normalizedPath = substr($normalizedPath, strlen('storage/'));
                                            }

                                            if (str_starts_with($normalizedPath, 'public/')) {
                                                $normalizedPath = substr($normalizedPath, strlen('public/'));
                                            }

                                            $imageUrl = $isAbsoluteUrl
                                                ? $item->image_url
                                                : asset('storage/' . $normalizedPath);
                                        @endphp
                                        <img src="{{ $imageUrl }}" alt="{{ $item->name }}" class="object-cover w-full h-48" loading="lazy">
                                    @else
                                        <div class="flex items-center justify-center w-full h-48 bg-gray-200">
                                            <span class="text-gray-400">No Image</span>
                                        </div>
                                    @endif
                                    
                                    <div class="flex flex-col flex-grow p-6">
                                        <div class="flex items-start justify-between mb-2">
                                            <h3 class="text-xl font-bold text-gray-900">{{ $item->name }}</h3>
                                            <span class="text-lg font-extrabold text-primary">${{ number_format($item->price, 2) }}</span>
                                        </div>
                                        <p class="flex-grow text-gray-600">{{ $item->description }}</p>
                                    </div>
                                </div>
                            @empty
                                <div class="col-span-full">
                                    <p class="text-center text-gray-500">No items available in this category yet.</p>
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