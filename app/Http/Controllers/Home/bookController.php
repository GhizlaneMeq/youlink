<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Resources\BookResource;
use App\Models\Book;
use App\Models\BookCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
 
    $userBooks = Book::where('user_id', Auth::id())->paginate(10);

    $books = Book::whereDoesntHave('requestedExchanges', function ($query) {
            $query->whereIn('status', ['requested', 'completed', 'cancelled'])
                  ->orWhere('is_returned', true);
        })
        ->whereDoesntHave('receivedExchanges')
        ->paginate(10);
        $categories = BookCategory::all(); 

        
    return view('bookSwap.index', compact('books', 'userBooks', 'categories'));
}





public function search(Request $request)
{
    $query = Book::query();

    // Search by title, author, description, image, and username
    $searchTerm = $request->input('query');
    $query->where(function ($q) use ($searchTerm) {
        $q->where('title', 'like', "%$searchTerm%")
          ->orWhere('author', 'like', "%$searchTerm%")
          ->orWhere('description', 'like', "%$searchTerm%")
          ->orWhere('image', 'like', "%$searchTerm%")
          ->orWhereHas('user', function ($userQuery) use ($searchTerm) {
              $userQuery->where('name', 'like', "%$searchTerm%");
          });
    });

    // Filter results by category
    if ($request->filled('category')) {
        $categoryId = $request->input('category');
        $query->where('book_category_id', $categoryId);
    }

    $books = $query->paginate(10);

    // Include additional data if needed
    $categories = BookCategory::all();

    // Return JSON response with book data
    return response()->json([
        "books" => $books, // Assuming BookResource isn't necessary for the front end
        "categories" => $categories // Include categories if needed
    ]);
}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        
        return view("bookSwap.details",compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
