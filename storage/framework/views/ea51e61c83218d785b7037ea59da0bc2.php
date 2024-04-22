

<?php $__env->startSection('main'); ?>
div class="relative bg-gradient-to-b from-red-500 to-red-600">
<div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6 py-24">
    <div class="text-center text-white">
        <h1 class="text-4xl md:text-5xl font-bold">Lost Items</h1>
        <p class="mt-4 text-lg md:text-xl">Explore lost items and help reunite them with their owners.</p>
    </div>
</div>
</div>




<div class="relative bg-gradient-to-b from-green-500 to-green-600">
<div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6 py-24">
    <div class="text-center text-white">
        <h1 class="text-4xl md:text-5xl font-bold">Found Items</h1>
        <p class="mt-4 text-lg md:text-xl">Discover found items and help their owners reclaim them.</p>
    </div>
</div>
</div>
    <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6 mt-16">
        <div class="mb-12 space-y-2 text-center">
            <h2 class="text-3xl font-bold text-gray-800 md:text-4xl dark:text-white">Lost Items</h2>
        </div>
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="group p-6 sm:p-8 rounded-3xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10">
                    <div class="relative overflow-hidden rounded-xl">
                        <img src="<?php echo e(asset('storage/images/items/' . $item->picture)); ?>" alt="item image" loading="lazy" width="1000" height="667" class="h-64 w-full object-cover object-top transition duration-500 group-hover:scale-105">
                    </div>
                    <h3 class="text-2xl mb-2 font-semibold text-gray-800 dark:text-white">
                        <?php echo e($item->title); ?>

                    </h3>
                    <p class=" mb-2 text-gray-600 dark:text-gray-300">
                        Description: <?php echo e($item->description); ?>

                    </p>
                    <p class=" mb-2 text-gray-600 dark:text-gray-300">
                        Location: <?php echo e($item->location); ?>

                    </p>
                    <p class=" mb-2 text-gray-600 dark:text-gray-300">
                        Status: <?php echo e(ucfirst($item->status)); ?>

                    </p>
                    <div class="flex justify-center mt-4">
                        <a href="<?php echo e(route('items.show', $item)); ?>" class="px-6 py-2.5 rounded text-white text-sm tracking-wider font-semibold bg-blue-600 hover:bg-blue-700 active:bg-blue-600 transition-all duration-300">See More</a>
                        <?php if($item->status === 'found'): ?>
                            <form action="<?php echo e(route('user.items.report_ownership', $item)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="ml-2 px-6 py-2.5 rounded text-white text-sm tracking-wider font-semibold bg-red-600 hover:bg-red-700 active:bg-red-600 transition-all duration-300">Report Ownership</button>
                            </form>
                        <?php elseif($item->status === 'lost'): ?>
                            <form action="<?php echo e(route('user.items.report_finding', $item)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="ml-2 px-6 py-2.5 rounded text-white text-sm tracking-wider font-semibold bg-green-600 hover:bg-green-700 active:bg-green-600 transition-all duration-300">Report Finding</button>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.book', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Youcode\OneDrive\Desktop\youlink\resources\views/lost&found/index.blade.php ENDPATH**/ ?>