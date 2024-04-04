<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreLostItemRequest;
use App\Models\Item;
use Illuminate\Http\Request;

class LostItemController extends Controller
{
    public function store(StoreLostItemRequest $request)
    {
        Item::create([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'dateLost' => $request->dateLost,
            'status' => 'lost', 
            'user_id' => 1, 
        ]);

        return redirect()->back()->with('success', 'Lost item added successfully!');
    }
}
