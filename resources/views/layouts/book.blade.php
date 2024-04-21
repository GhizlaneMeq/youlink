@auth
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>YouLink</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;800&family=Nothing+You+Could+Do&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            inter: ['Inter', 'sans-serif'],
                            nycd: ['Nothing You Could Do', 'cursive'],
                        },
                    },
                },
            };
        </script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @vite('resources/sass/app.scss')

    </head>
    <body class="bg-gradient-to-br from-gray-900 to-black">
        <div class="text-gray-300 container mx-auto p-8 overflow-hidden md:rounded-lg md:p-10 lg:p-12">
            <header class='  font-sans min-h-[60px]'>
                <div class='flex flex-wrap items-center justify-between xl:px-10 px-6 py-3 relative lg:gap-y-2 gap-y-4 gap-x-4'>
                <a href="javascript:void(0)"><img src="{{ asset('images/logo.png') }}" alt="logo" class='w-36' />
                </a>
                <div class='flex items-center max-lg:ml-auto lg:order-1'>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="user-dropdown">
                            <div class="px-4 py-3">
                                <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                                <span class="block text-sm text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email
                                    }}</span>
                            </div>
                            <ul class="py-2" aria-labelledby="user-menu-button">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Log
                                            out</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    <button id="toggle" class='lg:hidden ml-7'>
                    <svg class="w-7 h-7" fill="#fff" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                    </svg>
                    </button>
                </div>
                
                <ul id="collapseMenu" class='lg:!flex max-lg:hidden max-lg:w-full lg:space-x-10 max-lg:space-y-3 max-lg:my-4'>
                    <li class='max-lg: max-lg:py-2'><a href='/'
                        class='hover:text-blue-600 font-bold text-[15px] text-blue-500 block'>Home</a></li>
                    <li class='group max-lg: max-lg:py-2 relative'>
                    <a href='{{route('books.index')}}'
                        class='hover:text-blue-500 font-bold text-white text-[15px] lg:hover:text-blue-600 block'>Book Swap<svg
                        xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='currentColor' class="ml-1 inline-block"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                            data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <ul class='absolute hidden group-hover:block shadow-lg max-lg:border max-lg:border-gray-500 bg-[#232f3e] px-6 pb-4 pt-6 space-y-3 lg:top-5 max-lg:top-8 lg:-left-6 min-w-[250px] z-50'>
                        <li class='py-2'><a href='{{ route("books.index") }}' class='hover:text-blue-500 font-bold text-white text-[15px] block'>All Books</a></li>
                        <li class='py-2'><a href='{{route("user.books.index")}}' class='hover:text-blue-500 font-bold text-white text-[15px] block'>My Books</a></li>
                        <li class='py-2'><a href='{{route("user.exchanges.incomingRequests")}}' class='hover:text-blue-500 font-bold text-white text-[15px] block'>Incoming Requests</a></li>
                        <li class='py-2'><a href='{{route("user.exchanges.outgoingRequests")}}' class='hover:text-blue-500 font-bold text-white text-[15px] block'>Outgoing Requests</a></li>
                    </ul>
                    </li>
                    <li class='group max-lg: max-lg:py-2 relative'>
                    <a href='{{route('items.index')}}'
                        class='hover:text-blue-500 font-bold text-white text-[15px] lg:hover:text-blue-600 block'>Discovery Depot<svg
                        xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='currentColor' class="ml-1 inline-block"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                            data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <ul
                        class='absolute hidden group-hover:block max-lg:border max-lg:border-gray-500 shadow-lg bg-[#232f3e] px-6 pb-4 pt-6 space-y-3 lg:top-5 max-lg:top-8 lg:-left-6 min-w-[250px]'>
                        <li class=' py-2'><a href='{{route('items.index')}}'
                            class='hover:text-blue-500 font-bold text-white text-[15px] block'>All Items</a></li>
                        <li class=' py-2'><a href='{{route('items.index')}}' class='hover:text-blue-500 font-bold text-white text-[15px] block'>Lost Items:</a></li>
                        <li class=' py-2'><a href='javascript:void(0)' class='hover:text-blue-500 font-bold text-white text-[15px] block'>Found Items</a></li>
                        <li class=' py-2'><a href='javascript:void(0)' class='hover:text-blue-500 font-bold text-white text-[15px] block'>Report Lost Item </a></li>
                        <li class=' py-2'><a href='javascript:void(0)' class='hover:text-blue-500 font-bold text-white text-[15px] block'>Report Found Item </a></li>
                    </ul>
                    </li>
                    <li class='group max-lg: max-lg:py-2 relative'>
                    <a href='{{route('events.index')}}'
                        class='hover:text-blue-500 font-bold text-white text-[15px] lg:hover:text-blue-600 block'>events<svg
                        xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='currentColor' class="ml-1 inline-block"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                            data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <ul
                        class='absolute hidden group-hover:block max-lg:border max-lg:border-gray-500 shadow-lg bg-[#232f3e] px-6 pb-4 pt-6 space-y-3 lg:top-5 max-lg:top-8 lg:-left-6 min-w-[250px]'>
                        <li class=' py-2'><a href='{{route('events.index')}}' class='hover:text-blue-500 font-bold text-white text-[15px] block'>All events</a></li>
                        <li class=' py-2'><a href='{{route('user.reservations')}}' class='hover:text-blue-500 font-bold text-white text-[15px] block'>my reservations</a></li>

                    </ul>
                    </li>
                    <li class='max-lg: max-lg:py-2'><a href='javascript:void(0)'
                        class='hover:text-blue-500 font-bold text-white text-[15px] block'>Journey Hub</a></li>
                    <li class='max-lg: max-lg:py-2'><a href='javascript:void(0)'
                        class='hover:text-blue-500 font-bold text-white text-[15px] block'>Contact</a></li>
                    <li class='max-lg: max-lg:py-2'><a href='javascript:void(0)'
                        class='hover:text-blue-500 font-bold text-white text-[15px] block'>Source</a></li>
                </ul>
                <button type="button"
                            class="flex tex rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                            id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                            data-dropdown-placement="bottom">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="{{ asset('storage/images/users/'. Auth::user()->avatar) }}" alt="user photo">
                        </button>
        
                        
                </div>
                
            </header>
            @yield('main')
            <div class="h-32 md:h-40"></div>
            <footer>
                <div class="grid gap-4 md:grid-cols-4">
                    <ul class="space-y-1 text-gray-400">
                        <li class="pb-4 font-serif text-gray-400">Social networks</li>
                        <li>
                            <a href="https://twitter.com/victormustar" class="hover:underline">Twitter</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Linkedin</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Facebook</a>
                        </li>
                    </ul>
                    <ul class="space-y-1 text-gray-400">
                        <li class="pb-4 font-serif text-gray-400">Locations</li>
                        <li>
                            <a href="#" class="hover:underline">Paris</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">New York</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">London</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Singapour</a>
                        </li>
                    </ul>
                    <ul class="space-y-1 text-gray-400">
                        <li class="pb-4 font-serif text-gray-400">Company</li>
                        <li>
                            <a href="#" class="hover:underline">The team</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">About us</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Our vision</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Join us</a>
                        </li>
                    </ul>
                    <ul class="space-y-1 text-gray-400">
                        <li class="pb-4 font-serif text-gray-400">Join</li>
                        <li>
                            <a href="https://github.com/gary149/landing-gradients"
                                class="self-start px-3 py-2 leading-none text-gray-200 border border-gray-800 rounded-lg focus:outline-none focus:shadow-outline bg-gradient-to-b hover:from-indigo-500 from-gray-900 to-black">
                                Get this template
                            </a>
                        </li>
                    </ul>
                </div>
            </footer>
        </div>

        <script>
            var toggleBtn = document.getElementById('toggle');
            var collapseMenu = document.getElementById('collapseMenu');
        
            function handleClick() {
            if (collapseMenu.style.display === 'block') {
                collapseMenu.style.display = 'none';
            } else {
                collapseMenu.style.display = 'block';
            }
            }
        
            toggleBtn.addEventListener('click', handleClick);
        </script>
    </body>
    </html>

    @endauth