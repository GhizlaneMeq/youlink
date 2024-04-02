@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Create Book Category</h1>

    <form action="{{ route('book_categories.store') }}" method="POST" class="max-w-md">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-semibold mb-2">Category Name:</label>
            <input type="text" name="name" id="name" class="w-full border-gray-300 rounded-md p-2">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-sm font-semibold mb-2">Description:</label>
            <textarea name="description" id="description" class="w-full border-gray-300 rounded-md p-2" rows="4"></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white rounded-md py-2 px-4 hover:bg-blue-600">Create Category</button>
    </form>
</div>
@endsection
