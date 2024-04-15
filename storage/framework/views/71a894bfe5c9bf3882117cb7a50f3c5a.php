

<?php $__env->startSection('main'); ?>

<main class="space-y-40 mb-10">
    <div class="relative">
        <div aria-hidden="true" class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40 dark:opacity-20">
            <div class="blur-[106px] h-64 bg-gradient-to-br from-indigo-600 to-purple-400 dark:from-blue-700"></div>
            <div class="blur-[106px] h-64 bg-gradient-to-br from-indigo-600 to-purple-400 dark:to-indigo-600"></div>
        </div>
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            <div class="relative pt-36 ml-auto">
                <div class="lg:w-2/3 text-center mx-auto">
                    <h1 class="text-gray-900 dark:text-white  font-bold font-sans text-5xl md:text-6xl ">Experience
                        Unforgettable Events with <span class="text-blue-900  dark:text-white">YouLink.</span></h1>
                    <p class="mt-8 text-gray-700 dark:text-gray-300">YouLink is your premier destination for
                        discovering, reserving, and experiencing a diverse range of unforgettable events.ensuring
                        every moment becomes a cherished
                        memory.</p>

                    <div
                        class="hidden py-8 mt-16 border-y border-gray-100 dark:border-gray-800 sm:flex justify-between">
                        <div class="text-left">
                            <h6 class="text-lg font-semibold text-gray-700 dark:text-white">Diverse Selection</h6>
                        </div>
                        <div class="text-left">
                            <h6 class="text-lg font-semibold text-gray-700 dark:text-white">Trustworthy Platform
                            </h6>
                        </div>
                        <div class="text-left">
                            <h6 class="text-lg font-semibold text-gray-700 dark:text-white">Easy Reservation Process
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="relative max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            <div aria-hidden="true" class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40 dark:opacity-20">
                <div class="blur-[106px] h-64 bg-gradient-to-br from-indigo-200 to-purple-300 dark:from-blue-700">
                </div>
                <div class="blur-[106px] h-64 bg-gradient-to-r from-sky-100 to-purple-300 dark:to-indigo-600"></div>
            </div>
            <div class="mb-12 space-y-2 text-center">
                <h2 class="text-3xl font-bold text-gray-800 md:text-4xl dark:text-white">Events & Happenings</h2>
            </div>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('events.show', ['event' => $event->id])); ?>">
                <div class="group p-6 sm:p-8 rounded-3xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10">
                    <div class="relative overflow-hidden rounded-xl">
                        <img src="<?php echo e(asset('storage/images/events/' . $event->image)); ?>" alt="art cover" loading="lazy" width="1000" height="667" class="h-64 w-full object-cover object-top transition duration-500 group-hover:scale-105">
                    </div>
                    
                        <h3 class="text-2xl mb-2 font-semibold text-gray-800 dark:text-white">
                            <?php echo e($event->title); ?>

                        </h3>
                        <p class=" mb-2 text-gray-600 dark:text-gray-300">
                            <span class="material-symbols-outlined">
                            </span>location : <?php echo e($event->location); ?>

                        </p>
                        <p class=" mb-2 text-gray-600 dark:text-gray-300">
                            <span class="material-symbols-outlined">
                            </span>date : <?php echo e($event->date); ?>

                        </p>
                    
                    

                </div>
            </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>


        </div>
    </div>
    </div>


    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.book', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Youcode\OneDrive\Desktop\youlink\resources\views/events/index.blade.php ENDPATH**/ ?>