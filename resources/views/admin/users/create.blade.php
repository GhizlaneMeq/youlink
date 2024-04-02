@extends('layouts.dashboard')
@section('content')
<form action="{{ route('admin.users.store') }}" method="POST" class="max-w-md mx-auto mt-20 p-6 bg-white border rounded-lg shadow-lg">
    @csrf
    <h2 class="text-2xl font-bold mb-6">Create User</h2>
    <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="name">
            Name:
        </label>
        <input name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Enter user's name">
        @error('name')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="email">
            Email:
        </label>
        <input name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter user's email">
        @error('email')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="phone">
            Phone:
        </label>
        <input name="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="text" placeholder="Enter user's phone number">
        @error('phone')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
    
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Create User
    </button>
</form>
@endsection
