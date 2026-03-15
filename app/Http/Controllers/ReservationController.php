<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationConfirmed;

class ReservationController extends Controller
{
    public function create()
    {
        return view('reservations');
    }

    public function store(Request $request)
    {
        // 1. Strict Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'reservation_date' => 'required|date|after_or_equal:today',
            'reservation_time' => 'required',
            'party_size' => 'required|integer|min:1|max:20',
            'special_requests' => 'nullable|string|max:500',
        ]);

        $validated['status'] = 'pending';

        // 2. Save to Database
        $reservation = Reservation::create($validated);

        // 3. Send Confirmation Email (We will use Mailpit to test this locally)
        Mail::to($reservation->email)->send(new ReservationConfirmed($reservation));

        // 4. Redirect back with success message
        return back()->with('success', 'Your reservation request has been received! We will contact you shortly to confirm.');
    }
}