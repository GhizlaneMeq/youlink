<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YouLink</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex h-screen items-center justify-center bg-gray-900 bg-cover bg-no-repeat" style="background-image: url('{{ asset('images/youcode.jpg') }}')">
        <div class="rounded-xl bg-gray-800 bg-opacity-50 px-8 py-6 shadow-lg backdrop-blur-md max-w-md w-full">
            <div class="text-white text-center mb-8">
                <img src="{{ asset('images/logo.png') }}" width="150" alt="YouLink Logo">
                <p class="text-gray-300">Enter Login Details</p>
            </div>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <input class="p-2 w-full bg-gray-200 placeholder-gray-900 rounded border focus:border-teal-500" type="text" name="email" placeholder="Email" required>
                </div>
                <div class="mb-4">
                    <input class="p-2 w-full bg-gray-200 placeholder-gray-900 rounded border focus:border-teal-500" type="password" name="password" placeholder="Password" required>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 transition-colors duration-300 text-white px-10 py-2 rounded-lg shadow-xl">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
