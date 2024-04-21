<?php if(auth()->guard()->guest()): ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>YouLink</title>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body>
        <div
            class="flex h-screen items-center justify-center bg-gray-900 bg-cover bg-no-repeat"
            style="background-image: url('<?php echo e(asset('images/youcode.jpg')); ?>')"
        >
            <div
                class="rounded-xl bg-gray-800 bg-opacity-50 px-8 py-6 shadow-lg backdrop-blur-md max-w-md w-full"
            >
                <div class="text-white text-center mb-8">
                    <img
                        src="<?php echo e(asset('images/logo.png')); ?>"
                        width="150"
                        alt="YouLink Logo"
                    />
                    <p class="text-gray-300">Enter Login Details</p>
                </div>
                <form action="<?php echo e(route('login')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mb-4">
                        <input
                            class="p-2 w-full bg-gray-200 placeholder-gray-900 rounded border focus:border-teal-500"
                            type="text"
                            name="email"
                            placeholder="Email"
                            required
                        />
                    </div>
                    <div class="mb-4">
                        <input
                            class="p-2 w-full bg-gray-200 placeholder-gray-900 rounded border focus:border-teal-500"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required
                        />
                    </div>
                    <div class="flex justify-center">
                        <button
                            type="submit"
                            class="bg-blue-500 hover:bg-blue-600 transition-colors duration-300 text-white px-10 py-2 rounded-lg shadow-xl"
                        >
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
<?php endif; ?> 
<?php if(auth()->guard()->check()): ?>
 
<?php $__env->startSection('main'); ?>
<div class="relative">
    <div
        aria-hidden="true"
        class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40 dark:opacity-20"
    >
        <div
            class="blur-[106px] h-64 bg-gradient-to-br from-indigo-600 to-indigo-600"
        ></div>
        <div
            class="blur-[106px] h-64 bg-gradient-to-br from-indigo-600 to-indigo-600"
        ></div>
    </div>
    <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
        <div class="relative pt-36 ml-auto">
            <div class="lg:w-3/4 xl:w-2/3 text-center mx-auto">
                <h1
                    class="text-white dark:text-gray-900 font-bold font-sans text-5xl md:text-6xl"
                >
                    Welcome to YouLink
                </h1>
                <p class="mt-8 text-white dark:text-gray-300">
                    Your all-in-one platform for enhancing the student
                    experience at YouCode.
                </p>

                <div
                    class="hidden py-8 mt-16 border-y border-gray-100 dark:border-gray-800 sm:flex justify-between"
                >
                    <div class="text-left">
                        <h6
                            class="text-lg font-semibold text-white dark:text-gray-300"
                        >
                            Ride-Sharing
                        </h6>
                    </div>
                    <div class="text-left">
                        <h6
                            class="text-lg font-semibold text-white dark:text-gray-300"
                        >
                            Lost & Found
                        </h6>
                    </div>
                    <div class="text-left">
                        <h6
                            class="text-lg font-semibold text-white dark:text-gray-300"
                        >
                            Book Exchange
                        </h6>
                    </div>
                    <div class="text-left">
                        <h6
                            class="text-lg font-semibold text-white dark:text-gray-300"
                        >
                            Events Platform
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<main class="relative min-h-screen flex flex-col justify-center overflow-hidden">
    <div class="w-full max-w-6xl mx-auto px-4 md:px-6 py-24">
        <!-- Cards container -->
        <div
            class="max-w-sm mx-auto grid gap-6 lg:grid-cols-4 items-start lg:max-w-none group"
            data-spotlight
        >
            <!-- Card 1 -->
            <div
                class="relative h-full bg-slate-800 rounded-3xl p-px before:absolute before:w-80 before:h-80 before:-left-40 before:-top-40 before:bg-slate-400 before:rounded-full before:opacity-0 before:pointer-events-none before:transition-opacity before:duration-500 before:translate-x-[var(--mouse-x)] before:translate-y-[var(--mouse-y)] before:group-hover:opacity-100 before:z-10 before:blur-[100px] after:absolute after:w-96 after:h-96 after:-left-48 after:-top-48 after:bg-indigo-500 after:rounded-full after:opacity-0 after:pointer-events-none after:transition-opacity after:duration-500 after:translate-x-[var(--mouse-x)] after:translate-y-[var(--mouse-y)] after:hover:opacity-10 after:z-30 after:blur-[100px] overflow-hidden"
            >
                <div
                    class="relative h-full bg-slate-900 p-6 pb-8 rounded-[inherit] z-20 overflow-hidden"
                >
                    <!-- Radial gradient -->
                    <div
                        class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/2 aspect-square"
                        aria-hidden="true"
                    >
                        <div
                            class="absolute inset-0 translate-z-0 bg-slate-800 rounded-full blur-[80px]"
                        ></div>
                    </div>
                    <div class="flex flex-col h-full items-center text-center">
                        <!-- Image -->
                        <div class="relative inline-flex">
                            <div
                                class="w-[40%] h-[40%] absolute inset-0 m-auto -translate-y-[10%] blur-3xl -z-10 rounded-full bg-indigo-600"
                                aria-hidden="true"
                            ></div>
                            <img
                                class="inline-flex"
                                src="./card-01.png"
                                width="200"
                                height="200"
                                alt="Card 01"
                            />
                        </div>
                        <!-- Text -->
                        <div class="grow mb-5">
                            <h2 class="text-xl text-slate-200 font-bold mb-1">
                                Amazing Integration
                            </h2>
                            <p class="text-sm text-slate-500">
                                Quickly apply filters to refine your issues
                                lists and create custom views.
                            </p>
                        </div>
                        <!-- Platform Info: Ride-Sharing -->

                        <a
                            class="inline-flex justify-center items-center whitespace-nowrap rounded-lg bg-slate-800 hover:bg-slate-900 border border-slate-700 px-3 py-1.5 text-sm font-medium text-slate-300 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 dark:focus-visible:ring-slate-600 transition-colors duration-150"
                            href="#0"
                        >
                            <svg
                                class="fill-slate-500 mr-2"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="14"
                            >
                                <path
                                    d="M12.82 8.116A.5.5 0 0 0 12 8.5V10h-.185a3 3 0 0 1-2.258-1.025l-.4-.457-1.328 1.519.223.255A5 5 0 0 0 11.815 12H12v1.5a.5.5 0 0 0 .82.384l3-2.5a.5.5 0 0 0 0-.768l-3-2.5ZM12.82.116A.5.5 0 0 0 12 .5V2h-.185a5 5 0 0 0-3.763 1.708L3.443 8.975A3 3 0 0 1 1.185 10H1a1 1 0 1 0 0 2h.185a5 5 0 0 0 3.763-1.708l4.609-5.267A3 3 0 0 1 11.815 4H12v1.5a.5.5 0 0 0 .82.384l3-2.5a.5.5 0 0 0 0-.768l-3-2.5ZM1 4h.185a3 3 0 0 1 2.258 1.025l.4.457 1.328-1.52-.223-.254A5 5 0 0 0 1.185 2H1a1 1 0 0 0 0 2Z"
                                />
                            </svg>
                            <span>Connect</span>
                        </a>
                    </div>
                </div>
            </div>

            <div
                class="relative h-full bg-slate-800 rounded-3xl p-px before:absolute before:w-80 before:h-80 before:-left-40 before:-top-40 before:bg-slate-400 before:rounded-full before:opacity-0 before:pointer-events-none before:transition-opacity before:duration-500 before:translate-x-[var(--mouse-x)] before:translate-y-[var(--mouse-y)] before:group-hover:opacity-100 before:z-10 before:blur-[100px] after:absolute after:w-96 after:h-96 after:-left-48 after:-top-48 after:bg-indigo-500 after:rounded-full after:opacity-0 after:pointer-events-none after:transition-opacity after:duration-500 after:translate-x-[var(--mouse-x)] after:translate-y-[var(--mouse-y)] after:hover:opacity-10 after:z-30 after:blur-[100px] overflow-hidden"
            >
                <div
                    class="relative h-full bg-slate-900 p-6 pb-8 rounded-[inherit] z-20 overflow-hidden"
                >
                    <!-- Radial gradient -->
                    <div
                        class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/2 aspect-square"
                        aria-hidden="true"
                    >
                        <div
                            class="absolute inset-0 translate-z-0 bg-slate-800 rounded-full blur-[80px]"
                        ></div>
                    </div>
                    <div class="flex flex-col h-full items-center text-center">
                        <!-- Image -->
                        <div class="relative inline-flex">
                            <div
                                class="w-[40%] h-[40%] absolute inset-0 m-auto -translate-y-[10%] blur-3xl -z-10 rounded-full bg-indigo-600"
                                aria-hidden="true"
                            ></div>
                            <img
                                class="inline-flex"
                                src="./card-02.png"
                                width="200"
                                height="200"
                                alt="Card 02"
                            />
                        </div>
                        <!-- Text -->
                        <div class="grow mb-5">
                            <h2 class="text-xl text-slate-200 font-bold mb-1">
                                Lost & Found Services
                            </h2>
                            <p class="text-sm text-slate-500">
                                Quickly report lost items and help others find
                                their belongings.
                            </p>
                        </div>
                        <!-- Platform Info: Lost & Found -->

                        <a
                            class="inline-flex justify-center items-center whitespace-nowrap rounded-lg bg-slate-800 hover:bg-slate-900 border border-slate-700 px-3 py-1.5 text-sm font-medium text-slate-300 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 dark:focus-visible:ring-slate-600 transition-colors duration-150"
                            href="#0"
                        >
                            <svg
                                class="fill-slate-500 mr-2"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="14"
                            >
                                <path
                                    d="M12.82 8.116A.5.5 0 0 0 12 8.5V10h-.185a3 3 0 0 1-2.258-1.025l-.4-.457-1.328 1.519.223.255A5 5 0 0 0 11.815 12H12v1.5a.5.5 0 0 0 .82.384l3-2.5a.5.5 0 0 0 0-.768l-3-2.5ZM12.82.116A.5.5 0 0 0 12 .5V2h-.185a5 5 0 0 0-3.763 1.708L3.443 8.975A3 3 0 0 1 1.185 10H1a1 1 0 1 0 0 2h.185a5 5 0 0 0 3.763-1.708l4.609-5.267A3 3 0 0 1 11.815 4H12v1.5a.5.5 0 0 0 .82.384l3-2.5a.5.5 0 0 0 0-.768l-3-2.5ZM1 4h.185a3 3 0 0 1 2.258 1.025l.4.457 1.328-1.52-.223-.254A5 5 0 0 0 1.185 2H1a1 1 0 0 0 0 2Z"
                                />
                            </svg>
                            <span>Connect</span>
                        </a>
                    </div>
                </div>
            </div>

            <div
                class="relative h-full bg-slate-800 rounded-3xl p-px before:absolute before:w-80 before:h-80 before:-left-40 before:-top-40 before:bg-slate-400 before:rounded-full before:opacity-0 before:pointer-events-none before:transition-opacity before:duration-500 before:translate-x-[var(--mouse-x)] before:translate-y-[var(--mouse-y)] before:group-hover:opacity-100 before:z-10 before:blur-[100px] after:absolute after:w-96 after:h-96 after:-left-48 after:-top-48 after:bg-indigo-500 after:rounded-full after:opacity-0 after:pointer-events-none after:transition-opacity after:duration-500 after:translate-x-[var(--mouse-x)] after:translate-y-[var(--mouse-y)] after:hover:opacity-10 after:z-30 after:blur-[100px] overflow-hidden"
            >
                <div
                    class="relative h-full bg-slate-900 p-6 pb-8 rounded-[inherit] z-20 overflow-hidden"
                >
                    <!-- Radial gradient -->
                    <div
                        class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/2 aspect-square"
                        aria-hidden="true"
                    >
                        <div
                            class="absolute inset-0 translate-z-0 bg-slate-800 rounded-full blur-[80px]"
                        ></div>
                    </div>
                    <div class="flex flex-col h-full items-center text-center">
                        <!-- Image -->
                        <div class="relative inline-flex">
                            <div
                                class="w-[40%] h-[40%] absolute inset-0 m-auto -translate-y-[10%] blur-3xl -z-10 rounded-full bg-indigo-600"
                                aria-hidden="true"
                            ></div>
                            <img
                                class="inline-flex"
                                src="./card-03.png"
                                width="200"
                                height="200"
                                alt="Card 03"
                            />
                        </div>
                        <!-- Text -->
                        <div class="grow mb-5">
                            <h2 class="text-xl text-slate-200 font-bold mb-1">
                                Book Exchange
                            </h2>
                            <p class="text-sm text-slate-500">
                                Trade books with fellow students and expand your
                                reading list.
                            </p>
                        </div>
                        <!-- Platform Info: Book Exchange -->

                        <a
                            class="inline-flex justify-center items-center whitespace-nowrap rounded-lg bg-slate-800 hover:bg-slate-900 border border-slate-700 px-3 py-1.5 text-sm font-medium text-slate-300 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 dark:focus-visible:ring-slate-600 transition-colors duration-150"
                            href="#0"
                        >
                            <svg
                                class="fill-slate-500 mr-2"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="14"
                            >
                                <path
                                    d="M12.82 8.116A.5.5 0 0 0 12 8.5V10h-.185a3 3 0 0 1-2.258-1.025l-.4-.457-1.328 1.519.223.255A5 5 0 0 0 11.815 12H12v1.5a.5.5 0 0 0 .82.384l3-2.5a.5.5 0 0 0 0-.768l-3-2.5ZM12.82.116A.5.5 0 0 0 12 .5V2h-.185a5 5 0 0 0-3.763 1.708L3.443 8.975A3 3 0 0 1 1.185 10H1a1 1 0 1 0 0 2h.185a5 5 0 0 0 3.763-1.708l4.609-5.267A3 3 0 0 1 11.815 4H12v1.5a.5.5 0 0 0 .82.384l3-2.5a.5.5 0 0 0 0-.768l-3-2.5ZM1 4h.185a3 3 0 0 1 2.258 1.025l.4.457 1.328-1.52-.223-.254A5 5 0 0 0 1.185 2H1a1 1 0 0 0 0 2Z"
                                />
                            </svg>
                            <span>Connect</span>
                        </a>
                    </div>
                </div>
            </div>

            <div
                class="relative h-full bg-slate-800 rounded-3xl p-px before:absolute before:w-80 before:h-80 before:-left-40 before:-top-40 before:bg-slate-400 before:rounded-full before:opacity-0 before:pointer-events-none before:transition-opacity before:duration-500 before:translate-x-[var(--mouse-x)] before:translate-y-[var(--mouse-y)] before:group-hover:opacity-100 before:z-10 before:blur-[100px] after:absolute after:w-96 after:h-96 after:-left-48 after:-top-48 after:bg-indigo-500 after:rounded-full after:opacity-0 after:pointer-events-none after:transition-opacity after:duration-500 after:translate-x-[var(--mouse-x)] after:translate-y-[var(--mouse-y)] after:hover:opacity-10 after:z-30 after:blur-[100px] overflow-hidden"
            >
                <div
                    class="relative h-full bg-slate-900 p-6 pb-8 rounded-[inherit] z-20 overflow-hidden"
                >
                    <!-- Radial gradient -->
                    <div
                        class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/2 aspect-square"
                        aria-hidden="true"
                    >
                        <div
                            class="absolute inset-0 translate-z-0 bg-slate-800 rounded-full blur-[80px]"
                        ></div>
                    </div>
                    <div class="flex flex-col h-full items-center text-center">
                        <!-- Image -->
                        <div class="relative inline-flex">
                            <div
                                class="w-[40%] h-[40%] absolute inset-0 m-auto -translate-y-[10%] blur-3xl -z-10 rounded-full bg-indigo-600"
                                aria-hidden="true"
                            ></div>
                            <img
                                class="inline-flex"
                                src="./card-04.png"
                                width="200"
                                height="200"
                                alt="Card 04"
                            />
                        </div>
                        <!-- Text -->
                        <div class="grow mb-5">
                            <h2 class="text-xl text-slate-200 font-bold mb-1">
                                Events Platform
                            </h2>
                            <p class="text-sm text-slate-500">
                                Discover and participate in various events
                                organized for YouCode students.
                            </p>
                        </div>
                        <!-- Platform Info: Events Platform -->

                        <a
                            class="inline-flex justify-center items-center whitespace-nowrap rounded-lg bg-slate-800 hover:bg-slate-900 border border-slate-700 px-3 py-1.5 text-sm font-medium text-slate-300 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 dark:focus-visible:ring-slate-600 transition-colors duration-150"
                            href="#0"
                        >
                            <svg
                                class="fill-slate-500 mr-2"
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="14"
                            >
                                <path
                                    d="M12.82 8.116A.5.5 0 0 0 12 8.5V10h-.185a3 3 0 0 1-2.258-1.025l-.4-.457-1.328 1.519.223.255A5 5 0 0 0 11.815 12H12v1.5a.5.5 0 0 0 .82.384l3-2.5a.5.5 0 0 0 0-.768l-3-2.5ZM12.82.116A.5.5 0 0 0 12 .5V2h-.185a5 5 0 0 0-3.763 1.708L3.443 8.975A3 3 0 0 1 1.185 10H1a1 1 0 1 0 0 2h.185a5 5 0 0 0 3.763-1.708l4.609-5.267A3 3 0 0 1 11.815 4H12v1.5a.5.5 0 0 0 .82.384l3-2.5a.5.5 0 0 0 0-.768l-3-2.5ZM1 4h.185a3 3 0 0 1 2.258 1.025l.4.457 1.328-1.52-.223-.254A5 5 0 0 0 1.185 2H1a1 1 0 0 0 0 2Z"
                                />
                            </svg>
                            <span>Connect</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<main class="relative min-h-screen flex flex-col justify-center overflow-hidden supports-[overflow:clip]:overflow-clip" >
    <div class="w-full max-w-6xl mx-auto px-4 md:px-6 py-24">
        <!-- Cards Waterfall -->
        <div class="max-w-5xl mx-auto">
            <div class="relative z-0 space-y-14" x-data="{ entered: '0' }">
                <!-- Section #1 -->
                <section
                    x-intersect.margin.-70%.0.-30%.0="entered = '0'"
                    class="[--i:0]"
                    :style="`--e:${entered}`"
                >
                    <div
                        class="relative bg-gradient-to-br from-gray-900 to-black rounded-2xl border border-indigo-600 overflow-hidden transition-transform duration-700 ease-in-out z-[2]"
                        :class="entered >= 0 ? 'translate-y-0' : '-translate-y-[calc(100%*(var(--i)-var(--e)))]'"
                    >
                        <div class="md:flex justify-between items-center">
                            <div
                                class="shrink-0 px-12 py-14 max-md:pb-0 md:pr-0"
                            >
                                <div class="md:max-w-md">
                                    <div
                                        class="font-nycd text-xl text-indigo-500 mb-2 relative inline-flex justify-center items-end"
                                    >
                                        Interesting
                                        <svg
                                            class="absolute fill-indigo-500 opacity-40 -z-10"
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="88"
                                            height="4"
                                            viewBox="0 0 88 4"
                                            aria-hidden="true"
                                            preserveAspectRatio="none"
                                        >
                                            <path
                                                d="M87.343 2.344S60.996 3.662 44.027 3.937C27.057 4.177.686 3.655.686 3.655c-.913-.032-.907-1.923-.028-1.999 0 0 26.346-1.32 43.315-1.593 16.97-.24 43.342.282 43.342.282.904.184.913 1.86.028 1.999"
                                            />
                                        </svg>
                                    </div>
                                    <h1
                                        class="text-4xl font-extrabold text-slate-50 mb-4"
                                    >
                                        The modern way to find high-quality devs
                                    </h1>
                                    <p class="text-slate-400 mb-6">
                                        We're the world's largest marketplace of
                                        quality developers for early-stage
                                        startups. Need a hand with development?
                                        Grab one of ours!
                                    </p>
                                    <a
                                        class="text-sm font-medium inline-flex items-center justify-center px-3 py-1.5 border border-slate-700 rounded-lg tracking-normal transition text-slate-300 hover:text-slate-50 group"
                                        href="#0"
                                    >
                                        Learn More
                                        <span
                                            class="text-slate-600 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1"
                                            >-&gt;</span
                                        >
                                    </a>
                                </div>
                            </div>
                            <img
                                class="mx-auto max-md:-translate-x-[5%]"
                                src="./illustration-01.png"
                                width="519"
                                height="490"
                                alt="Illustration 01"
                            />
                        </div>
                        <div
                            class="absolute left-12 bottom-0 h-14 flex items-center text-xs font-medium text-slate-400"
                        >
                            01
                        </div>
                    </div>
                </section>
                <!-- Section #2 -->
                <section
                    x-intersect.margin.-70%.0.-30%.0="entered = '1'"
                    class="[--i:1]"
                    :style="`--e:${entered}`"
                >
                    <div
                        class="relative bg-gradient-to-br from-gray-900 to-black rounded-2xl border border-slate-700 overflow-hidden transition-transform duration-700 ease-in-out z-[1]"
                        :class="entered >= 1 ? 'translate-y-0' : '-translate-y-[calc(100%*(var(--i)-var(--e)))]'"
                    >
                        <div class="md:flex justify-between items-center">
                            <div
                                class="shrink-0 px-12 py-14 max-md:pb-0 md:pr-0"
                            >
                                <div class="md:max-w-md">
                                    <div
                                        class="font-nycd text-xl text-sky-500 mb-2 relative inline-flex justify-center items-end"
                                    >
                                        Engaging
                                        <svg
                                            class="absolute fill-sky-500 opacity-40 -z-10"
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="88"
                                            height="4"
                                            viewBox="0 0 88 4"
                                            aria-hidden="true"
                                            preserveAspectRatio="none"
                                        >
                                            <path
                                                d="M87.343 2.344S60.996 3.662 44.027 3.937C27.057 4.177.686 3.655.686 3.655c-.913-.032-.907-1.923-.028-1.999 0 0 26.346-1.32 43.315-1.593 16.97-.24 43.342.282 43.342.282.904.184.913 1.86.028 1.999"
                                            />
                                        </svg>
                                    </div>
                                    <h1
                                        class="text-4xl font-extrabold text-slate-50 mb-4"
                                    >
                                        The modern way to find high-quality devs
                                    </h1>
                                    <p class="text-slate-400 mb-6">
                                        We're the world's largest marketplace of
                                        quality developers for early-stage
                                        startups. Need a hand with development?
                                        Grab one of ours!
                                    </p>
                                    <a
                                        class="text-sm font-medium inline-flex items-center justify-center px-3 py-1.5 border border-slate-700 rounded-lg tracking-normal transition text-slate-300 hover:text-slate-50 group"
                                        href="#0"
                                    >
                                        Learn More
                                        <span
                                            class="text-slate-600 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1"
                                            >-&gt;</span
                                        >
                                    </a>
                                </div>
                            </div>
                            <img
                                class="mx-auto max-md:-translate-x-[5%]"
                                src="./illustration-02.png"
                                width="519"
                                height="490"
                                alt="Illustration 02"
                            />
                        </div>
                        <div
                            class="absolute left-12 bottom-0 h-14 flex items-center text-xs font-medium text-slate-400"
                        >
                            02
                        </div>
                    </div>
                </section>
                <!-- Section #3 -->
                <section
                    x-intersect.margin.-70%.0.-30%.0="entered = '2'"
                    class="[--i:2]"
                    :style="`--e:${entered}`"
                >
                    <div
                        class="relative bg-gradient-to-br from-gray-900 to-black rounded-2xl border border-slate-700 overflow-hidden transition-transform duration-700 ease-in-out z-0"
                        :class="entered >= 2 ? 'translate-y-0' : '-translate-y-[calc(100%*(var(--i)-var(--e)))]'"
                    >
                        <div class="md:flex justify-between items-center">
                            <div
                                class="shrink-0 px-12 py-14 max-md:pb-0 md:pr-0"
                            >
                                <div class="md:max-w-md">
                                    <div
                                        class="font-nycd text-xl text-teal-500 mb-2 relative inline-flex justify-center items-end"
                                    >
                                        Appealing
                                        <svg
                                            class="absolute fill-teal-500 opacity-40 -z-10"
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="88"
                                            height="4"
                                            viewBox="0 0 88 4"
                                            aria-hidden="true"
                                            preserveAspectRatio="none"
                                        >
                                            <path
                                                d="M87.343 2.344S60.996 3.662 44.027 3.937C27.057 4.177.686 3.655.686 3.655c-.913-.032-.907-1.923-.028-1.999 0 0 26.346-1.32 43.315-1.593 16.97-.24 43.342.282 43.342.282.904.184.913 1.86.028 1.999"
                                            />
                                        </svg>
                                    </div>
                                    <h1
                                        class="text-4xl font-extrabold text-slate-50 mb-4"
                                    >
                                        The modern way to find high-quality devs
                                    </h1>
                                    <p class="text-slate-400 mb-6">
                                        We're the world's largest marketplace of
                                        quality developers for early-stage
                                        startups. Need a hand with development?
                                        Grab one of ours!
                                    </p>
                                    <a
                                        class="text-sm font-medium inline-flex items-center justify-center px-3 py-1.5 border border-slate-700 rounded-lg tracking-normal transition text-slate-300 hover:text-slate-50 group"
                                        href="#0"
                                    >
                                        Learn More
                                        <span
                                            class="text-slate-600 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1"
                                            >-&gt;</span
                                        >
                                    </a>
                                </div>
                            </div>
                            <img
                                class="mx-auto max-md:-translate-x-[5%]"
                                src="./illustration-03.png"
                                width="519"
                                height="490"
                                alt="Illustration 03"
                            />
                        </div>
                        <div
                            class="absolute left-12 bottom-0 h-14 flex items-center text-xs font-medium text-slate-400"
                        >
                            03
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>

<style>
    @-webkit-keyframes scroll {
        0% {
            -webkit-transform: translateX(0);
            transform: translateX(0);
        }
        100% {
            -webkit-transform: translateX(calc(-400px * 14)); /* Adjusted for larger images */
            transform: translateX(calc(-400px * 14)); /* Adjusted for larger images */
        }
    }

    @keyframes scroll {
        0% {
            -webkit-transform: translateX(0);
            transform: translateX(0);
        }
        100% {
            -webkit-transform: translateX(calc(-400px * 14)); /* Adjusted for larger images */
            transform: translateX(calc(-400px * 14)); /* Adjusted for larger images */
        }
    }
    .slider {
        background: pr;
        box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125);
        height: 400px; /* Increased height */
        margin: auto;
        overflow: hidden;
        position: relative;
        width: 100vw; /* Take full width of the screen */
    }
    .slider::before,
    .slider::after {
        /*   background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%); */
        content: "";
        height: 400px; /* Increased height */
        position: absolute;
        width: 200px;
        z-index: 2;
    }
    .slider::after {
        right: 0;
        top: 0;
        -webkit-transform: rotateZ(180deg);
        transform: rotateZ(180deg);
    }
    .slider::before {
        left: 0;
        top: 0;
    }
    .slider .slide-track {
        -webkit-animation: scroll 40s linear infinite;
        animation: scroll 40s linear infinite;
        display: flex;
        width: calc(400px * 14); /* Adjusted for larger images */
    }
    .slider .slide {
        height: 400px; /* Increased height */
        width: 400px; /* Adjusted for larger images */
    }
</style>

<main class="main">
    <div class="slider">
        <div class="slide-track">
            <div class="slide">
                <img src="<?php echo e(asset('images/test.jpg')); ?>" height="400" width="400" />
            </div>
            <div class="slide">
                <img src="<?php echo e(asset('images/test2.jpg')); ?>" height="400" width="400" />
            </div>
            <div class="slide">
                <img src="<?php echo e(asset('images/test3.jpg')); ?>" height="400" width="400" />
            </div>
            <div class="slide">
                <img src="<?php echo e(asset('images/test4.jpg')); ?>" height="400" width="400" />
            </div>
            <div class="slide">
                <img src="<?php echo e(asset('images/test5.jpg')); ?>" height="400" width="400" />
            </div>
            <div class="slide">
                <img src="<?php echo e(asset('images/test6.jpg')); ?>" height="400" width="400" />
            </div>
            <div class="slide">
                <img src="<?php echo e(asset('images/test7.jpg')); ?>" height="400" width="400" alt="" />
            </div>
            <div class="slide">
                <img src="<?php echo e(asset('images/test8.jpg')); ?>" height="400" width="400" />
            </div>
            <div class="slide">
                <img src="<?php echo e(asset('images/test9.jpg')); ?>" height="400" width="400" />
            </div>
            <div class="slide">
                <img src="<?php echo e(asset('images/test10.jpg')); ?>" height="400" width="400" />
            </div>
            <div class="slide">
                <img src="<?php echo e(asset('images/test11.jpg')); ?>" height="400" width="400" />
            </div>
            <div class="slide">
                <img src="<?php echo e(asset('images/test12.jpg')); ?>" height="400" width="400" />
            </div>
            <div class="slide">
                <img src="<?php echo e(asset('images/test13.jpg')); ?>" height="400" width="400" alt="" />
            </div>
            <div class="slide">
                <img src="<?php echo e(asset('images/test14.jpg')); ?>" height="400" width="400" />
            </div>
        </div>
    </div>
</main> 



<?php $__env->stopSection(); ?>
<?php endif; ?>
<?php echo $__env->make('layouts.book', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Youcode\OneDrive\Desktop\youlink\resources\views/welcome.blade.php ENDPATH**/ ?>