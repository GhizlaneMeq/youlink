<?php

namespace App\Http\Controllers\Bde;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventReservation;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /* public function index(){
        $events = Event::latest()->get();
        return view('events.dashboard', compact('events'));
    } */

    public function index()
    {
        $events = Event::latest()->get();

        // Get the count of events created by the authenticated user
        $eventCount = Event::where('user_id', Auth::id())->count();

        // Get the count of reservations made by the authenticated user
        $reservationCount = EventReservation::where('user_id', Auth::id())->count();

        return view('events.dashboard', compact('eventCount', 'reservationCount','events'));
    }

    public function create()
    {
        return view('events.create');
    }
}
