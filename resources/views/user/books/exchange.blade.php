@extends('layouts.book')
@section('main')
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
              <p class="text-sm text-black">{{$exchange->offerer->name }}</p>
            </div>
          </div>
        </td>
        <td class="px-6 py-4 text-sm">
          {{ $exchange->offeredBook->title }}</td>
        </td>
        <td class="px-6 py-4 text-sm">
          {{ $exchange->offeredBook->author }}</td>
        </td>
        <td class="px-6 py-4">
          @php
          $Color = '';
          switch($exchange->status) {
            case 'requested':
              $Color = 'yellow-500';
              break;
            case 'accepted':
              $Color = 'green-500';
              break;
            case 'completed':
              $Color = 'blue-500';
              break;
            case 'cancelled':
              $Color = 'red-500';
              break;
            default:
              $Color = 'gray-500';
          }
          @endphp

          <div class="relative">
            <button class="w-[68px] block text-center py-0.5 border-2 border-{{ $Color }} text-{{ $Color }} text-xs font-semibold rounded exchange_status" data-exchange-id="{{ $exchange->id }}" data-status="{{ $exchange->status }}">
                {{ $exchange->status }}
            </button>
            <div class="absolute right-0 mt-2 w-36 bg-white rounded-md shadow-lg hidden exchange_status_dropdown">
                <ul class="py-1">
                    <li class="hover:bg-gray-200 cursor-pointer px-4 py-2 change_status" data-new-status="requested">Requested</li>
                    <li class="hover:bg-gray-200 cursor-pointer px-4 py-2 change_status" data-new-status="accepted">Accepted</li>
                    <li class="hover:bg-gray-200 cursor-pointer px-4 py-2 change_status" data-new-status="completed">Completed</li>
                    <li class="hover:bg-gray-200 cursor-pointer px-4 py-2 change_status" data-new-status="cancelled">Cancelled</li>
                </ul>
            </div>
          </div>
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

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const statusButtons = document.querySelectorAll('.exchange_status');

    statusButtons.forEach(statusButton => {
        statusButton.addEventListener('click', function(event) {
            const dropdown = this.nextElementSibling;
            dropdown.classList.toggle('hidden');

            document.addEventListener('click', function(e) {
                if (!dropdown.contains(e.target) && !statusButton.contains(e.target)) {
                    dropdown.classList.add('hidden');
                }
            });
        });

        const dropdownItems = statusButton.nextElementSibling.querySelectorAll('.change_status');
        dropdownItems.forEach(item => {
            item.addEventListener('click', function() {
                const newStatus = this.dataset.newStatus;
                const exchangeId = statusButton.dataset.exchangeId;

                fetch(`/user/exchanges/${exchangeId}`, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ status: newStatus })
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    const newStatusSpan = document.querySelector(`.exchange_status[data-exchange-id="${exchangeId}"]`);
                    newStatusSpan.innerText = data.status;
                    newStatusSpan.dataset.status = data.status;

                    // Remove existing status classes
                    ['requested', 'accepted', 'completed', 'cancelled'].forEach(className => {
                        newStatusSpan.classList.remove(`text-${className}-500`);
                    });

                    // Add class for the new status
                    newStatusSpan.classList.add(`text-${data.status}-500`);
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        });
    });
});

</script>

@endsection