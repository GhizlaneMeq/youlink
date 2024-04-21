<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreFoundItemRequest;
use App\Http\Requests\User\StoreLostItemRequest;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function reportOwnership(Request $request, Item $item)
    {

        $item->owner_id = auth()->id();
        $item->save();
        return redirect()->back()->with('success', 'Ownership reported successfully.');
    }


    public function reportFinding(Request $request, Item $item)
    {
        $item->status = 'found';
        $item->save();
        return redirect()->back()->with('success', 'Finding reported successfully.');
    }


    public function storeFoundItem(StoreFoundItemRequest $request)
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


    public function storeLostItem(StoreLostItemRequest $request)
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
