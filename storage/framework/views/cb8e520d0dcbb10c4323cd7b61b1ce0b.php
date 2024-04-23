

<?php $__env->startSection('content'); ?>
<div class="w-full">
    <div class="bg-gray-800 p-2 rounded-t-lg w-full">
        <div class="flex justify-evenly space-x-4">
            <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button text-gray-300 dark:text-gray-300 dark:border-gray-700 dark:hover:bg-gray-700 dark:hover:border-gray-900" onclick="showTab('tab1')">Consulter Users</button>
            <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button text-gray-300 dark:text-gray-300 dark:border-gray-700 dark:hover:bg-gray-700 dark:hover:border-gray-900" onclick="showTab('tab2')">Create Users</button>
        </div>
    </div>
    
    <div id="tab1" class="p-4 tab-content bg-gray-900 shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold mb-2 text-blue-300">Consulter Users</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-700">
                <thead class="bg-gray-800">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                            Phone
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-gray-800 divide-y divide-gray-700">
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="text-gray-300">
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->name); ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->email); ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo e($user->phone); ?></td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="<?php echo e(route('admin.users.edit', $user)); ?>" class="text-blue-500 hover:text-blue-700">Edit</a>
                            <form action="<?php echo e(route('admin.users.destroy', $user)); ?>" method="POST" class="inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="text-red-500 hover:text-red-700 ml-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

    <div id="tab2" class="p-4 tab-content shadow-md rounded-lg hidden">
        <h2 class="text-2xl font-semibold mb-2 text-blue-300">Create Users</h2>
        <form action="<?php echo e(route('admin.users.store')); ?>" method="POST" class="max-w-md mx-auto mt-20 p-6  border rounded-lg shadow-lg">
            <?php echo csrf_field(); ?>
            <h2 class="text-2xl font-bold mb-6">Create User</h2>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="name">
                    Name:
                </label>
                <input name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Enter user's name">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs italic"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="email">
                    Email:
                </label>
                <input name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter user's email">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs italic"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="phone">
                    Phone:
                </label>
                <input name="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="text" placeholder="Enter user's phone number">
                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs italic"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Create User
            </button>
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
        const tabContents = document.querySelectorAll('.tab-content');
        tabContents.forEach((content) => {
            content.classList.add('hidden');
        });

        const selectedTab = document.getElementById(tabId);
        if (selectedTab) {
            selectedTab.classList.remove('hidden');
        }

        const tabButtons = document.querySelectorAll('.tab-button');
        tabButtons.forEach((button) => {
            button.classList.remove('active');
        });

        const clickedButton = document.querySelector(`[onclick="showTab('${tabId}')"]`);
        if (clickedButton) {
            clickedButton.classList.add('active');
        }
    }

    showTab('tab1');
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.AdminDash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Youcode\OneDrive\Desktop\youlink\resources\views/admin/users/index.blade.php ENDPATH**/ ?>