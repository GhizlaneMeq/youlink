@extends('layouts.book')

@section('main') 
    <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6 mt-16">
        <div class="relative">
            <div aria-hidden="true" class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40  opacity-20">
                <div class="blur-[106px] h-64 bg-gradient-to-br from-indigo-600 to-purple-400  from-blue-700"></div>
                <div class="blur-[106px] h-64 bg-gradient-to-br from-indigo-600 to-purple-400  to-indigo-600"></div>
            </div>
            <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6  pb-24">
                <div class="relative  ml-auto">
                    <div class="lg:w-2/3 text-center mx-auto">
                        <h1 class="text-gray-900  text-white font-bold font-sans text-5xl md:text-6xl ">Discover Lost
                            and Found Items with <span class="text-blue-900  text-white">LostNFound.</span></h1>
                        <p class="mt-8   text-gray-300">LostNFound is your go-to platform for discovering
                            and recovering lost items, connecting lost items with their owners, and ensuring every lost item finds its way back home.</p>
        
                        <div
                            class="hidden py-8 mt-16 border-y border-gray-100  sm:flex justify-between">
                            <div class="text-left">
                                <h6 class="text-lg font-semibold   text-white">Efficient Search</h6>
                            </div>
                            <div class="text-left">
                                <h6 class="text-lg font-semibold   text-white">Secure Platform</h6>
                            </div>
                            <div class="text-left">
                                <h6 class="text-lg font-semibold   text-white">Simple Recovery Process</h6>
                            </div>
                        </div>
        
                        
                        <div class="mt-8 flex justify-center space-x-4">
                            <a href="{{route('user.createFoundItem')}}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-full transition duration-300 ease-in-out">Report Found Item</a>
                            <a href="{{route('user.createLostItem')}}" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-full transition duration-300 ease-in-out">Report Lost Item</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($items as $item)
            <a href="{{ route('items.show', $item) }}">
                <div class="relative flex flex-col rounded-xl bg-gray-800 text-white shadow-md mb-6">
                    <div class="flex items-center justify-between p-3">
                        <div class="flex items-center space-x-2">
                            <img src="" alt=""
                                class="object-cover object-center w-8 h-8 rounded-full shadow-sm  bg-gray-500  border-gray-300">
                            <div class="-space-y-1">
                                <h2 class="text-sm font-semibold leading-none">{{ Auth::user()->name }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="relative mx-4 -mt-6 h-40 overflow-hidden rounded-t-xl bg-blue-gray-700 shadow-lg">
                        <img src="" alt="">
                    </div>
                    <div class="p-6">
                        <h5 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal">
                            {{ $item->title }}
                        </h5>
                        <p class="block font-sans text-base font-light leading-relaxed">
                            {{ $item->description }}
                        </p>
                        <p
                            class="block mt-2 font-sans text-sm @if ($item->status === 'lost') text-red-600 @elseif ($item->status === 'found') text-yellow-600 @endif">
                            Status: {{ ucfirst($item->status) }}
                        </p>
                    </div>
                    <div class="p-6 pt-0">
                           
                        @if ($item->status === 'found')
                            <form action="{{ route('user.items.report_ownership', $item) }}" method="POST">
                                @csrf
                                <button class="px-6 py-2.5 rounded text-white text-sm tracking-wider font-semibold bg-blue-600 hover:bg-blue-700 active:bg-blue-600 transition-all duration-300" type="submit">Report Ownership</button>
                            </form>
                        @elseif ($item->status === 'lost')
                            <form action="{{ route('user.items.report_finding', $item) }}" method="POST">
                                @csrf
                                <button class="px-6 py-2.5 rounded text-white text-sm tracking-wider font-semibold bg-blue-600 hover:bg-blue-700 active:bg-blue-600 transition-all duration-300" type="submit">Report Finding</button>
                            </form>
                        @endif
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        
    </div>
@endsection





