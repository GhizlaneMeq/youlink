

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Book Categories</div>

                    <div class="card-body">
                        <button type="button" class="btn btn-primary mb-3" onclick="showCreateModal()">Add New Category</button>

                        <?php if($categories->isEmpty()): ?>
                            <p>No book categories found.</p>
                        <?php else: ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($category->id); ?></td>
                                            <td><?php echo e($category->name); ?></td>
                                            <td>
                                                <button onclick="showEditModal(<?php echo e($category->id); ?>)" class="btn btn-sm btn-primary">Edit</button>
                                                <form action="<?php echo e(route('admin.book_categories.destroy', $category->id)); ?>" method="POST" style="display: inline;">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Category Modal -->
    <div class="modal fade" id="createCategoryModal" tabindex="-1" role="dialog" aria-labelledby="createCategoryModalLabel" aria-hidden="true">
        <!-- Include your create category form here -->
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createCategoryModalLabel">Add New Category</h5>
                    <button type="button" class="close" onclick="hideCreateModal()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('admin.book_categories.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Category Modals -->
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="modal fade" id="editCategoryModal<?php echo e($category->id); ?>" tabindex="-1" role="dialog" aria-labelledby="editCategoryModalLabel<?php echo e($category->id); ?>" aria-hidden="true">
            <!-- Include your edit category form here -->
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editCategoryModalLabel<?php echo e($category->id); ?>">Edit Category</h5>
                        <button type="button" class="close" onclick="hideEditModal(<?php echo e($category->id); ?>)" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo e(route('admin.book_categories.update', $category->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo e($category->name); ?>" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <script>
        function showCreateModal() {
            document.getElementById('createCategoryModal').classList.add('block');
            document.getElementById('createCategoryModal').classList.remove('hidden');
        }

        function hideCreateModal() {
            document.getElementById('createCategoryModal').classList.add('hidden');
            document.getElementById('createCategoryModal').classList.remove('block');
        }

        function showEditModal(id) {
            document.getElementById('editCategoryModal' + id).classList.add('block');
            document.getElementById('editCategoryModal' + id).classList.remove('hidden');
        }

        function hideEditModal(id) {
            document.getElementById('editCategoryModal' + id).classList.add('hidden');
            document.getElementById('editCategoryModal' + id).classList.remove('block');
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Youcode\OneDrive\Desktop\youlink\resources\views/admin/book_category/index.blade.php ENDPATH**/ ?>