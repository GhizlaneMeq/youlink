

<?php $__env->startSection('content'); ?>
    <div class="text-center">
        <a href="<?php echo e(route('events.create')); ?>" class="inline-block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Add New event
        </a>
    </div>
<div class="relative mt-10 overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-center">
                    #
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Image
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    title
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    start date
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    end date
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                   price
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                   Location
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                   Event Category
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                   Available seats
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                   status
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                   automatic acceptance
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                   published status
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    action
                </th>
            </tr>
        </thead>
        <tbody>
           <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row" class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   <?php echo e($event->id); ?>

                </th>
                <th scope="row" class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <img class="w-15 h-15 " src="<?php echo e($event->getFirstMediaUrl('images')); ?>" alt="event photo">
                </th>
                <td class="px-6 py-4 text-center">
                <?php echo e($event->title); ?>

                </td>
                <td class="px-6 py-4 text-center">
                <?php echo e($event->start_date); ?>

                </td>
                <td class="px-6 py-4 text-center">
                <?php echo e($event->end_date); ?>

                </td>
                <td class="px-6 py-4 text-center">
                <?php echo e($event->price); ?>$
                </td>
                <td class="px-6 py-4 text-center">
                   <?php echo e($event->location); ?>


                </td>
                <td class="px-6 py-4 text-center">
                   <?php echo e($event->category->name); ?>


                </td>
                <td class="px-6 py-4 text-center">
                <?php echo e($event->available_seats); ?>

                </td>
                <td class="px-6 py-4 text-center">
                <button class="hover:text-blue-500" onclick="event.preventDefault(); document.getElementById('update-event-form').submit();">
                    <span class="text-gray-900 whitespace-no-wrap">
                        <?php if($event->status == 0): ?>
                        <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-indigo-300">Accepted</span>
                        <?php else: ?>
                        <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-indigo-300">Refused</span>
                        <?php endif; ?>
                    </span>
                </button>
                </td>
                <form id="update-automatic-acceptance-form-<?php echo e($event->id); ?>" method="POST" action="<?php echo e(route('events.updateAutomaticAcceptance', $event->id)); ?>" style="display: none;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('put'); ?>
                    <td class="px-6 py-4 text-center">
                        <button class="hover:text-blue-500" onclick="event.preventDefault(); document.getElementById('update-automatic-acceptance-form-<?php echo e($event->id); ?>').submit();">
                            <span class="text-gray-900 whitespace-no-wrap">
                                <?php if($event->automatic_acceptance == 1): ?>
                                <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-indigo-300">Yes</span>
                                <?php else: ?>
                                <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-indigo-300">No</span>
                                <?php endif; ?>
                            </span>
                        </button>
                    </td>
                </form>
                <form id="update-status-published-form-<?php echo e($event->id); ?>" method="POST" action="<?php echo e(route('events.updateStatusPublished', $event->id)); ?>" style="display: none;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('put'); ?>
                    <td class="px-6 py-4 text-center">
                        <button class="hover:text-blue-500" onclick="event.preventDefault(); document.getElementById('update-status-published-form-<?php echo e($event->id); ?>').submit();">
                            <span class="text-gray-900 whitespace-no-wrap">
                                <?php if($event->status_published == 1): ?>
                                <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-indigo-300">Accepted</span>
                                <?php else: ?>
                                <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-indigo-300">Refused</span>
                                <?php endif; ?>
                            </span>
                        </button>
                    </td>
                </form>
                <td class="px-6 py-4 text-center">
                <div class="flex gap-5 px-6 py-4 justify-center">
                <form action="<?php echo e(route('events.edit',$event->id)); ?>" method="get">
                        <?php echo csrf_field(); ?>
                          <button>
                            <span class="material-symbols-outlined dark:hover:text-red-500 hover:text-red-500">
                                edit
                            </span>
                        </button>
                    </form>
                    <form action="<?php echo e(route('events.destroy' ,$event->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                          <button>
                            <span class="material-symbols-outlined dark:hover:text-red-500 hover:text-red-500">
                                delete
                            </span>
                        </button>
                    </form>
                </div>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.bdeDash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Youcode\OneDrive\Desktop\youlink\resources\views/events/index.blade.php ENDPATH**/ ?>