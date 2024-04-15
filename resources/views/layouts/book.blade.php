<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YouLink</title>
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
                <span class="relative">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20px"
                    class="cursor-pointer fill-[#fff] hover:fill-blue-700 inline" viewBox="0 0 64 64">
                    <path
                      d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                      data-original="#000000" />
                  </svg>
                  <span class="absolute left-auto -ml-1 top-0 rounded-full bg-red-500 px-1 py-0 text-xs text-white">0</span>
                </span>
                <span class="relative ml-8">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                    class="cursor-pointer fill-[#fff] hover:text-blue-600 inline" viewBox="0 0 512 512">
                    <path
                      d="M164.96 300.004h.024c.02 0 .04-.004.059-.004H437a15.003 15.003 0 0 0 14.422-10.879l60-210a15.003 15.003 0 0 0-2.445-13.152A15.006 15.006 0 0 0 497 60H130.367l-10.722-48.254A15.003 15.003 0 0 0 105 0H15C6.715 0 0 6.715 0 15s6.715 15 15 15h77.969c1.898 8.55 51.312 230.918 54.156 243.71C131.184 280.64 120 296.536 120 315c0 24.812 20.188 45 45 45h272c8.285 0 15-6.715 15-15s-6.715-15-15-15H165c-8.27 0-15-6.73-15-15 0-8.258 6.707-14.977 14.96-14.996zM477.114 90l-51.43 180H177.032l-40-180zM150 405c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm167 15c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm0 0"
                      data-original="#000000"></path>
                  </svg>
                  <span class="absolute left-auto -ml-1 top-0 rounded-full bg-red-500 px-1 py-0 text-xs text-white">0</span>
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="20px"
                  class="cursor-pointer fill-[#fff] hover:text-blue-600 inline ml-7">
                  <path
                    d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
                  </path>
                </svg>
                <button id="toggle" class='lg:hidden ml-7'>
                  <svg class="w-7 h-7" fill="#fff" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                      clip-rule="evenodd"></path>
                  </svg>
                </button>
              </div>
              <ul id="collapseMenu" class='lg:!flex max-lg:hidden max-lg:w-full lg:space-x-10 max-lg:space-y-3 max-lg:my-4'>
                <li class='max-lg: max-lg:py-2'><a href='javascript:void(0)'
                    class='hover:text-blue-600 font-bold text-[15px] text-blue-500 block'>Home</a></li>
                <li class='group max-lg: max-lg:py-2 relative'>
                  <a href='javascript:void(0)'
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
                  <a href='javascript:void(0)'
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
                    <li class=' py-2'><a href='javascript:void(0)'
                        class='hover:text-blue-500 font-bold text-white text-[15px] block'>All Items</a></li>
                    <li class=' py-2'><a href='javascript:void(0)' class='hover:text-blue-500 font-bold text-white text-[15px] block'>Lost Items:</a></li>
                    <li class=' py-2'><a href='javascript:void(0)' class='hover:text-blue-500 font-bold text-white text-[15px] block'>Found Items</a></li>
                    <li class=' py-2'><a href='javascript:void(0)' class='hover:text-blue-500 font-bold text-white text-[15px] block'>Report Lost Item </a></li>
                    <li class=' py-2'><a href='javascript:void(0)' class='hover:text-blue-500 font-bold text-white text-[15px] block'>Report Found Item </a></li>
                  </ul>
                </li>
                <li class='max-lg: max-lg:py-2'><a href='javascript:void(0)'
                    class='hover:text-blue-500 font-bold text-white text-[15px] block'>events</a></li>
                <li class='max-lg: max-lg:py-2'><a href='javascript:void(0)'
                    class='hover:text-blue-500 font-bold text-white text-[15px] block'>Journey Hub</a></li>
                <li class='max-lg: max-lg:py-2'><a href='javascript:void(0)'
                    class='hover:text-blue-500 font-bold text-white text-[15px] block'>Contact</a></li>
                <li class='max-lg: max-lg:py-2'><a href='javascript:void(0)'
                    class='hover:text-blue-500 font-bold text-white text-[15px] block'>Source</a></li>
              </ul>
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