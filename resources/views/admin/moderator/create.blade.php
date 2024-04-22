@extends('layouts.adminDash')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/css/multi-select-tag.css">
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/js/multi-select-tag.js"></script>
<ul id="tabs" class="grid grid-cols-2 font-sans">
    <li id="tab-create" class="text-blue-600 font-bold text-base text-center bg-gray-50 py-3 px-4 border-b-2 border-blue-600 cursor-pointer transition-all">
      Create Moderator
    </li>
    <li id="tab-existing" class="text-gray-600 font-bold text-base text-center hover:bg-gray-50 py-3 border-b-2 px-4 cursor-pointer transition-all">
      Select Existing Moderator
    </li>
</ul>

<div id="tab-content-create" class="tab-content">
    <!-- Create Moderator Tab Content -->
    <div class="container">
        <div class="max-w-md mx-auto p-8 bg-gray-800 rounded-md shadow-md form-container">
            <h2 class="text-2xl font-semibold text-white mb-6">Create Moderator</h2>
            <form method="POST" action="{{ route('admin.moderators.store') }}">
                @csrf
    
                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-300 text-sm font-bold mb-2">Name:</label>
                    <input type="text" name="name" id="name" placeholder="John Doe" required
                        class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
    
                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-300 text-sm font-bold mb-2">Email:</label>
                    <input type="email" name="email" id="email" placeholder="john@example.com" required
                        class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
    
                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block text-gray-300 text-sm font-bold mb-2">Password:</label>
                    <input type="password" name="password" id="password" required
                        class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white">
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
    
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">
                    Create Moderator
                </button>
            </form>
        </div>
    </div>
</div>

<div id="tab-content-existing" class="tab-content hidden">
    <!-- Select Existing Moderator -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Select Existing Moderator') }}</div>

                    <div class="card-body">
                        <!-- Form to select existing moderator -->
                        <form method="POST" action="{{ route('admin.moderators.store') }}">
                            @csrf

                            <!-- Multi-select dropdown for selecting existing moderators -->
                            <div class="form-group">
                                <label for="user_ids">Select Existing Moderator:</label>
                                <select name="user_ids[]" id="user_ids" class="form-control" multiple>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                                @error('user_ids')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Select Moderator</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Get all tab elements
const tabs = document.querySelectorAll('[id^="tab-"]');
const tabContents = document.querySelectorAll('.tab-content');

// Add click event listeners to tabs
tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        // Remove 'active' class from all tabs
        tabs.forEach(t => t.classList.remove('active'));

        // Add 'active' class to the clicked tab
        tab.classList.add('active');

        // Hide all tab contents
        tabContents.forEach(content => content.classList.add('hidden'));

        // Get the corresponding tab content and show it
        const tabContentId = tab.id.replace('tab-', 'tab-content-');
        const tabContent = document.getElementById(tabContentId);
        if (tabContent) {
            tabContent.classList.remove('hidden');
        }
    });
});

// Add click event listener to input fields to prevent event propagation
document.querySelectorAll('input').forEach(input => {
    input.addEventListener('click', (event) => {
        event.stopPropagation();
    });
});

const multiSelectDropdown = new MultiSelectTag('user_ids');

// Prevent the dropdown from closing when clicking inside it
multiSelectDropdown.dom.input.addEventListener('click', (event) => {
    event.stopPropagation();
});
</script>
@endsection
