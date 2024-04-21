<?php

namespace App\Http\Controllers\Bde;

use App\Http\Controllers\Controller;
use App\Models\EventReservation;
use Illuminate\Http\Request;

class EventReservationController extends Controller
{
    public function index()
    {
        $reservations = EventReservation::all();
        return view('bde.reservations.index', compact('reservations'));
    }

    public function approve(EventReservation $reservation)
    {
        $reservation->update(['status' => 'approved']);
        return redirect()->back()->with('success', 'Reservation approved successfully.');
    }

    public function reject(EventReservation $reservation)
    {
        $reservation->update(['status' => 'rejected']);
        return redirect()->back()->with('success', 'Reservation rejected successfully.');
    }

    public function cancel(EventReservation $reservation)
    {
        $reservation->update(['status' => 'cancelled']);
        return redirect()->back()->with('success', 'Reservation cancelled successfully.');
    }
}
