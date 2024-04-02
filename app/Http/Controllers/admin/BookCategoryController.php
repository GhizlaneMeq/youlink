<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBookCategoryRequest;
use App\Http\Requests\Admin\UpdateBookCategoryRequest;
use Illuminate\Http\Request;
use App\Models\BookCategory;
use Illuminate\Support\Facades\Session;

class BookCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = BookCategory::all();
        return view('admin.book_category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.book_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookCategoryRequest $request)
    {
        $category = BookCategory::create($request->validated());

        Session::flash('success', 'Book category created successfully.');

        return redirect()->route('admin.book_categories.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = BookCategory::findOrFail($id);
        return view('admin.book_category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookCategoryRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookCategoryRequest $request, $id)
    {
        $category = BookCategory::findOrFail($id);
        $category->update($request->validated());

        Session::flash('success', 'Book category updated successfully.');

        return redirect()->route('admin.book-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = BookCategory::findOrFail($id);
        $category->delete();

        Session::flash('success', 'Book category deleted successfully.');

        return redirect()->route('admin.book-category.index');
    }
}
