

<?php $__env->startSection('content'); ?>
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold">Book Categories</h2>
            <a href="<?php echo e(route('admin.books.create')); ?>" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded inline-block">Add New Book</a>
        </div>

        <?php if($books->isEmpty()): ?>
            <p class="text-gray-500">No books found.</p>
        <?php else: ?>
            <div class="-mx-4">
                <table class="min-w-full">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="py-2 px-4 font-semibold text-left">ID</th>
                            <th class="py-2 px-4 font-semibold text-left">Title</th>
                            <th class="py-2 px-4 font-semibold text-left">Author</th>
                            <th class="py-2 px-4 font-semibold text-left">Category</th>
                            <th class="py-2 px-4 font-semibold text-left">Description</th>
                            <th class="py-2 px-4 font-semibold text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="border-b border-gray-200">
                                <td class="py-2 px-4"><?php echo e($book->id); ?></td>
                                <td class="py-2 px-4"><?php echo e($book->title); ?></td>
                                <td class="py-2 px-4"><?php echo e($book->author); ?></td>
                                <td class="py-2 px-4"><?php echo e($book->category->name); ?></td>
                                <td class="py-2 px-4"><?php echo e($book->description); ?></td>
                                <td class="py-2 px-4">
                                    <a href="<?php echo e(route('admin.books.edit', $book->id)); ?>" class="text-blue-500 hover:text-blue-600 mr-2">Edit</a>
                                    <form action="<?php echo e(route('admin.books.destroy', $book->id)); ?>" method="POST" style="display: inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="text-red-500 hover:text-red-600">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Youcode\OneDrive\Desktop\youlink\resources\views/admin/books/index.blade.php ENDPATH**/ ?>