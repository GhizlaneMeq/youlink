{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

     @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-gray-900 to-black">
    <div class="text-gray-300 container mx-auto p-8 overflow-hidden md:rounded-lg md:p-10 lg:p-12">
        <div class="flex justify-between">
            <h1 class="font-serif text-3xl font-medium">Landing</h1>
            <a href="https://github.com/gary149/landing-gradients"
                class="self-start px-3 py-2 leading-none text-gray-200 border border-gray-800 rounded-lg focus:outline-none focus:shadow-outline bg-gradient-to-b hover:from-indigo-500 from-gray-900 to-black">
                YouLink
            </a>
        </div>
        <section class="sm:mt-6 lg:mt-8 mt-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="my-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28 flex gap-3 lg:justify-between lg:flex lg:flex-row">
                <div class="sm:text-center lg:text-left">
                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-800 sm:text-5xl md:text-6xl">
                        <span class="block xl:inline">Data to enrich your</span>
                        <span class="block text-indigo-600 xl:inline">online business</span>
                    </h1>
                    <p
                        class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                        Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet
                        fugiat veniam occaecat fugiat aliqua.
                    </p>
                    
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow">
                            <button id="showModalButton" type="button" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 hover:bg-gray-600 md:py-4 md:text-lg md:px-10">
                                I lost
                            </button>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                            <button type="button" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-gray-800 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10" data-bs-toggle="modal" data-bs-target="#addFoundItemModal">
                                Add Found Item
                              </button>
                        </div>
                    </div>
                </div>
        
                <!-- Image Section -->
                <div class="lg:inset-y-0 lg:right-0 lg:w-1/2 my-4">
                    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{asset('images/lost.png')}}" alt="">
                </div>
                <!-- End of Image Section -->
            </div>
            <form class="flex flex-col md:flex-row gap-3">
                <div class="flex">
                    <input type="text" placeholder="Search for the tool you like"
                        class="w-full md:w-80 px-3 h-10 rounded-l border-2 border-sky-500 focus:outline-none focus:border-sky-500"
                        >
                    <button type="submit" class="bg-sky-500 text-white rounded-r px-2 md:px-3 py-0 md:py-1">Search</button>
                </div>
                <select id="pricingType" name="pricingType"
                    class="w-full h-10 border-2 border-sky-500 focus:outline-none focus:border-sky-500 text-sky-500 rounded px-2 md:px-3 py-0 md:py-1 tracking-wider">
                    <option value="All" selected="">All</option>
                    <option value="Freemium">Freemium</option>
                    <option value="Free">Free</option>
                    <option value="Paid">Paid</option>
                </select>
            </form>
        </section>

        <div class="h-32 md:h-40"></div>

        <div class="grid gap-8 md:grid-cols-2">
            <div class="flex flex-col justify-center">
                <p
                    class="self-start inline font-sans text-xl font-medium text-transparent bg-clip-text bg-gradient-to-br from-green-400 to-green-600">
                    Simple and easy
                </p>
                <h2 class="text-4xl font-bold">Made for devs and designers</h2>
                <div class="h-6"></div>
                <p class="font-serif text-xl text-gray-400 md:pr-10">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam
                    autem, a recusandae vero praesentium qui impedit doloremque
                    molestias necessitatibus.
                </p>
                <div class="h-8"></div>
                <div class="grid grid-cols-2 gap-4 pt-8 border-t border-gray-800">
                    <div>
                        <p class="font-semibold text-gray-400">Made with love</p>
                        <div class="h-4"></div>
                        <p class="font-serif text-gray-400">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Delectus labor.
                        </p>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-400">It's easy to build</p>
                        <div class="h-4"></div>
                        <p class="font-serif text-gray-400">
                            Ipsum dolor sit, amet consectetur adipisicing elit. Delectus
                            amet consectetur.
                        </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="-mr-24 rounded-lg md:rounded-l-full bg-gradient-to-br from-gray-900 to-black h-96"></div>
            </div>
        </div>

        <div class="h-32 md:h-40"></div>

        <p class="font-serif text-4xl">
            <span class="text-gray-400">If we work all together</span>

            <span class="text-gray-600"
          >consectetur adipisicing elit. Consectetur atque molestiae omnis
          excepturi enim!</span>
        </p>

        <div class="h-32 md:h-40"></div>

        <div class="grid gap-4 md:grid-cols-3">
            <div class="flex-col p-8 py-16 rounded-lg shadow-2xl md:p-12 bg-gradient-to-br from-gray-900 to-black">
                <p
                    class="flex items-center justify-center text-4xl font-semibold text-green-400 bg-green-800 rounded-full shadow-lg w-14 h-14">
                    1
                </p>
                <div class="h-6"></div>
                <p class="font-serif text-3xl">We build products with UX in mind</p>
            </div>
            <div class="flex-col p-8 py-16 rounded-lg shadow-2xl md:p-12 bg-gradient-to-b from-gray-900 to-black">
                <p
                    class="flex items-center justify-center text-4xl font-semibold text-indigo-400 bg-indigo-800 rounded-full shadow-lg w-14 h-14">
                    2
                </p>
                <div class="h-6"></div>
                <p class="font-serif text-3xl">
                    You can trust us to deliver super fast
                </p>
            </div>
            <div class="flex-col p-8 py-16 rounded-lg shadow-2xl md:p-12 bg-gradient-to-bl from-gray-900 to-black">
                <p
                    class="flex items-center justify-center text-4xl font-semibold text-teal-400 bg-teal-800 rounded-full shadow-lg w-14 h-14">
                    3
                </p>
                <div class="h-6"></div>
                <p class="font-serif text-3xl">We made it simple and easy to do</p>
            </div>
        </div>

        <div class="h-40"></div>

        <div class="grid gap-8 md:grid-cols-3">
            <div class="flex flex-col justify-center md:col-span-2">
                <p
                    class="self-start inline font-sans text-xl font-medium text-transparent bg-clip-text bg-gradient-to-br from-teal-400 to-teal-600">
                    We are humans
                </p>
                <h2 class="text-4xl font-bold">We could work together</h2>
                <div class="h-6"></div>
                <p class="font-serif text-xl text-gray-400 md:pr-10">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam
                    autem, a recusandae vero praesentium qui impedit doloremque
                    molestias.
                </p>
                <div class="h-8"></div>
                <div class="grid gap-6 pt-8 border-t border-gray-800 lg:grid-cols-3">
                    <div>
                        <p class="font-semibold text-gray-400">Made with love</p>
                        <div class="h-4"></div>
                        <p class="font-serif text-gray-400">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Delectus labor.
                        </p>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-400">It's easy to build</p>
                        <div class="h-4"></div>
                        <p class="font-serif text-gray-400">
                            Ipsum dolor sit, amet consectetur adipisicing elit. Delectus
                            amet consectetur.
                        </p>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-400">It's easy to build</p>
                        <div class="h-4"></div>
                        <p class="font-serif text-gray-400">
                            Ipsum dolor sit, amet consectetur adipisicing elit. Delectus
                            amet consectetur.
                        </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="-mr-24 rounded-lg md:rounded-l-full bg-gradient-to-br from-gray-900 to-black h-96"></div>
            </div>
        </div>

        <div class="h-10 md:h-40"></div>

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
                    <a href="#" class="hover:underline">Singapore</a>
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
        <div class="h-12"></div>
    </div>

    <div id="addLostItemModal" class="fixed z-50 inset-0 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                <div class="hidden sm:block absolute top-0 right-0 pt-4 pr-4">
                    <button type="button" data-behavior="cancel" class="bg-white rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <span class="sr-only">Close</span>
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-blue-100 sm:mx-0 sm:h-10 sm:w-10">
                        <svg class="h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                            Add Lost Item
                        </h3>
                        <form id="lostItemForm" action="{{ route('storeLostItem') }}" method="POST">
                            @csrf
                            <div class="mt-2">
                                <input type="text" name="title" placeholder="Item Name" class="border rounded-md px-3 py-2 mt-2 w-full">
                                @error('title')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                                <textarea name="description" placeholder="Item Description" class="border rounded-md px-3 py-2 mt-2 w-full"></textarea>
                                @error('description')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                                <input type="text" name="location" placeholder="Location" class="border rounded-md px-3 py-2 mt-2 w-full">
                                @error('location')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                                <input type="date" name="dateLost" placeholder="Date Lost" class="border rounded-md px-3 py-2 mt-2 w-full">
                                @error('dateLost')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                    <button type="submit" form="lostItemForm" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Add Item
                    </button>
                    <button type="button" data-behavior="cancel" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>


    
      <div class="modal fade" id="addFoundItemModal" tabindex="-1" aria-labelledby="addFoundItemModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addFoundItemModalLabel">Add Found Item</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- Found Item Form -->
              <form action="{{ route('found-items.store') }}" method="POST">
                @csrf
                <!-- Add your form fields for adding a found item here -->
                <!-- For example: -->
                <div class="mb-3">
                  <label for="foundItemTitle" class="form-label">Title</label>
                  <input type="text" class="form-control" id="foundItemTitle" name="title">
                </div>
                <!-- Add more fields as needed -->
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var showModalButton = document.getElementById('showModalButton');
            var modal = document.getElementById('addLostItemModal');
            var closeButton = modal.querySelector('[data-behavior="cancel"]');
            var overlay = modal.querySelector('.fixed');
    
            function closeModal() {
                modal.classList.add('hidden');
            }
    
            showModalButton.addEventListener('click', function () {
                modal.classList.remove('hidden');
            });
    
            closeButton.addEventListener('click', closeModal);
    
            overlay.addEventListener('click', function(event) {
                if (event.target === overlay) {
                    closeModal();
                }
            });
        });
    </script>
    
</body>
</html>
 --}}


 @extends('layouts.book')

 @section('main')
 <div class="relative flex w-80 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
    <div class="relative mx-4 -mt-6 h-40 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-gradient-to-r from-blue-500 to-blue-600">
    </div>
    <div class="p-6">
      <h5 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
       Tailwind card
      </h5>
      <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc felis ligula. 
      </p>
    </div>
    <div class="p-6 pt-0">
      <button data-ripple-light="true" type="button" class="select-none rounded-lg bg-blue-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
        Read More
      </button>
    </div>
  </div>     
 @endsection