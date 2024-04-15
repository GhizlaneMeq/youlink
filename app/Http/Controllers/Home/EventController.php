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
        $eventCount = Event::where('user_id', Auth::id())->count();
        $reservationCount = EventReservation::where('user_id', Auth::id())->count();
        return view('events.index', compact('eventCount', 'reservationCount','events','users'));
    }

    

    public function show(Event $event)
    {
        return view('events.details', compact('event'));
    }
}
