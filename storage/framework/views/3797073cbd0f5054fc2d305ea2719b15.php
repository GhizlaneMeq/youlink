

<?php $__env->startSection('content'); ?>
<div class="grid grid-cols-1 md:grid-cols-4 gap-4 py-6">
    <div class="bg-white shadow rounded-sm flex justify-between items-center py-3.5 px-3.5">
        <div class="space-y-2">
            <p class="text-xs text-gray-400 uppercase">Events</p>
            <div class="flex items-center space-x-2">
                <h1 class="text-xl font-semibold text-black"><?php echo e($eventCount); ?></h1>
            </div>
        </div>
        <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M14 3v4a1 1 0 0 0 1 1h4 M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5 M6 14m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0  M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5">
            </path>
        </svg>
    </div>

    <div class="bg-white shadow rounded-sm flex justify-between items-center py-3.5 px-3.5">
        <div class="space-y-2">
            <p class="text-xs text-gray-400 uppercase">Reservations</p>
            <div class="flex items-center space-x-2">
                <h1 class="text-xl font-semibold text-black"><?php echo e($reservationCount); ?></h1>
            </div>
        </div>
        <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
            </path>
        </svg>
    </div>
</div>

<div class="w-full overflow-x-hidden border-t flex flex-col">
    <main class="w-full flex-grow p-6">

        <div class="text-center">
            <a href="<?php echo e(route('bde.events.create')); ?>"
                class="inline-block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Add New event
            </a>
        </div>
        <div class="relative mt-10 overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">Title</th>
                        <th scope="col" class="px-6 py-3 text-center">created By</th>
                        <th scope="col" class="px-6 py-3 text-center">Date</th>
                        <th scope="col" class="px-6 py-3 text-center">Location</th>
                        <th scope="col" class="px-6 py-3 text-center">Category</th>
                        <th scope="col" class="px-6 py-3 text-center">Available Seats</th>
                        <th scope="col" class="px-6 py-3 text-center">Status</th>

                        <th scope="col" class="px-6 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="px-6 py-4 text-center"><?php echo e($event->title); ?></td>
                        <td class="px-6 py-4 text-center"><?php echo e($event->user->name); ?></td>
                        <td class="px-6 py-4 text-center"><?php echo e($event->date); ?></td>
                        <td class="px-6 py-4 text-center"><?php echo e($event->location); ?></td>
                        <td class="px-6 py-4 text-center"><?php echo e($event->event_category); ?></td>
                        <td class="px-6 py-4 text-center"><?php echo e($event->availableSeats); ?></td>
                        <td class="px-6 py-4 text-center">
                            <?php if($event->status == 'pending'): ?>
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                            <?php elseif($event->status == 'confirmed'): ?>
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Confirmed</span>
                            <?php elseif($event->status == 'cancelled'): ?>
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Cancelled</span>
                            <?php endif; ?>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <div class="flex gap-5 px-6 py-4 justify-center">
                                <form action="<?php echo e(route('bde.events.edit', $event->id)); ?>" method="GET">
                                    <?php echo csrf_field(); ?>
                                    <button>Edit</button>
                                </form>
                                <form action="<?php echo e(route('bde.events.destroy', $event->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button>Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </main>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.bdeDash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Youcode\OneDrive\Desktop\youlink\resources\views/Bde/events/index.blade.php ENDPATH**/ ?>