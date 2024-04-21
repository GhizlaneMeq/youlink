

<?php $__env->startSection('main'); ?>


<div class="grid grid-cols-2 pt-32 pl-10">
    <a href="#"
        class="flex flex-col items-center md:flex-row md:max-w-xl">
        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
            src="<?php echo e(asset('storage/images/books/' . $book->image)); ?>" alt="">
        <div class="flex flex-col justify-between gap-4 p-4 leading-normal text-gray-200">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-yellow-400">Title :
                <?php echo e($book->title); ?></h5>
            <div class="flex gap-4">
                <span class="text-xl font-bold">Author: </span>
                <span class="text-xl"><?php echo e($book->author); ?></span>
            </div>
            
            <div class="flex gap-4">
                <span class="text-xl font-bold">Description: </span>
                <span class="text-xl"><?php echo e($book->description); ?></span>
            </div>
        </div>
    </a>

    <div
        class="max-w-sm p-6 border border-gray-200 rounded-lg shadow  border-gray-700">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-white">Book Reservations
                Available Now!</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 text-gray-400">Reserve your favorite books today and embark on
            an exciting journey filled with captivating stories and knowledge.</p>
        <!-- Modal toggle -->
        <div class="flex gap-5">
            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800"
                type="button">
                Reserve
            </button>
            <button type="button"
                class="block text-white bg-yellow-400 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                <a href="">Cancel</a></button>
        </div>
        <span class="text-rose-600"></span>
    </div>

    <!-- Main modal -->
    <div id="crud-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow bg-gray-700">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 text-white">
                        Make New Reservation</h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center hover:bg-gray-600 hover:text-white"
                        data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <input type="hidden" name="user_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white focus:ring-primary-500 focus:border-primary-500"
                                value="">
                        </div>
                        <div class="col-span-2">
                            <input type="hidden" name="book_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white focus:ring-primary-500 focus:border-primary-500"
                                value="<?php echo e($book->id); ?>">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="reservation_date"
                                class="block mb-2 text-sm font-medium text-gray-900 text-white">Reservation
                                date</label>
                            <input type="date" name="reservation_date" id="reservation_date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white focus:ring-primary-500 focus:border-primary-500"
                                required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="return_date"
                                class="block mb-2 text-sm font-medium text-gray-900 text-white">Return
                                date</label>
                            <input type="date" name="return_date" id="return_date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white focus:ring-primary-500 focus:border-primary-500"
                                required="">
                        </div>
                    </div>
                    <button type="submit" name="reserve"
                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    exchange
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.book', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Youcode\OneDrive\Desktop\youlink\resources\views/bookSwap/details.blade.php ENDPATH**/ ?>