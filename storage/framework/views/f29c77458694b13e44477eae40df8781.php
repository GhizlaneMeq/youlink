

<?php $__env->startSection('main'); ?>

<div id="bookModal" class="hidden fixed inset-0 overflow-y-auto">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0 sm:pt-0">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <div
            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-gray-50 px-4 py-5 sm:px-6">
                <h3 class="text-lg font-medium text-gray-900">Edit Book</h3>
            </div>
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <form id="editBookForm" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="mb-4">
                        <label for="bookTitle" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="title" id="bookTitle"
                            class="mt-1 p-2 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="bookAuthor" class="block text-sm font-medium text-gray-700">Author</label>
                        <input type="text" name="author" id="bookAuthor"
                            class="mt-1 p-2 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="bookDescription" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea name="description" id="bookDescription" rows="3"
                            class="mt-1 p-2 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                            required></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="book_category_id" class="block text-sm font-medium text-gray-700">Category</label>
                        <select id="book_category_id" name="book_category_id"
                            class="mt-1 p-2 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                            required>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="cover-photo-edit" class="block text-sm font-medium leading-6 text-gray-900">Cover
                            photo</label>
                        <div
                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                            <div class="text-center">
                                <label for="imageEdit"
                                    class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                    <span>Upload a file</span>
                                    <input id="imageEdit" name="image" type="file" class="sr-only"
                                        onchange="previewImage(this, 'previewEdit')">
                                </label>
                                <img id="previewEdit" class="mt-4 max-w-full mx-auto hidden" style="max-height: 200px;"
                                    alt="Preview Image" />
                                <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="book_id" id="bookId">
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button id="saveChangesBtn" type="submit"
                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-gray-700 text-base font-medium text-white hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:ml-3 sm:w-auto sm:text-sm">Save
                            Changes</button>
                        <button id="closeModal" type="button"
                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="createbookModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen px-4 py-6 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <div
            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-gray-50 px-4 py-5 sm:px-6">
                <h3 class="text-lg font-medium text-gray-900">Add Book</h3>
            </div>
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <form action="<?php echo e(route('user.books.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="user_id" value="<?php echo e(Auth::id()); ?>">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" name="title" id="title"
                                class="mt-1 p-2 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                                required>
                        </div>
                        <div class="sm:col-span-3">
                            <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                            <input type="text" name="author" id="author"
                                class="mt-1 p-2 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                                required>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea name="description" id="description" rows="3"
                                class="mt-1 p-2 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                                required></textarea>
                        </div>
                        <div class="sm:col-span-3">
                            <label for="book_category_id"
                                class="block text-sm font-medium text-gray-700">Category</label>
                            <select id="book_category_id" name="book_category_id"
                                class="mt-1 p-2 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                                required>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="cover-photo-add" class="block text-sm font-medium leading-6 text-gray-900">Cover
                            photo</label>
                        <div
                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                            <div class="text-center">
                                <label for="imageAdd"
                                    class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                    <span>Upload a file</span>
                                    <input id="imageAdd" name="image" type="file" class="sr-only"
                                        onchange="previewImage(this, 'previewAdd')">
                                </label>
                                <img id="previewAdd" class="mt-4 max-w-full mx-auto hidden" style="max-height: 200px;"
                                    alt="Preview Image" />
                                <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                            </div>
                        </div>
                    </div>



                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button type="submit"
                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">Save
                            Book</button>
                        <button id="closeModal" type="button"
                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">Cancel</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<button id="addBookBtn" type="button" class="px-8 py-2 m rounded text-white text-sm tracking-wider font-medium outline-none border-2 border-blue-600 hover:bg-blue-600 hover:text-white transition-all duration-300">Add book </button>

<?php if($books->isEmpty()): ?>
<div class="bg-white shadow-md rounded-md p-4 text-center text-gray-700 w-full">
    <p>You haven't created any books yet.</p>
</div>
<?php else: ?>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


    <div class="rounded-md shadow-md sm:w-96 dark:bg-gray-50 dark:text-gray-800">
        <div class="flex items-center justify-between p-3">
            <div class="flex items-center space-x-2">

                 <img src="<?php echo e(url('/storage/images/users/'.Auth::user()->avatar)); ?> " alt=""
                    class="object-cover object-center w-8 h-8 rounded-full shadow-sm dark:bg-gray-500 dark:border-gray-300">
                
                <div class="-space-y-1">
                    <h2 class="text-sm font-semibold leading-none"><?php echo e(Auth::user()->name); ?></h2>
                    <span class="inline-block text-xs leading-none dark:text-gray-600">Somewhere</span>
                </div>
            </div>
            <div class="flex flex-shrink-0 self-center">
                <button class="options-button" title="Open options" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 fill-current">
                        <path
                            d="M256,144a64,64,0,1,0-64-64A64.072,64.072,0,0,0,256,144Zm0-96a32,32,0,1,1-32,32A32.036,32.036,0,0,1,256,48Z">
                        </path>
                        <path
                            d="M256,368a64,64,0,1,0,64,64A64.072,64.072,0,0,0,256,368Zm0,96a32,32,0,1,1,32-32A32.036,32.036,0,0,1,256,464Z">
                        </path>
                        <path
                            d="M256,192a64,64,0,1,0,64,64A64.072,64.072,0,0,0,256,192Zm0,96a32,32,0,1,1,32-32A32.036,32.036,0,0,1,256,288Z">
                        </path>
                    </svg>
                </button>

                <div
                    class="options-menu hidden absolute  z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                    <div class="py-1" role="none">
                        <a href="<?php echo e(route('user.books.show', $book->id)); ?>"
                            class="text-gray-700 flex px-4 py-2 text-sm hover:bg-gray-100">
                            <svg class="mr-3 h-5 w-5 text-gray-400" x-description="Heroicon name: mini/star"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>show more details</span>
                        </a>
                        <button
                            onclick="openModal('<?php echo e($book->title); ?>', '<?php echo e($book->author); ?>', '<?php echo e($book->description); ?>','<?php echo e($book->id); ?>')"
                            title="Edit" type="button"
                            class="options-button text-gray-700 flex px-4 py-2 text-sm hover:bg-gray-100">
                            <svg class="mr-3 h-5 w-5 text-gray-400" x-description="Heroicon name: mini/code-bracket"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M6.28 5.22a.75.75 0 010 1.06L2.56 10l3.72 3.72a.75.75 0 01-1.06 1.06L.97 10.53a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 0zm7.44 0a.75.75 0 011.06 0l4.25 4.25a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06-1.06L17.44 10l-3.72-3.72a.75.75 0 010-1.06zM11.377 2.011a.75.75 0 01.612.867l-2.5 14.5a.75.75 0 01-1.478-.255l2.5-14.5a.75.75 0 01.866-.612z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>edit</span>
                        </button>

                        <form action="<?php echo e(route('user.books.destroy', $book->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="text-gray-700 flex px-4 py-2 text-sm hover:bg-gray-100">
                                <svg class="mr-3 h-5 w-5 text-gray-400" x-description="Heroicon name: mini/flag"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path
                                        d="M3.5 2.75a.75.75 0 00-1.5 0v14.5a.75.75 0 001.5 0v-4.392l1.657-.348a6.449 6.449 0 014.271.572 7.948 7.948 0 005.965.524l2.078-.64A.75.75 0 0018 12.25v-8.5a.75.75 0 00-.904-.734l-2.38.501a7.25 7.25 0 01-4.186-.363l-.502-.2a8.75 8.75 0 00-5.053-.439l-1.475.31V2.75z">
                                    </path>
                                </svg>
                                <span>delete</span>
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <img src="<?php echo e(asset('storage/images/books/' . $book->image)); ?>" alt=""
            class="object-cover object-center w-full h-72 dark:bg-gray-500">
        <div class="p-3">

            <div class="flex flex-wrap items-center pt-3 pb-1">
                <div class="flex items-center space-x-2">
                    <span class="text-base font-semibold"><?php echo e($book->title); ?></span>
                    <span class="text-sm"> by
                        <span class="font-semibold"><?php echo e($book->author); ?></span>
                    </span>
                </div>
            </div>
            <div class="space-y-3">
                <p class="text-sm"><?php echo e($book->description); ?>

                </p>
            </div>
        </div>
    </div>


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php endif; ?>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var buttons = document.querySelectorAll('.options-button');

        buttons.forEach(function (button) {
            button.addEventListener('click', function (event) {
                var menu = this.nextElementSibling;
                menu.classList.toggle('hidden');
                event.stopPropagation();
            });
        });

        document.addEventListener('click', function (event) {
            var menus = document.querySelectorAll('.options-menu');
            menus.forEach(function (menu) {
                if (!menu.contains(event.target)) {
                    menu.classList.add('hidden');
                }
            });
        });
    });

    function openModal(title, author, description, id) {
        document.getElementById('bookTitle').value = title;
        document.getElementById('bookAuthor').value = author;
        document.getElementById('bookDescription').textContent = description;
        document.getElementById('bookId').value = id;

        var form = document.getElementById('editBookForm');
        form.action = "/user/books/" + id;

        document.getElementById('bookModal').classList.remove('hidden');
    }

    document.getElementById('closeModal').addEventListener('click', function () {
        document.getElementById('bookModal').classList.add('hidden');
    });





    //for create book modal
    function showModal() {
        document.getElementById('createbookModal').classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }


    function hideModal() {
        document.getElementById('createbookModal').classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }


    document.getElementById('addBookBtn').addEventListener('click', function () {
        showModal();
    });


    document.getElementById('closeModal').addEventListener('click', function () {
        hideModal();
    });



    function previewImage(input, imgId) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                document.getElementById(imgId).src = e.target.result;
                document.getElementById(imgId).classList.remove('hidden');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }


</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.book', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Youcode\OneDrive\Desktop\youlink\resources\views/user/books/index.blade.php ENDPATH**/ ?>