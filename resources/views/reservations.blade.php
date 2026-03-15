@extends('layouts.app')

@section('title', 'Book a Table')

@section('content')
<div class="py-24 bg-blue-50">
    <div class="container px-4 mx-auto max-w-3xl">
        
        <div class="p-10 bg-white rounded-lg shadow-2xl">
            <h1 class="mb-2 text-4xl font-extrabold text-center text-primary">Book a Table</h1>
            <p class="mb-8 text-center text-gray-600">Join us for an unforgettable dining experience.</p>

            @if(session('success'))
                <div class="p-4 mb-8 text-green-800 bg-green-100 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('reservations.store') }}" method="POST" class="space-y-6">
                @csrf

                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <label class="block mb-2 text-sm font-bold text-gray-700">Full Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="w-full px-4 py-2 border rounded-lg focus:ring-primary focus:border-primary @error('name') border-red-500 @enderror">
                        @error('name') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-bold text-gray-700">Email Address</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-2 border rounded-lg focus:ring-primary focus:border-primary @error('email') border-red-500 @enderror">
                        @error('email') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                    <div>
                        <label class="block mb-2 text-sm font-bold text-gray-700">Date</label>
                        <input type="date" name="reservation_date" value="{{ old('reservation_date') }}" class="w-full px-4 py-2 border rounded-lg focus:ring-primary focus:border-primary @error('reservation_date') border-red-500 @enderror">
                        @error('reservation_date') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-bold text-gray-700">Time</label>
                        <input type="time" name="reservation_time" value="{{ old('reservation_time') }}" class="w-full px-4 py-2 border rounded-lg focus:ring-primary focus:border-primary @error('reservation_time') border-red-500 @enderror">
                        @error('reservation_time') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-bold text-gray-700">Party Size</label>
                        <input type="number" name="party_size" min="1" max="20" value="{{ old('party_size') }}" class="w-full px-4 py-2 border rounded-lg focus:ring-primary focus:border-primary @error('party_size') border-red-500 @enderror">
                        @error('party_size') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div>
                    <label class="block mb-2 text-sm font-bold text-gray-700">Special Requests (Optional)</label>
                    <textarea name="special_requests" rows="3" class="w-full px-4 py-2 border rounded-lg focus:ring-primary focus:border-primary">{{ old('special_requests') }}</textarea>
                </div>

                <button type="submit" class="w-full px-8 py-4 text-lg font-bold text-gray-900 transition-all rounded-lg bg-secondary hover:bg-yellow-300 hover:shadow-lg">
                    Confirm Reservation
                </button>
            </form>
        </div>
    </div>
</div>
@endsection