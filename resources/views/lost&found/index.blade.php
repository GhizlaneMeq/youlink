@extends('layouts.book')

@section('main')
div class="relative bg-gradient-to-b from-red-500 to-red-600">
<div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6 py-24">
    <div class="text-center text-white">
        <h1 class="text-4xl md:text-5xl font-bold">Lost Items</h1>
        <p class="mt-4 text-lg md:text-xl">Explore lost items and help reunite them with their owners.</p>
    </div>
</div>
</div>



{{-- Hero section for found items --}}
<div class="relative bg-gradient-to-b from-green-500 to-green-600">
<div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6 py-24">
    <div class="text-center text-white">
        <h1 class="text-4xl md:text-5xl font-bold">Found Items</h1>
        <p class="mt-4 text-lg md:text-xl">Discover found items and help their owners reclaim them.</p>
    </div>
</div>
</div>
    <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6 mt-16">
        <div class="mb-12 space-y-2 text-center">
            <h2 class="text-3xl font-bold text-gray-800 md:text-4xl dark:text-white">Lost Items</h2>
        </div>
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($items as $item)
                <div class="group p-6 sm:p-8 rounded-3xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10">
                    <div class="relative overflow-hidden rounded-xl">
                        <img src="{{ asset('storage/images/items/' . $item->picture) }}" alt="item image" loading="lazy" width="1000" height="667" class="h-64 w-full object-cover object-top transition duration-500 group-hover:scale-105">
                    </div>
                    <h3 class="text-2xl mb-2 font-semibold text-gray-800 dark:text-white">
                        {{ $item->title }}
                    </h3>
                    <p class=" mb-2 text-gray-600 dark:text-gray-300">
                        Description: {{ $item->description }}
                    </p>
                    <p class=" mb-2 text-gray-600 dark:text-gray-300">
                        Location: {{ $item->location }}
                    </p>
                    <p class=" mb-2 text-gray-600 dark:text-gray-300">
                        Status: {{ ucfirst($item->status) }}
                    </p>
                    <div class="flex justify-center mt-4">
                        <a href="{{ route('items.show', $item) }}" class="px-6 py-2.5 rounded text-white text-sm tracking-wider font-semibold bg-blue-600 hover:bg-blue-700 active:bg-blue-600 transition-all duration-300">See More</a>
                        @if ($item->status === 'found')
                            <form action="{{ route('user.items.report_ownership', $item) }}" method="POST">
                                @csrf
                                <button type="submit" class="ml-2 px-6 py-2.5 rounded text-white text-sm tracking-wider font-semibold bg-red-600 hover:bg-red-700 active:bg-red-600 transition-all duration-300">Report Ownership</button>
                            </form>
                        @elseif ($item->status === 'lost')
                            <form action="{{ route('user.items.report_finding', $item) }}" method="POST">
                                @csrf
                                <button type="submit" class="ml-2 px-6 py-2.5 rounded text-white text-sm tracking-wider font-semibold bg-green-600 hover:bg-green-700 active:bg-green-600 transition-all duration-300">Report Finding</button>
                            </form>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
