<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Exchange;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExchangeController extends Controller
{
    public function index()
    {
        $exchanges = Exchange::where('requester_id', Auth::id())->get();

        return view('user.books.exchange', ['exchanges' => $exchanges]);
    }

    public function create()
    {
        return view('exchanges.create');
    }

    public function store(Request $request)
    {
        /* $validatedData = $request->validate([
            'requested_book_id' => 'required',
            'received_book_id' => 'required',
            'receiver_id' => 'required',
            'status' => 'required|in:requested,accepted,completed,cancelled',
            'is_returned' => 'required|boolean',
        ]);
 */
        Exchange::create($request->all());

        return redirect()->back()
            ->with('success', 'Exchange created successfully.');
    }

    public function show(Exchange $exchange)
    {
        return view('exchanges.show', compact('exchange'));
    }

    public function edit(Exchange $exchange)
    {
        return view('exchanges.edit', compact('exchange'));
    }

    public function update(Request $request, Exchange $exchange)
    {
        $validatedData = $request->validate([
            'status' => 'required|in:requested,accepted,completed,cancelled',
            'is_returned' => 'required|boolean',
        ]);

        $exchange->update($validatedData);

        return redirect()->route('exchanges.index')
            ->with('success', 'Exchange updated successfully.');
    }

    public function destroy(Exchange $exchange)
    {
        $exchange->delete();

        return redirect()->route('exchanges.index')
            ->with('success', 'Exchange deleted successfully.');
    }

    public function updateStatus(Request $request, Exchange $exchange)
    {
        $request->validate([
            'status' => 'required|in:requested,accepted,completed,cancelled', 
        ]);

        $exchange->status = $request->status;
        $exchange->save();

        return response()->json(['message' => 'Status updated successfully'], 200);
    }

    public function incomingRequests()
    {
        $exchanges = Exchange::where('receiver_id', Auth::id())->get();

        return view('user.books.exchange.incoming',compact('exchanges'));
    }

    public function outgoingRequests()
    {
        $exchanges = Exchange::where('requester_id', Auth::id())->get();

        return view('user.books.exchange.outgoing',compact('exchanges'));
    }
}
