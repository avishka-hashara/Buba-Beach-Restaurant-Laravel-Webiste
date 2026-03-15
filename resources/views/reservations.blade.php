@extends('layouts.app')

@section('title', 'Book a Table')

@section('content')
<div class="min-h-screen pt-32 pb-24 bg-[#0a0a0c] relative overflow-hidden">
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-[#D4AF37]/5 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-blue-900/10 rounded-full blur-[150px] pointer-events-none"></div>

    <div class="container relative z-10 px-4 mx-auto max-w-3xl">
        
        <div class="p-8 border md:p-14 bg-[#111113]/80 backdrop-blur-xl rounded-2xl shadow-2xl border-white/10">
            <div class="mb-10 text-center">
                <span class="text-[#D4AF37] tracking-[0.3em] text-xs font-bold uppercase block mb-4">Experience Buba Beach</span>
                <h1 class="mb-4 font-serif text-4xl text-white md:text-5xl">Book a Table</h1>
                <p class="font-light text-gray-400">Join us for an unforgettable dining experience.</p>
            </div>

            @if(session('success'))
                <div class="p-6 mb-8 text-sm font-medium text-green-400 border border-green-500/20 bg-green-500/10 rounded-xl">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('reservations.store') }}" method="POST" class="space-y-6">
                @csrf

                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <label class="block mb-2 text-xs font-bold tracking-[0.1em] text-gray-400 uppercase">Full Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="w-full px-4 py-3 bg-[#0a0a0c] border border-white/10 rounded-lg text-white focus:ring-1 focus:ring-[#D4AF37] focus:border-[#D4AF37] transition-colors outline-none @error('name') border-red-500 @enderror">
                        @error('name') <span class="block mt-2 text-xs text-red-400">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label class="block mb-2 text-xs font-bold tracking-[0.1em] text-gray-400 uppercase">Email Address</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-3 bg-[#0a0a0c] border border-white/10 rounded-lg text-white focus:ring-1 focus:ring-[#D4AF37] focus:border-[#D4AF37] transition-colors outline-none @error('email') border-red-500 @enderror">
                        @error('email') <span class="block mt-2 text-xs text-red-400">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                    <div>
                        <label class="block mb-2 text-xs font-bold tracking-[0.1em] text-gray-400 uppercase">Phone</label>
                        <input type="text" name="phone" value="{{ old('phone') }}" class="w-full px-4 py-3 bg-[#0a0a0c] border border-white/10 rounded-lg text-white focus:ring-1 focus:ring-[#D4AF37] focus:border-[#D4AF37] transition-colors outline-none @error('phone') border-red-500 @enderror">
                        @error('phone') <span class="block mt-2 text-xs text-red-400">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label class="block mb-2 text-xs font-bold tracking-[0.1em] text-gray-400 uppercase">Date</label>
                        <input type="date" name="reservation_date" value="{{ old('reservation_date') }}" class="w-full px-4 py-3 bg-[#0a0a0c] border border-white/10 rounded-lg text-white focus:ring-1 focus:ring-[#D4AF37] focus:border-[#D4AF37] transition-colors outline-none @error('reservation_date') border-red-500 @enderror" style="color-scheme: dark;">
                        @error('reservation_date') <span class="block mt-2 text-xs text-red-400">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label class="block mb-2 text-xs font-bold tracking-[0.1em] text-gray-400 uppercase">Time</label>
                        <input type="time" name="reservation_time" value="{{ old('reservation_time') }}" class="w-full px-4 py-3 bg-[#0a0a0c] border border-white/10 rounded-lg text-white focus:ring-1 focus:ring-[#D4AF37] focus:border-[#D4AF37] transition-colors outline-none @error('reservation_time') border-red-500 @enderror" style="color-scheme: dark;">
                        @error('reservation_time') <span class="block mt-2 text-xs text-red-400">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div class="md:col-span-2">
                        <label class="block mb-2 text-xs font-bold tracking-[0.1em] text-gray-400 uppercase">Party Size</label>
                        <input type="number" name="party_size" min="1" max="20" value="{{ old('party_size') }}" class="w-full px-4 py-3 bg-[#0a0a0c] border border-white/10 rounded-lg text-white focus:ring-1 focus:ring-[#D4AF37] focus:border-[#D4AF37] transition-colors outline-none @error('party_size') border-red-500 @enderror">
                        @error('party_size') <span class="block mt-2 text-xs text-red-400">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div>
                    <label class="block mb-2 text-xs font-bold tracking-[0.1em] text-gray-400 uppercase">Special Requests (Optional)</label>
                    <textarea name="special_requests" rows="3" class="w-full px-4 py-3 bg-[#0a0a0c] border border-white/10 rounded-lg text-white focus:ring-1 focus:ring-[#D4AF37] focus:border-[#D4AF37] transition-colors outline-none">{{ old('special_requests') }}</textarea>
                </div>

                <button type="submit" class="w-full px-8 py-4 mt-4 text-xs font-bold tracking-[0.2em] text-black uppercase transition-all bg-[#D4AF37] rounded-lg hover:bg-white hover:shadow-[0_0_20px_rgba(212,175,55,0.4)]">
                    Confirm Reservation
                </button>
            </form>
        </div>
    </div>
</div>
@endsection