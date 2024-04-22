@extends('layouts.book')

@section('main')
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    @foreach ($items as $item)
      <div class="relative flex flex-col rounded-xl bg-gray-800 text-white shadow-md mb-6">
        <div class="flex items-center justify-between p-3">
            <div class="flex items-center space-x-2">
                 <img src="" alt=""
                    class="object-cover object-center w-8 h-8 rounded-full shadow-sm dark:bg-gray-500 dark:border-gray-300">
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
          <p class="block mt-2 font-sans text-sm @if ($item->status === 'lost') text-red-600 @elseif ($item->status === 'found') text-yellow-600 @endif">
            Status: {{ ucfirst($item->status) }}
          </p>
        </div>
        <div class="p-6 pt-0">
            <a href="{{ route('items.show', $item) }}"
              class="px-6 py-2.5 rounded text-white text-sm tracking-wider font-semibold bg-blue-600 hover:bg-blue-700 active:bg-blue-600 transition-all duration-300">See
              More </a>
              @if ($item->status === 'found')
                  <form action="{{ route('user.items.report_ownership', $item) }}" method="POST">
                      @csrf
                      <button type="submit">Report Ownership</button>
                  </form>
              @elseif ($item->status === 'lost')
                  <form action="{{ route('user.items.report_finding', $item) }}" method="POST">
                      @csrf
                      <button type="submit">Report Finding</button>
                  </form>
              @endif

        </div>
      </div>
    @endforeach
  </div>
@endsection
