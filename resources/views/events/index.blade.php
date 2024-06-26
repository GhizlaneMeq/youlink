@extends('layouts.book')

@section('main')

<main class="space-y-40 mb-10">
    <div class="relative">
        <div aria-hidden="true" class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40 dark:opacity-20">
            <div class="blur-[106px] h-64 bg-gradient-to-br from-indigo-600 to-purple-400 dark:from-blue-700"></div>
            <div class="blur-[106px] h-64 bg-gradient-to-br from-indigo-600 to-purple-400 dark:to-indigo-600"></div>
        </div>
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            <div class="relative pt-36 ml-auto">
                <div class="lg:w-2/3 text-center mx-auto">
                    <h1 class="text-white font-bold font-sans text-5xl md:text-6xl ">Discover Lost
                        and Found Items with <span class="text-blue-500 ">LostNFound.</span></h1>
                    <p class="mt-8 text-gray-300">LostNFound is your go-to platform for discovering
                        and recovering lost items, connecting lost items with their owners, and ensuring every lost item finds its way back home.</p>
    
                    <div
                        class="hidden py-8 mt-16 border-y border-gray-100 dark:border-gray-800 sm:flex justify-between">
                        <div class="text-left">
                            <h6 class="text-lg font-semibold  text-white">Efficient Search</h6>
                        </div>
                        <div class="text-left">
                            <h6 class="text-lg font-semibold  text-white">Secure Platform</h6>
                        </div>
                        <div class="text-left">
                            <h6 class="text-lg font-semibold  text-white">Simple Recovery Process</h6>
                        </div>
                    </div>
    
                    
                </div>
            </div>
        </div>
    </div>
    
    
    <div>
        <div class="relative max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($events as $event)
                <a href="{{ route('events.show', ['event' => $event->id]) }}">
                <div class="group p-6 sm:p-8 rounded-3xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10">
                    <div class="relative overflow-hidden rounded-xl">
                        <img src="{{ asset('storage/images/events/' . $event->image) }}" alt="art cover" loading="lazy" width="1000" height="667" class="h-64 w-full object-cover object-top transition duration-500 group-hover:scale-105">
                    </div>
                    
                        <h3 class="text-2xl mb-2 font-semibold text-gray-800 dark:text-white">
                            {{ $event->title }}
                        </h3>
                        <p class=" mb-2 text-gray-600 dark:text-gray-300">
                            <span class="material-symbols-outlined">
                            </span>location : {{ $event->location }}
                        </p>
                        <p class=" mb-2 text-gray-600 dark:text-gray-300">
                            <span class="material-symbols-outlined">
                            </span>date : {{ $event->date }}
                        </p>
                    
                    

                </div>
            </a>
                @endforeach
            </div>


        </div>
    </div>
    </div>


    @endsection