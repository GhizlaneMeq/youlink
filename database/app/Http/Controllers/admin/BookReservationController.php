<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookReservation;
use Illuminate\Http\Request;

class BookReservationController extends Controller
{
    public function index()
    {
        $reservations = BookReservation::all();
        return view('admin.book_reservations.index', compact('reservations'));
    }

    public function accept(Request $request, BookReservation $reservation)
    {
        $reservation->update([
            'status' => 'accepted',
            'description' => $request->input('description')
        ]);

        return redirect()->back()->with('success', 'Reservation accepted successfully.');
    }

    public function refuse(Request $request, BookReservation $reservation)
    {
        $reservation->update([
            'status' => 'rejected',
            'description' => $request->input('description')
        ]);

        return redirect()->back()->with('success', 'Reservation refused.');
    }
}
