@extends('layouts.dashboard')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-semibold mb-4">Edit Book</h2>
        <form action="{{ route('admin.books.update', $book->id) }}" method="POST" class="max-w-md">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-semibold mb-2">Title</label>
                <input type="text" id="title" name="title" class="form-input w-full" value="{{ $book->title }}" required>
            </div>
            <div class="mb-4">
                <label for="author" class="block text-gray-700 font-semibold mb-2">Author</label>
                <input type="text" id="author" name="author" class="form-input w-full" value="{{ $book->author }}" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
                <textarea id="description" name="description" class="form-textarea w-full" required>{{ $book->description }}</textarea>
            </div>
            <div class="mb-4">
                <label for="category_id" class="block text-gray-700 font-semibold mb-2">Category</label>
                <select id="category_id" name="category_id" class="form-select w-full" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $book->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Update Book</button>
        </form>
    </div>
@endsection
