@extends('layouts.bdeDash')

@section('content')
<div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
            <div class="max-w-md mx-auto">
                <form action="{{ route('events.update', $event->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="flex items-center space-x-5">
                        <div class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">i</div>
                        <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                            <h2 class="leading-relaxed">Edit an Event</h2>
                        </div>
                    </div>
                    <div class="divide-y divide-gray-200">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <div class="flex flex-col">
                                <label class="leading-loose">Event Profile</label>
                                <input type="file" name="image" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" value="{{ $event->getFirstMediaUrl('images') }}">
                                @error('image')
                                <span class="text-red-400">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose">Event Title</label>
                                <input type="text" name="title" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Event title" value="{{ $event->title }}">
                                @error('title')
                                <span class="text-red-400">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose">Event Location</label>
                                <input type="text" name="location" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Event location" value="{{ $event->location }}">
                                @error('location')
                                <span class="text-red-400">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex flex-col">
                                <input type="hidden" name="user_id" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" value="{{ Auth::user()->id }}">
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose">Event Category</label>
                                <input type="text" name="event_category" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Event category" value="{{ $event->event_category }}">
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="flex flex-col">
                                    <label class="leading-loose">Start</label>
                                    <div class="relative focus-within:text-gray-600 text-gray-400">
                                        <input type="date" name="start_date" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Start date" value="{{ $event->start_date }}">
                                        @error('start_date')
                                        <span class="text-red-400">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose">End</label>
                                    <div class="relative focus-within:text-gray-600 text-gray-400">
                                        <input type="date" name="end_date" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="End date" value="{{ $event->end_date }}">
                                        @error('end_date')
                                        <span class="text-red-400">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="flex flex-col">
                                    <label class="leading-loose">Price</label>
                                    <div class="relative focus-within:text-gray-600 text-gray-400">
                                        <input type="number" name="price" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" value="{{ $event->price }}">
                                        @error('price')
                                        <span class="text-red-400">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose">Available seats</label>
                                    <div class="relative focus-within:text-gray-600 text-gray-400">
                                        <input type="number" name="available_seats" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" value="{{ $event->available_seats }}">
                                        @error('available_seats')
                                        <span class="text-red-400">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose">Event Description</label>
                                <input type="text" name="description" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Optional" value="{{ $event->description }}">
                                @error('description')
                                <span class="text-red-400">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="pt-4 flex items-center space-x-4">
                            <a href="{{ route('events.index') }}" class="block text-gray-900 px-4 py-3 rounded-md focus:outline-none flex justify-center items-center w-full">
                                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                Cancel
                            </a>
                            <button class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
