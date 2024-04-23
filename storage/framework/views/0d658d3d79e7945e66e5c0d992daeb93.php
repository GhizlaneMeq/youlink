

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/css/multi-select-tag.css">
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/js/multi-select-tag.js"></script>
<div class="w-full">
    <!-- Tab Buttons -->
    <div class="bg-gray-800 p-2 rounded-t-lg w-full">
        <div class="flex justify-evenly space-x-4">
            <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button dark:text-gray-300 dark:border-gray-700 dark:hover:bg-gray-700 dark:hover:border-gray-900" onclick="showTab('tab1')">Consulter Book Categories</button>
            <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button dark:text-gray-300 dark:border-gray-700 dark:hover:bg-gray-700 dark:hover:border-gray-900" onclick="showTab('tab2')">Create Book Category</button>
        </div>
    </div>
    

    <!-- Tab Content -->
    <div id="tab1" class="p-4 tab-content bg-gray-900 shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold mb-2 text-blue-300">Consulter Book Categories</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-800">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                            Category Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-gray-900 divide-y divide-gray-700">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="text-gray-300">
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo e($category->name); ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo e($category->description); ?></td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="text-blue-600 hover:text-blue-900" onclick="openEditModal('<?php echo e($category->id); ?>')">Edit</button>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

    <div id="tab2" class="p-4 tab-content bg-gray-900 shadow-md rounded-lg hidden">
        <h2 class="text-2xl font-semibold mb-2 text-blue-300">Create Book Category</h2>
        <div class="max-w-md mx-auto p-8 bg-gray-800 rounded-md shadow-md form-container">
            <h2 class="text-2xl font-semibold text-white mb-6">Create Book Category</h2>
            <form action="<?php echo e(route('admin.book_categories.store')); ?>" method="POST" class="max-w-md">
                <?php echo csrf_field(); ?>
                <div class="mb-4">
                    <label for="name" class="block text-sm font-semibold mb-2">Category Name:</label>
                    <input type="text" name="name" id="name" class="w-full border-gray-300 rounded-md p-2 bg-gray-700 text-white focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-sm font-semibold mb-2">Description:</label>
                    <textarea name="description" id="description" class="w-full border-gray-300 rounded-md p-2 bg-gray-700 text-white focus:outline-none focus:border-blue-500" rows="4"></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white rounded-md py-2 px-4 hover:bg-blue-600">Create Category</button>
            </form>
        </div>
    </div>

</div>

<!-- Edit Modal -->
<div id="editModal" class="fixed inset-0 z-50 overflow-auto bg-gray-900 bg-opacity-75 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg p-8 w-full max-w-md">
        <h2 class="text-2xl font-semibold mb-2 text-blue-300">Edit Book Category</h2>
        <form action="<?php echo e(route('admin.book_categories.update', ':categoryId')); ?>" method="POST" class="max-w-md">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold mb-2">Category Name:</label>
                <input type="text" name="name" id="name" class="w-full border-gray-300 rounded-md p-2 bg-gray-100 text-gray-900 focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-semibold mb-2">Description:</label>
                <textarea name="description" id="description" class="w-full border-gray-300 rounded-md p-2 bg-gray-100 text-gray-900 focus:outline-none focus:border-blue-500" rows="4"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white rounded-md py-2 px-4 hover:bg-blue-600">Update Category</button>
        </form>
    </div>
</div>

<style>
    .tab-button.active {
        background-color: #4a5568;
        border-color: #4299e1;
        color: #4299e1;
    }
</style>

<script>
    function showTab(tabId) {
        // Masquer tout le contenu des onglets
        const tabContents = document.querySelectorAll('.tab-content');
        tabContents.forEach((content) => {
            content.classList.add('hidden');
        });

        // Afficher le contenu de l'onglet sélectionné
        const selectedTab = document.getElementById(tabId);
        if (selectedTab) {
            selectedTab.classList.remove('hidden');
        }

        // Supprimer la classe 'active' de tous les boutons d'onglet
        const tabButtons = document.querySelectorAll('.tab-button');
        tabButtons.forEach((button) => {
            button.classList.remove('active');
        });

        // Ajouter la classe 'active' au bouton d'onglet cliqué
        const clickedButton = document.querySelector(`[onclick="showTab('${tabId}')"]`);
        if (clickedButton) {
            clickedButton.classList.add('active');
        }
    }

    // Initialiser le premier onglet
    showTab('tab1');

    function openEditModal(categoryId) {
        // Fetch category information using JavaScript (since we're not using AJAX)
        const category = getCategoryById(categoryId);
        
        // Populate modal content with category information
        document.getElementById('name').value = category.name;
        document.getElementById('description').value = category.description;
        
        // Display the modal
        const modal = document.getElementById('editModal');
        modal.classList.remove('hidden');
    }

    function getCategoryById(categoryId) {
        // Implement function to retrieve category information by ID
        // For now, let's assume you have the category data available in a JavaScript object
        const categories = <?php echo $categories->toJson(); ?>; // Convert PHP array to JSON
        return categories.find(category => category.id === categoryId);
    }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.AdminDash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Youcode\OneDrive\Desktop\youlink\resources\views/admin/book_category/index.blade.php ENDPATH**/ ?>