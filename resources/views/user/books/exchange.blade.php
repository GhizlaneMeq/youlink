@extends('layouts.book')
@section('main')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Received Exchanges</div>

                <div class="card-body">
                    @if ($exchanges->isEmpty())
                        <p>No exchanges received.</p>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Requested Book</th>
                                    <th>Offered Book</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($exchanges as $exchange)
                                    <tr>
                                        <td>{{ $exchange->requestedBook->title }}</td>
                                        <td>{{ $exchange->offeredBook->title }}</td>
                                        <td>{{ $exchange->status }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div> --}}


<div class="overflow-x-auto">
    <table class="min-w-full bg-white font-[sans-serif]">
      <thead class="whitespace-nowrap">
        <tr>
          
          <th class="px-6 py-4 text-left text-sm font-semibold text-black">
            Book
          </th>
          <th class="px-6 py-4 text-left text-sm font-semibold text-black">
            Author
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 fill-gray-400 inline cursor-pointer ml-2"
              viewBox="0 0 401.998 401.998">
              <path
                d="M73.092 164.452h255.813c4.949 0 9.233-1.807 12.848-5.424 3.613-3.616 5.427-7.898 5.427-12.847s-1.813-9.229-5.427-12.85L213.846 5.424C210.232 1.812 205.951 0 200.999 0s-9.233 1.812-12.85 5.424L60.242 133.331c-3.617 3.617-5.424 7.901-5.424 12.85 0 4.948 1.807 9.231 5.424 12.847 3.621 3.617 7.902 5.424 12.85 5.424zm255.813 73.097H73.092c-4.952 0-9.233 1.808-12.85 5.421-3.617 3.617-5.424 7.898-5.424 12.847s1.807 9.233 5.424 12.848L188.149 396.57c3.621 3.617 7.902 5.428 12.85 5.428s9.233-1.811 12.847-5.428l127.907-127.906c3.613-3.614 5.427-7.898 5.427-12.848 0-4.948-1.813-9.229-5.427-12.847-3.614-3.616-7.899-5.42-12.848-5.42z"
                data-original="#000000" />
            </svg>
          </th>
          <th class="px-6 py-4 text-left text-sm font-semibold text-black">
            requester
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 fill-gray-400 inline cursor-pointer ml-2"
              viewBox="0 0 401.998 401.998">
              <path
                d="M73.092 164.452h255.813c4.949 0 9.233-1.807 12.848-5.424 3.613-3.616 5.427-7.898 5.427-12.847s-1.813-9.229-5.427-12.85L213.846 5.424C210.232 1.812 205.951 0 200.999 0s-9.233 1.812-12.85 5.424L60.242 133.331c-3.617 3.617-5.424 7.901-5.424 12.85 0 4.948 1.807 9.231 5.424 12.847 3.621 3.617 7.902 5.424 12.85 5.424zm255.813 73.097H73.092c-4.952 0-9.233 1.808-12.85 5.421-3.617 3.617-5.424 7.898-5.424 12.847s1.807 9.233 5.424 12.848L188.149 396.57c3.621 3.617 7.902 5.428 12.85 5.428s9.233-1.811 12.847-5.428l127.907-127.906c3.613-3.614 5.427-7.898 5.427-12.848 0-4.948-1.813-9.229-5.427-12.847-3.614-3.616-7.899-5.42-12.848-5.42z"
                data-original="#000000" />
            </svg>
          </th>
          <th class="px-6 py-4 text-left text-sm font-semibold text-black">
            offred book
          </th>
          <th class="px-6 py-4 text-left text-sm font-semibold text-black">
            Author
          </th>
          <th class="px-6 py-4 text-left text-sm font-semibold text-black">
            status
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 fill-gray-400 inline cursor-pointer ml-2"
              viewBox="0 0 401.998 401.998">
              <path
                d="M73.092 164.452h255.813c4.949 0 9.233-1.807 12.848-5.424 3.613-3.616 5.427-7.898 5.427-12.847s-1.813-9.229-5.427-12.85L213.846 5.424C210.232 1.812 205.951 0 200.999 0s-9.233 1.812-12.85 5.424L60.242 133.331c-3.617 3.617-5.424 7.901-5.424 12.85 0 4.948 1.807 9.231 5.424 12.847 3.621 3.617 7.902 5.424 12.85 5.424zm255.813 73.097H73.092c-4.952 0-9.233 1.808-12.85 5.421-3.617 3.617-5.424 7.898-5.424 12.847s1.807 9.233 5.424 12.848L188.149 396.57c3.621 3.617 7.902 5.428 12.85 5.428s9.233-1.811 12.847-5.428l127.907-127.906c3.613-3.614 5.427-7.898 5.427-12.848 0-4.948-1.813-9.229-5.427-12.847-3.614-3.616-7.899-5.42-12.848-5.42z"
                data-original="#000000" />
            </svg>
          </th>
          
        </tr>
      </thead>
      @foreach($exchanges as $exchange)
      <tr class="odd:bg-blue-50">
        <td class="px-6 py-4 text-sm">{{ $exchange->requestedBook->title }}</td>
        <td class="px-6 py-4 text-sm">{{ $exchange->requester->name }}</td>
        <td class="px-6 py-4 text-sm">{{ $exchange->offeredBook->title }}</td>
        <td class="px-6 py-4 text-sm">{{ $exchange->offerer->name }}</td>
        <td class="px-6 py-4">
          <span class="w-[68px] block text-center py-0.5 border-2 {{ $exchange->status === 'Active' ? 'border-green-500 text-green-500' : 'border-red-500 text-red-500' }} font-semibold rounded text-xs">{{ $exchange->status }}</span>
        </td>
      </tr>
      @endforeach
      <tbody class="whitespace-nowrap">
      @foreach($exchanges as $exchange)

        <tr class="odd:bg-blue-50">
          
          <td class="px-6 py-4 text-sm">
            {{ $exchange->requestedBook->title }}</td>
          </td>
          
          <td class="px-6 py-4 text-sm">
            {{ $exchange->requestedBook->author }}</td>
          </td>
          <td class="px-6 py-4 text-sm">
            <div class="flex items-center cursor-pointer">
              <img src='https://readymadeui.com/profile_4.webp' class="w-7 h-7 rounded-full shrink-0" />
              <div class="ml-2">
                <p class="text-sm text-black">$exchange->offerer->name }}s</p>
              </div>
            </div>
          </td>
          <td class="px-6 py-4 text-sm">
            {{ $exchange->offerer->name }}</td>
          </td>
          <td class="px-6 py-4 text-sm">
            <span
              class="w-[68px] block text-center py-0.5 border-2 border-green-500 text-green-500 font-semibold rounded text-xs">Active</span>
          </td>
          <td class="px-6 py-4">
            <svg class="w-[18px] h-4 inline mr-1" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z"
                fill="#facc15" />
            </svg>
            <svg class="w-[18px] h-4 inline mr-1" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z"
                fill="#facc15" />
            </svg>
            <svg class="w-[18px] h-4 inline mr-1" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z"
                fill="#facc15" />
            </svg>
            <svg class="w-[18px] h-4 inline mr-1" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z"
                fill="#facc15" />
            </svg>
            <svg class="w-[18px] h-4 inline" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z"
                fill="#facc15" />
            </svg>
          </td>
          <td class="px-6 py-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 cursor-pointer fill-gray-400" viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="2" data-original="#000000" />
              <circle cx="4" cy="12" r="2" data-original="#000000" />
              <circle cx="20" cy="12" r="2" data-original="#000000" />
            </svg>
          </td>
        </tr>
      @endforeach
        
      </tbody>
    </table>
  </div>
@endsection