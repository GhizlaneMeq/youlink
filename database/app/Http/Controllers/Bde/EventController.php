<?php
namespace App\Http\Controllers\Bde;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use App\Models\EventReservation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->get();
        $eventCount = Event::where('user_id', Auth::id())->count();
        $reservationCount = EventReservation::where('user_id', Auth::id())->count();
        return view('Bde.events.index', compact('eventCount', 'reservationCount','events'));
    }

    public function create()
    {
        return view('bde.events.create');
    }

     /**
     * Store a newly created event in storage.
     *
     * @param  \App\Http\Requests\StoreEventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventRequest $request)
    {
        $validatedData = $request->validated();
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('public/images/events', $imageName);
            $validatedData['image'] = $imageName;
        } 
        $event = Event::create($validatedData);
        return redirect()->route('bde.events.index')->with('success', 'Event created successfully.');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('bde.events.edit', compact('event'));
    }

    public function update(UpdateEventRequest $request, $id)
    {
        $validatedData = $request->validated();
        
        $event = Event::findOrFail($id);
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('public/images/events', $imageName);
            $validatedData['image'] = $imagePath;
        }

        $event->update($validatedData);

        return redirect()->route('bde.events.index')->with('success', 'Event updated successfully.');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->reservations()->delete();
        $event->delete();
        return redirect()->route('bde.events.index')->with('success', 'Event deleted successfully');
    }
}
