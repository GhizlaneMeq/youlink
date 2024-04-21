<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreFoundItemRequest;
use App\Models\Item;
use Illuminate\Http\Request;

class FoundItemController extends Controller
{
    public function store(StoreFoundItemRequest $request)
    {
        Item::create([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'location' => $request->location,
            'dateFound' => $request->dateFound,
            'status' => 'found', 
            'user_id' => 1, 
        ]);

        return redirect()->back()->with('success', 'Found item added successfully!');
    }
}
