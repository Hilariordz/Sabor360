<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'guests',
        'date',
        'time',
        'special_requests',
        'status'
    ];

    protected $casts = [
        'date' => 'date',
        'time' => 'datetime:H:i',
    ];
}
