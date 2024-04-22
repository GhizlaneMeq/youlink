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


    public function createFoundItem(){
        return view('user.lostFound.createFoundItem');
    }

    public function createLostItem(){
        return view('user.lostFound.createLostItem');
    }


    public function storeFoundItem(StoreFoundItemRequest $request)
    {


        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('public/images/items', $imageName);
        
        }
        // Get the file name and store it
    
        // Create a new found item
        $item = new Item();
        $item->title = $request->title;
        $item->description = $request->description;
        $item->category = $request->category;
        $item->location = $request->location;
        $item->dateFound = $request->dateFound;
        $item->status = 'found';
        $item->creator_id = $request->user_id;
        $item->picture = $imageName;
    
        // Save the item
        $item->save();
    
        return redirect()->back()->with('success', 'Found item added successfully!');
    }
    
    


    public function storeLostItem(StoreLostItemRequest $request)
{
    if ($request->hasFile('picture')) {
        $image = $request->file('picture');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $imagePath = $image->storeAs('public/images/items', $imageName);
    } else {
        $imageName = null;
    }

    $item = new Item();
    $item->title = $request->title;
    $item->description = $request->description;
    $item->category = $request->category;
    $item->location = $request->location;
    $item->dateLost = $request->dateLost;
    $item->status = 'lost';
    $item->creator_id = auth()->id();
    $item->picture = $imageName;

    $item->save();

    return redirect()->back()->with('success', 'Lost item added successfully!');
}

}
