

<?php $__env->startSection('main'); ?>
    
    <div id="exchangeModal"
        class="fixed inset-0 z-50 flex items-center justify-center overflow-auto bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg p-8 w-96">
            <button onclick="closeExchangeModal()"
                class="absolute top-0 right-0 p-2 text-gray-500 hover:text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <h2 class="text-lg font-semibold mb-4">Choose a Book to Exchange</h2>
            <form id="exchangeForm" method="POST" action="<?php echo e(route('user.exchanges.store')); ?>">
                <?php echo csrf_field(); ?>
                <input type="hidden" name='requester_id' value="<?php echo e(Auth::id()); ?>">
                <input type="hidden" name='received_book_id' id='received_book_id' value="">
                <input type="hidden" name='receiver_id' id='receiver_id' value="">
                <div class="mt-4">
                    <label for="requested_book_id" class="block text-sm font-medium text-gray-700">Select a Book to
                        Exchange:</label>
                    <select id="requested_book_id" name="requested_book_id"
                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                        <?php $__currentLoopData = $userBooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($book->id); ?>"><?php echo e($book->title); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-600 mt-4">Exchange</button>
            </form>

        </div>
    </div>

    <?php if($books->isEmpty()): ?>
        <div class="bg-white shadow-md rounded-md p-4 text-center text-gray-700 w-full">
            <p>There are no available books.</p>
        </div>
    <?php else: ?>
        <div class="relative">
            <div aria-hidden="true" class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40  opacity-20">
                <div class="blur-[106px] h-64 bg-gradient-to-br from-indigo-600 to-purple-400  from-blue-700"></div>
                <div class="blur-[106px] h-64 bg-gradient-to-br from-indigo-600 to-purple-400  to-indigo-600"></div>
            </div>
            <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6  pb-24">
                <div class="relative  ml-auto">
                    <div class="lg:w-2/3 text-center mx-auto">
                        <h1 class="text-gray-900  text-white font-bold font-sans text-5xl md:text-6xl ">Discover Books to
                            Swap
                            with <span class="text-blue-900  text-white">BookSwap.</span></h1>
                        <p class="mt-8   text-gray-300">BookSwap is your go-to platform for discovering
                            and exchanging books with other readers, connecting book lovers, and ensuring every book finds a
                            new home.</p>

                        <div class="hidden py-8 mt-16 border-y border-gray-100  sm:flex justify-between">
                            <div class="text-left">
                                <h6 class="text-lg font-semibold   text-white">Vast Book Collection</h6>
                            </div>
                            <div class="text-left">
                                <h6 class="text-lg font-semibold   text-white">Community of Readers</h6>
                            </div>
                            <div class="text-left">
                                <h6 class="text-lg font-semibold   text-white">Easy Exchange Process</h6>
                            </div>
                        </div>
                    
                    <form action="<?php echo e(route('books.search')); ?>" method="POST" class="flex flex-col md:flex-row gap-3"
                        style="margin-bottom: 50px;margin-top:50px">
                        <?php echo csrf_field(); ?>

                        <div class="flex">
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                                    <button type="submit" title="Search" class="p-1 focus:outline-none focus:ring">
                                        <svg fill="currentColor" viewBox="0 0 512 512" class="w-4 h-4 text-gray-800">
                                            <path
                                                d="M479.6,399.716l-81.084-81.084-62.368-25.767A175.014,175.014,0,0,0,368,192c0-97.047-78.953-176-176-176S16,94.953,16,192,94.953,368,192,368a175.034,175.034,0,0,0,101.619-32.377l25.7,62.2L400.4,478.911a56,56,0,1,0,79.2-79.195ZM48,192c0-79.4,64.6-144,144-144s144,64.6,144,144S271.4,336,192,336,48,271.4,48,192ZM456.971,456.284a24.028,24.028,0,0,1-33.942,0l-76.572-76.572-23.894-57.835L380.4,345.771l76.573,76.572A24.028,24.028,0,0,1,456.971,456.284Z">
                                            </path>
                                        </svg>
                                    </button>
                                </span>
                                <input type="text" name="search" placeholder="Search for a book" id="searchInput"
                                    class="w-32 py-2 pl-10 text-sm rounded-md sm:w-auto focus:outline-none bg-gray-100 text-gray-800 focus:bg-gray-50 focus:border-violet-600"
                                    value="<?php echo e(request()->input('search')); ?>">
                            </div>


                        </div>

                        <select id="category" name="category"
                            class="w-32 py-2 pl-10 text-sm rounded-md sm:w-auto focus:outline-none bg-gray-100 text-gray-800 focus:bg-gray-50 focus:border-violet-600"
                            onchange="filterByCategory(this.value)">
                            <option value="" selected>All Categories</option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>"
                                    <?php echo e(request()->input('category') == $category->id ? 'selected' : ''); ?>>
                                    <?php echo e($category->name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>


                    </form>
                </div>
            </div>
            </div>




        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8" id="book-list">

        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8" id="book-listt">
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="rounded-md shadow-md sm:w-96 dark:bg-gray-50 dark:text-gray-800 gallery-item"
                    data-category="<?php echo e($book->book_category_id); ?>">
                    <div class="flex items-center justify-between p-3">
                        <a href="<?php echo e(route('users.show', $book->user_id)); ?>" class="flex items-center space-x-2">
                            <img src="<?php echo e(url('/storage/images/users/' . $book->user->avatar)); ?> " alt=""
                                class="object-cover object-center w-8 h-8 rounded-full shadow-sm dark:bg-gray-500 dark:border-gray-300">

                            <div class="-space-y-1">
                                <h2 class="text-sm font-semibold leading-none"><?php echo e($book->user->name); ?></h2>
                            </div>
                        </a>
                        <div class="flex flex-shrink-0 self-center">
                            <button class="options-button" title="Open options" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    class="w-5 h-5 fill-current">
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
                                class="options-menu hidden absolute z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                                <div class="py-1" role="none">
                                    <a href="<?php echo e(route('books.show', $book->id)); ?>"
                                        class="text-gray-700 flex px-4 py-2 text-sm hover:bg-gray-100">
                                        <svg class="mr-3 h-5 w-5 text-gray-400" x-description="Heroicon name: mini/star"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Show more details</span>
                                    </a>
                                    <button onclick="openExchangeModal('<?php echo e($book->id); ?>', '<?php echo e($book->title); ?>')"
                                        title="Exchange" type="button"
                                        class="options-button text-gray-700 flex px-4 py-2 text-sm hover:bg-gray-100">
                                        <svg class="mr-3 h-5 w-5 text-gray-400"
                                            x-description="Heroicon name: mini/code-bracket"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M6.28 5.22a.75.75 0 010 1.06L2.56 10l3.72 3.72a.75.75 0 01-1.06 1.06L.97 10.53a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 0zm7.44 0a.75.75 0 011.06 0l4.25 4.25a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06-1.06L17.44 10l-3.72-3.72a.75.75 0 010-1.06zM11.377 2.011a.75.75 0 01.612.867l-2.5 14.5a.75.75 0 01-1.478-.255l2.5-14.5a.75.75 0 01.866-.612z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Exchange</span>
                                    </button>
                                    <form action="<?php echo e(route('user.books.destroy', $book->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit"
                                            class="text-gray-700 flex px-4 py-2 text-sm hover:bg-gray-100">
                                            <svg class="mr-3 h-5 w-5 text-gray-400"
                                                x-description="Heroicon name: mini/flag"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M3.5 2.75a.75.75 0 00-1.5 0v14.5a.75.75 0 001.5 0v-4.392l1.657-.348a6.449 6.449 0 014.271.572 7.948 7.948 0 005.965.524l2.078-.64A.75.75 0 0018 12.25v-8.5a.75.75 0 00-.904-.734l-2.38.501a7.25 7.25 0 01-4.186-.363l-.502-.2a8.75 8.75 0 00-5.053-.439l-1.475.31V2.75z">
                                                </path>
                                            </svg>
                                            <span>Delete</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="<?php echo e(asset('storage/images/books/' . $book->image)); ?>" alt="Book Image"
                        class="object-cover object-center w-full h-72 dark:bg-gray-500">
                    <div class="p-3">
                        <div class="flex flex-wrap items-center pt-3 pb-1">
                            <div class="flex items-center space-x-2">
                                <span class="text-base font-semibold"><?php echo e($book->title); ?></span>
                                <span class="text-sm"> by <span class="font-semibold"><?php echo e($book->author); ?></span></span>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <p class="text-sm"><?php echo e($book->description); ?></p>
                        </div>
                        <div class="mt-4">
                            <button onclick="openExchangeModal('<?php echo e($book->id); ?>', '<?php echo e($book->user_id); ?>')"
                                class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-600">Exchange</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var buttons = document.querySelectorAll('.options-button');

            buttons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    var menu = this.nextElementSibling;
                    menu.classList.toggle('hidden');
                    event.stopPropagation();
                });
            });

            document.addEventListener('click', function(event) {
                var menus = document.querySelectorAll('.options-menu');
                menus.forEach(function(menu) {
                    if (!menu.contains(event.target)) {
                        menu.classList.add('hidden');
                    }
                });
            });
        });

        function openExchangeModal(bookId, userId) {
            document.getElementById('received_book_id').value = bookId;
            document.getElementById('receiver_id').value = userId;
            document.getElementById('exchangeModal').classList.remove('hidden');
        }

        function closeExchangeModal() {
            document.getElementById('exchangeModal').classList.add('hidden');
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', async function() {
            var searchInput = document.getElementById('searchInput');
            var eventsList = document.getElementById('book-list');
            var eventsList1 = document.getElementById('book-listt');

            searchInput.addEventListener('input', async function() {
                var query = this.value;

                try {
                    const response = await fetch(`/books/search?query=${query}`);

                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }

                    const data = await response.json();

                    eventsList1.style.display = 'none';
                    eventsList.innerHTML = ''; // Clear previous search results

                    // Iterate over each book in the received data and create HTML cards
                    data.books.data.forEach(book => {
                        const eventCard = `
                    <div class="rounded-md shadow-md sm:w-96 dark:bg-gray-50 dark:text-gray-800 gallery-item" data-category="${book.book_category_id}">
                        <div class="flex items-center justify-between p-3">
                            <h2 class="text-sm font-semibold leading-none">${book.title}</h2>
                        </div>
                        <img src="/storage/images/books/${book.image}" alt="Book Image" class="object-cover object-center w-full h-72 dark:bg-gray-500">
                        <div class="p-3">
                            <div class="flex flex-wrap items-center pt-3 pb-1">
                                <div class="flex items-center space-x-2">
                                    <span class="text-base font-semibold">${book.title}</span>
                                    <span class="text-sm"> by <span class="font-semibold">${book.author}</span></span>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <p class="text-sm">${book.description}</p>
                            </div>
                            <div class="mt-4">
                                <button onclick="openExchangeModal('${book.id}', '${book.user_id}')" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-600">Exchange</button>
                            </div>
                        </div>
                    </div>`;

                        // Append the eventCard HTML to eventsList
                        eventsList.insertAdjacentHTML('beforeend', eventCard);
                    });
                } catch (error) {
                    console.error('Error:', error);
                }
            });
        });


        //filter
        function filterByCategory(categoryId) {
            var events = document.querySelectorAll('.gallery-item');

            events.forEach(function(event) {
                var eventCategory = event.getAttribute('data-category');

                if (!categoryId || eventCategory == categoryId) {
                    event.style.display = 'block';
                } else {
                    event.style.display = 'none';
                }
            });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.book', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Youcode\OneDrive\Desktop\youlink\resources\views/bookSwap/index.blade.php ENDPATH**/ ?>