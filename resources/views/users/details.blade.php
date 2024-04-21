
@extends('layouts.book') 
@section('main')

<link
    href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"
    rel="stylesheet"
/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

<section class="w-full overflow-hidden bg-gray-900">
    
    <div class="flex flex-col">
        <div class="relative w-full">
            <video autoplay muted loop class="inset-0 w-full xl:h-[20rem] lg:h-[18rem] md:h-[16rem] sm:h-[14rem] xs:h-[11rem object-cover" >
                <source  src="{{ asset('videos/video.mp4') }}"  type="video/mp4"/>
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="sm:w-[80%] xs:w-[90%] mx-auto flex">
            <div class="relative">
                <img  src="{{ asset('storage/images/users/' . $user->avatar) }}" alt="User Profile" class="rounded-md lg:w-[12rem] lg:h-[12rem] md:w-[10rem] md:h-[10rem] sm:w-[8rem] sm:h-[8rem] xs:w-[7rem] xs:h-[7rem] outline outline-2 outline-blue-500 relative lg:bottom-[5rem] sm:bottom-[4rem] xs:bottom-[3rem]" />
            </div>
            <h1 class="w-full text-left my-4 sm:mx-4 xs:pl-4  text-white lg:text-4xl md:text-3xl sm:text-3xl xs:text-xl font-serif" >
                {{ $user->name }}
            </h1>
        </div>

        <div class="xl:w-[80%] lg:w-[90%] md:w-[90%] sm:w-[92%] xs:w-[90%] mx-auto flex flex-col gap-4 items-center relative lg:-top-8 md:-top-6 sm:-top-4 xs:-top-4" >
            <!-- Description -->
            <div class="flex items-center justify-between">
                <p class="w-fit text-gray-700 text-gray-400 text-md">
                    {{ $user->description }}
                </p>
            </div>

            <!-- Detail -->
            <div class="w-full my-auto py-6 flex flex-col justify-center gap-2">
                <div   class="w-full flex sm:flex-row xs:flex-col gap-2 justify-center"  >
                    <div class="w-full">
                        <dl class="text-gray-900 divide-y divide-gray-200 text-white divide-gray-700">
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg text-gray-400">
                                    Date Of Birth
                                </dt>
                                <dd class="text-lg font-semibold">
                                    {{ $user->date_of_birth }}
                                </dd>
                            </div>
                        
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg text-gray-400">
                                    Gender
                                </dt>
                                <dd class="text-lg font-semibold">
                                    {{ $user->gender }}
                                </dd>
                            </div>
                        
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg text-gray-400">
                                    Address
                                </dt>
                                <dd class="text-lg font-semibold">
                                    {{ $user->address }}
                                </dd>
                            </div>
                        
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg text-gray-400">
                                    Phone Number
                                </dt>
                                <dd class="text-lg font-semibold">
                                    {{ $user->phone }}
                                </dd>
                            </div>
                        
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg text-gray-400">
                                    Email
                                </dt>
                                <dd class="text-lg font-semibold">
                                    {{ $user->email }}
                                </dd>
                            </div>
                        </dl>
                    </div>
                    <div class="w-full">
                        <dl
                            class="text-gray-900 divide-y divide-gray-200 text-white divide-gray-700"
                        ></dl>
                    </div>
                </div>
            </div>

            <!-- Social Links -->
            <div
                class="fixed right-2 bottom-20 flex flex-col rounded-sm bg-gray-200 text-gray-500 bg-gray-200/80 text-gray-700 hover:text-gray-600 hover:text-gray-400"
            >
                <a href="{{ $user->linkedin }}">
                    <div class="p-2 hover:text-primary hover:text-primary">
                        <svg
                            class="lg:w-6 lg:h-6 xs:w-4 xs:h-4 text-blue-500"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z"
                                clip-rule="evenodd"
                            />
                            <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
                        </svg>
                    </div>
                    youtube
                </a>
                <a href="{{ $user->twitter }}">
                    <div class="p-2 hover:text-primary hover:text-primary">
                        <svg
                            class="lg:w-6 lg:h-6 xs:w-4 xs:h-4 text-gray-900"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95v-5.62l5.4 2.819-5.4 2.801Z"
                            />
                        </svg>
                    </div>
                    youtube
                </a>
                <a href="{{ $user->facebook }}">
                    <div
                        class="p-2 hover:text-blue-500 hover:text-blue-500"
                    >
                        <svg
                            class="lg:w-6 lg:h-6 xs:w-4 xs:h-4 text-blue-700"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                    youtube
                </a>
                <a href="{{ $user->youtube }}">
                    <div class="p-2 hover:text-primary hover:text-primary">
                        <svg
                            class="lg:w-6 lg:h-6 xs:w-4 xs:h-4 text-red-600"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                    youtube
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Photo by '@jessbaileydesigns' & '@von_co' on Unsplash -->

<script
    src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/alpine.min.js"
    defer
></script>

@endsection
