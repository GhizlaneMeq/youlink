<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function accept(Event $event)
    {
        $event->update(['status' => 'confirmed']);

        return redirect()->back()->with('success', 'Event accepted successfully.');
    }

    public function refuse(Event $event)
    {
        $event->update(['status' => 'cancelled']);

        return redirect()->back()->with('success', 'Event refused.');
    }
}
