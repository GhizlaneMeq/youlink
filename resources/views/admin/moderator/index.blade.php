@extends('layouts.AdminDash')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/css/multi-select-tag.css">
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/js/multi-select-tag.js"></script>
<div class="w-full">
    <div class="bg-gray-800 p-2 rounded-t-lg w-full">
        <div class="flex justify-evenly space-x-4">
            <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button dark:text-gray-300 dark:border-gray-700 dark:hover:bg-gray-700 dark:hover:border-gray-900" onclick="showTab('tab1')">Consulter moderator</button>
            <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button dark:text-gray-300 dark:border-gray-700 dark:hover:bg-gray-700 dark:hover:border-gray-900" onclick="showTab('tab2')">Sélectionner moderator</button>
            <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button dark:text-gray-300 dark:border-gray-700 dark:hover:bg-gray-700 dark:hover:border-gray-900" onclick="showTab('tab3')">Créer moderator</button>
        </div>
    </div>
    

    <div id="tab1" class="p-4 tab-content bg-gray-900 shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold mb-2 text-blue-300">Consulter moderator</h2>
        <p class="text-gray-300">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-800">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-gray-900 divide-y divide-gray-700">
                    @foreach($moderators as $moderator)
                    <tr class="text-gray-300">
                        <td class="px-6 py-4 whitespace-nowrap">{{ $moderator->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $moderator->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('admin.moderators.edit', $moderator) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            <form action="{{ route('admin.moderators.destroy', $moderator) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="ml-2 text-red-600 hover:text-red-900">Delete moderator</button>
                            </form>
                            <form action="{{ route('admin.users.destroy', $moderator) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="ml-2 text-red-600 hover:text-red-900">Delete User</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </p>
    </div>

    <div id="tab2" class="p-4 tab-content bg-gray-900 shadow-md rounded-lg hidden">
        <h2 class="text-2xl font-semibold mb-2 text-blue-300">Sélectionner moderator</h2>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Select Existing moderator') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.moderators.store') }}">
                        @csrf

                        <div class="relative">
                            <select name="user_ids[]" id="user_ids" multiple class="w-full px-3 py-2 border rounded-md focus:outline-none bg-gray-800 text-white dark:text-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:border-blue-500">
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <svg class="h-4 w-4 fill-current text-gray-500 dark:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 12a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                    <path fill-rule="evenodd" d="M15 9a5 5 0 11-10 0 5 5 0 0110 0zM5 9a1 1 0 112 0 1 1 0 01-2 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                        @error('user_ids')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <button type="submit" class="btn btn-primary">Select moderator</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div id="tab3" class="p-4 tab-content bg-gray-900 shadow-md rounded-lg hidden">
        
        <div class="max-w-md mx-auto p-8 bg-gray-800 rounded-md shadow-md form-container">
            <h2 class="text-2xl font-semibold text-white mb-6">Create moderator</h2>
            <form method="POST" action="{{ route('admin.moderators.store') }}">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-gray-300 text-sm font-bold mb-2">Name:</label>
                    <input type="text" name="name" id="name" placeholder="Name" required
                        class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-300 text-sm font-bold mb-2">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Email" required
                        class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="phone" class="block text-gray-300 text-sm font-bold mb-2">Phone:</label>
                    <input type="phone" name="phone" id="phone" placeholder="Phone" required
                        class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white">
                    @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                

                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">
                    Create moderator
                </button>
            </form>
        </div>

    </div>
</div>

<style>
    .tab-button.active {
        background-color: #4a5568;
        border-color: #4299e1;
        color: #4299e1;
    }
</style>

<script>
    function showTab(tabId) {
        const tabContents = document.querySelectorAll('.tab-content');
        tabContents.forEach((content) => {
            content.classList.add('hidden');
        });

        const selectedTab = document.getElementById(tabId);
        if (selectedTab) {
            selectedTab.classList.remove('hidden');
        }

        const tabButtons = document.querySelectorAll('.tab-button');
        tabButtons.forEach((button) => {
            button.classList.remove('active');
        });

        const clickedButton = document.querySelector(`[onclick="showTab('${tabId}')"]`);
        if (clickedButton) {
            clickedButton.classList.add('active');
        }
    }

    showTab('tab1');

    new MultiSelectTag('user_ids')  

</script>

@endsection
