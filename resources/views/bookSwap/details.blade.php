@extends('layouts.book')

@section('main')
<div class="max-w-4xl mx-auto py-8">
    <div class="bg-gray-900 shadow-md rounded-lg overflow-hidden flex">
        <div class="w-1/3 px-6 py-4">
            <img src="{{ asset('storage/images/books/' . $book->image) }}" alt="Book Image" class="w-full rounded-lg shadow-md">
        </div>
        <div class="w-2/3 px-6 py-4 text-white">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-3xl font-semibold">{{ $book->title }}</h2>
                <span>{{ $book->author }}</span>
            </div>
            <p class="text-gray-300 leading-relaxed">{{ $book->description }}</p>
            <div class="mt-4">
                <p class="text-sm text-gray-400">Category: <span class="font-semibold">{{ $book->bookCategory->name }}</span></p>
                <a href="{{route('users.show',$book->user_id)}}"><p class="text-sm text-gray-400">Owner: <span class="font-semibold">{{ $book->user->name }}</span></p></a> 
            </div>
            <div class="mt-6">
                <button onclick="openExchangeModal('{{ $book->id }}', '{{ $book->user_id }}')" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-600">Request Exchange</button>
            </div>
        </div>
    </div>
</div>

<!-- Exchange Modal -->
<div id="exchangeModal" class="fixed inset-0 z-50 flex items-center justify-center overflow-auto bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg p-8 w-96">
        <button onclick="closeExchangeModal()" class="absolute top-0 right-0 p-2 text-gray-500 hover:text-gray-700 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <h2 class="text-lg font-semibold mb-4">Choose a Book to Exchange</h2>
        <form id="exchangeForm" method="POST" action="{{ route('user.exchanges.store') }}">
            @csrf
            <input type="hidden" name='requester_id' value="{{ Auth::id() }}" >
            <input type="hidden" name='received_book_id' id='received_book_id' value="" >
            <input type="hidden" name='receiver_id' id='receiver_id' value="" >
            <div class="mt-4">
                <label for="requested_book_id" class="block text-sm font-medium text-gray-700">Select a Book to Exchange:</label>
                <select id="requested_book_id" name="requested_book_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                    <option value="{{ $book->id }}">{{ $book->title }}</option>
                </select>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-600 mt-4">Exchange</button>
        </form>
    </div>
</div>

<script>
    function openExchangeModal(bookId, userId) {
        document.getElementById('received_book_id').value = bookId; 
        document.getElementById('receiver_id').value = userId; 
        document.getElementById('exchangeModal').classList.remove('hidden');
    }

    function closeExchangeModal() {
        document.getElementById('exchangeModal').classList.add('hidden');
    }
</script>
@endsection
