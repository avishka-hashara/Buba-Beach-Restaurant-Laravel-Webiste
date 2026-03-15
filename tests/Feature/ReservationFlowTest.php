<?php

namespace Tests\Feature;

use App\Models\Reservation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ReservationFlowTest extends TestCase
{
    use RefreshDatabase;

    public function test_reservation_can_be_submitted_successfully(): void
    {
        Mail::fake();

        $response = $this->post(route('reservations.store'), [
            'name' => 'Test Guest',
            'email' => 'guest@example.com',
            'phone' => '0771234567',
            'reservation_date' => now()->addDay()->toDateString(),
            'reservation_time' => '19:30',
            'party_size' => 4,
            'special_requests' => 'Window seat if possible',
        ]);

        $response->assertSessionHasNoErrors();
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('reservations', [
            'name' => 'Test Guest',
            'email' => 'guest@example.com',
            'phone' => '0771234567',
            'party_size' => 4,
            'status' => 'pending',
        ]);
    }

    public function test_reservation_submission_requires_phone(): void
    {
        $response = $this->post(route('reservations.store'), [
            'name' => 'Test Guest',
            'email' => 'guest@example.com',
            'reservation_date' => now()->addDay()->toDateString(),
            'reservation_time' => '19:30',
            'party_size' => 4,
        ]);

        $response->assertSessionHasErrors(['phone']);

        $this->assertDatabaseCount('reservations', 0);
    }
}
