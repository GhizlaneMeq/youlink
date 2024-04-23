<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.events', compact('events'));
    }


    public function update(Request $request, Event $event)
{
    $request->validate([
        'status' => 'required|in:confirmed,cancelled',
    ]);

    $event->status = $request->status;
    $event->save();

    return redirect()->back()->with('status', 'Event status updated successfully.');
}
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
