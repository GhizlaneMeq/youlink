<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        // Fetch all items (lost and found)
        $items = Item::latest()->get();

        return view('lost&found.index', compact('items'));
    }
    
    public function lostItems()
    {
        // Fetch only lost items
        $items = Item::where('status', 'lost')->latest()->get();

        return view('lost&found.lostItems', compact('items'));
    }

    public function foundItems()
    {
        // Fetch only found items
        $items = Item::where('status', 'found')->latest()->get();

        return view('lost&found.foundItems', compact('items'));
    }
}
