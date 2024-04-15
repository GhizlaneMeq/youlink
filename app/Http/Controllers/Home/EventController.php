<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventReservation;
use App\Models\Reservation;
use App\Models\User;
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
        $users=User::all();
        $events = Event::latest()->get();

        // Get the count of events created by the authenticated user
        $eventCount = Event::where('user_id', Auth::id())->count();

        // Get the count of reservations made by the authenticated user
        $reservationCount = EventReservation::where('user_id', Auth::id())->count();

        return view('events.index', compact('eventCount', 'reservationCount','events','users'));
    }

    public function create()
    {
        return view('events.create');
    }
}
