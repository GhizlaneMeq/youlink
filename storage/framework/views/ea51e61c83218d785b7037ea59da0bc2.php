

<?php $__env->startSection('main'); ?>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="relative flex flex-col rounded-xl bg-gray-800 text-white shadow-md mb-6">
        <div class="flex items-center justify-between p-3">
            <div class="flex items-center space-x-2">
                 <img src="" alt=""
                    class="object-cover object-center w-8 h-8 rounded-full shadow-sm dark:bg-gray-500 dark:border-gray-300">
                <div class="-space-y-1">
                    <h2 class="text-sm font-semibold leading-none"><?php echo e(Auth::user()->name); ?></h2>
                </div>
            </div>
        </div>
        <div class="relative mx-4 -mt-6 h-40 overflow-hidden rounded-t-xl bg-blue-gray-700 shadow-lg">
          <img src="" alt="">
        </div>
        <div class="p-6">
          <h5 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal">
            <?php echo e($item->title); ?>

          </h5>
          <p class="block font-sans text-base font-light leading-relaxed">
            <?php echo e($item->description); ?>

          </p>
          <p class="block mt-2 font-sans text-sm <?php if($item->status === 'lost'): ?> text-red-600 <?php elseif($item->status === 'found'): ?> text-yellow-600 <?php endif; ?>">
            Status: <?php echo e(ucfirst($item->status)); ?>

          </p>
        </div>
        <div class="p-6 pt-0">
            <a href="<?php echo e(route('items.show', $item)); ?>"
              class="px-6 py-2.5 rounded text-white text-sm tracking-wider font-semibold bg-blue-600 hover:bg-blue-700 active:bg-blue-600 transition-all duration-300">See
              More </a>
              <?php if($item->status === 'found'): ?>
                  <form action="<?php echo e(route('items.report_ownership', $item)); ?>" method="POST">
                      <?php echo csrf_field(); ?>
                      <button type="submit">Report Ownership</button>
                  </form>
              <?php elseif($item->status === 'lost'): ?>
                  <form action="<?php echo e(route('items.report_finding', $item)); ?>" method="POST">
                      <?php echo csrf_field(); ?>
                      <button type="submit">Report Finding</button>
                  </form>
              <?php endif; ?>

        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.book', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Youcode\OneDrive\Desktop\youlink\resources\views/lost&found/index.blade.php ENDPATH**/ ?>