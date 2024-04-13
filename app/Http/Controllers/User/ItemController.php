<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
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
}
