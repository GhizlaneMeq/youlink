<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventReservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventReservationController extends Controller
{
    public function reserve(Event $event)
    {
        $user = Auth::user();
        $reservation = new EventReservation();
        $reservation->event_id = $event->id;
        $reservation->user_id = $user->id;
        $reservation->status = 'pending';
        $reservation->save();
        return redirect()->back()->with('success', 'Event reserved successfully.');
    }

    public function showReservations()
    {
        $user = Auth::user();
        $eventReservations = $user->reservations()->with('event')->get();

        return view('events.reservations', compact('eventReservations'));
    }
}
