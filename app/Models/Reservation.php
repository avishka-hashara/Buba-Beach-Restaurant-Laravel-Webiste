<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'reservation_date', 
        'reservation_time', 'party_size', 'special_requests', 'status'
    ];
}
