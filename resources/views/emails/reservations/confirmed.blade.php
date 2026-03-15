<x-mail::message>
# Reservation Request Received

Hi {{ $reservation->name }},

Thank you for choosing Buba Beach! We have received your reservation request and our team will review it shortly.

**Details:**
* Date: {{ \Carbon\Carbon::parse($reservation->reservation_date)->format('F j, Y') }}
* Time: {{ \Carbon\Carbon::parse($reservation->reservation_time)->format('g:i A') }}
* Party Size: {{ $reservation->party_size }} guests

We will send you a final confirmation once your table is secured.

Thanks,<br>
The {{ config('app.name') }} Team
</x-mail::message>