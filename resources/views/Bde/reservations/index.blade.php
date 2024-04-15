@extends('layouts.bdeDash')

@section('content')
<div class="w-full overflow-x-hidden border-t flex flex-col">
    <main class="w-full flex-grow p-6">
        <div class="relative mt-10 overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">Event</th>
                        <th scope="col" class="px-6 py-3 text-center">User</th>
                        <th scope="col" class="px-6 py-3 text-center">Status</th>
                        <th scope="col" class="px-6 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservations as $reservation)
                    <tr>
                        {{-- <td class="px-6 py-4 text-center">{{ $reservation->event->title}} </td> --}}
                        <td class="px-6 py-4 text-center">{{ $reservation->event->title ?? 'N/A' }}</td>
                        <td class="px-6 py-4 text-center">{{ $reservation->user->name }}</td>
                        <td class="px-6 py-4 text-center">
                            @if ($reservation->status == 'pending')
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                            @elseif ($reservation->status == 'approved')
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Approved</span>
                            @elseif ($reservation->status == 'rejected')
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Rejected</span>
                            @elseif ($reservation->status == 'cancelled')
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">Cancelled</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-center">
                            <div class="flex gap-5 px-6 py-4 justify-center">
                                <form action="{{-- {{ route('event_reservations.approve', $reservation->id) }} --}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button>Approve</button>
                                </form>
                                <form action="{{-- {{ route('event_reservations.reject', $reservation->id) }} --}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button>Reject</button>
                                </form>
                                <form action="{{-- {{ route('event_reservations.cancel', $reservation->id) }} --}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button>Cancel</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</div>
@endsection
