<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationConfirmation;

class ReservationController extends Controller
{
    public function create()
    {
        return view('reservations.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:2844',
            'email' => 'required|email|max:2844',
            'phone' => 'required|string|max:20',
            'guests' => 'required|integer|min:1|max:20',
            'date' => 'required|date|after:today',
            'time' => 'required',
            'special_requests' => 'nullable|string|max:500'
        ]);

        $reservation = Reservation::create($validated);

        // Enviar email de confirmación
        Mail::to($reservation->email)->send(new ReservationConfirmation($reservation));

        return redirect()->route('reservations.success')->with('reservation', $reservation);
    }

    public function success()
    {
        return view('reservations.success');
    }
}
