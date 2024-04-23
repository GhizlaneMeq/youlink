@extends('layouts.AdminDash')
@section('content')
<form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="max-w-md mx-auto mt-20 p-6 border rounded-lg shadow-lg">
    @csrf
    @method('PUT') 
    <h2 class="text-2xl font-bold mb-6">Edit User</h2>
    <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="name">
            Name:
        </label>
        <input name="name" value="{{ $user->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Enter user's name">
        @error('name')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="email">
            Email:
        </label>
        <input name="email" value="{{ $user->email }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter user's email">
        @error('email')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="phone">
            Phone:
        </label>
        <input name="phone" value="{{ $user->phone }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="text" placeholder="Enter user's phone number">
        @error('phone')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
    
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Update User
    </button>
</form>
@endsection
