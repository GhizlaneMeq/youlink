<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <body class="bg-gradient-to-br from-gray-900 to-black">
        <div class="text-gray-300 container mx-auto p-8 overflow-hidden md:rounded-lg md:p-10 lg:p-12">
            <nav class=" py-2.5 ">
                <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
                    <a href="#" class="flex items-center">
                        <img src="https://www.svgrepo.com/show/499962/music.svg" class="h-6 mr-3 sm:h-9" alt="Landwind Logo">
                        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Landwind</span>
                    </a>
                    <div class="flex items-center lg:order-2">
                        <div class="hidden mt-2 mr-4 sm:inline-block">
                            <span></span>
                        </div>
            
                        <a href="https://github.com/gary149/landing-gradients"
                    class="self-start px-3 py-2 leading-none text-gray-200 border border-gray-800 rounded-lg focus:outline-none focus:shadow-outline bg-gradient-to-b hover:from-indigo-500 from-gray-900 to-black">
                    Ghizlane Meqdar
                </a>
                        <button data-collapse-toggle="mobile-menu-2" type="button"
                            class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            aria-controls="mobile-menu-2" aria-expanded="true">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="items-center justify-between w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                        <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                            <li>
                                <a href="#"
                                    class="block py-2 pl-3 pr-4 text-white bg-purple-700 rounded lg:bg-transparent lg:text-purple-700 lg:p-0 dark:text-white"
                                    aria-current="page">Home</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-white dark:hover:text-white lg:dark:hover:bg-transparent dark:border-white">Company</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-white dark:hover:text-white lg:dark:hover:bg-transparent dark:border-white">Marketplace</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-white dark:hover:text-white lg:dark:hover:bg-transparent dark:border-white">Features</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-white dark:hover:text-white lg:dark:hover:bg-transparent dark:border-white">Team</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 pl-3 pr-4 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            
            <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
            
    
            <div class="h-32 md:h-40"></div>
    
            <p class="font-sans text-4xl font-bold text-gray-200 max-w-5xl lg:text-7xl lg:pr-24 md:text-6xl">
                Spend less time coding and more time creating
            </p>
            <div class="h-10"></div>
            <p class="max-w-2xl font-serif text-xl text-gray-400 md:text-2xl">
                Imagine being able to spent less time... This is a demonstration landing
                page made with tailwindcss
            </p>
    
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
            <div class="h-12"></div>
        </div>
    </body>
</body>
</html>