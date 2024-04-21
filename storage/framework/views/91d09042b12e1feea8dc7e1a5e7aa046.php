 <?php $__env->startSection('main'); ?>
<link
    href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"
    rel="stylesheet"
/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

<section class="w-full overflow-hidden bg-gray-900">
    
    <div class="flex flex-col">
        <div class="relative w-full">
            <video autoplay muted loop class="inset-0 w-full xl:h-[20rem] lg:h-[18rem] md:h-[16rem] sm:h-[14rem] xs:h-[11rem object-cover" >
                <source  src="<?php echo e(asset('videos/video.mp4')); ?>"  type="video/mp4"/>
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="sm:w-[80%] xs:w-[90%] mx-auto flex">
            <div class="relative">
                <img  src="<?php echo e(asset('storage/images/users/' . $user->avatar)); ?>" alt="User Profile" class="rounded-md lg:w-[12rem] lg:h-[12rem] md:w-[10rem] md:h-[10rem] sm:w-[8rem] sm:h-[8rem] xs:w-[7rem] xs:h-[7rem] outline outline-2 outline-blue-500 relative lg:bottom-[5rem] sm:bottom-[4rem] xs:bottom-[3rem]" />

                <button  data-modal-target="authentication-modal"  data-modal-toggle="authentication-modal"  class="absolute top-0 right-0 bg-blue-500 rounded-full text-white w-8 h-8 flex justify-center items-center hover:bg-blue-600 focus:outline-none focus:bg-blue-600"  type="button" >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" >
                        <path fill-rule="evenodd" d="M2.5 6a2.5 2.5 0 0 1 5 0v-.5a2 2 0 0 1 4 0V6a2 2 0 0 0 2 2h.5a2.5 2.5 0 1 1 0 5h-.5a2 2 0 0 0-2 2v.5a2 2 0 0 1-4 0v-.5a2.5 2.5 0 0 1-5 0V13a2 2 0 0 0-2-2h-.5a2.5 2.5 0 0 1 0-5h.5a2 2 0 0 0 2-2V6zm4.5 2.5a.5.5 0 0 1-.5.5H5.5a.5.5 0 0 1 0-1h1.5a.5.5 0 0 1 .5.5zm5.5-1.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm-.5 8a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5z" clip-rule="evenodd" />
                    </svg>
                    edit
                </button>
            </div>
            <h1 class="w-full text-left my-4 sm:mx-4 xs:pl-4  text-white lg:text-4xl md:text-3xl sm:text-3xl xs:text-xl font-serif" >
                <?php echo e($user->name); ?>

            </h1>
        </div>

        <div  id="authentication-modal"  tabindex="-1"  aria-hidden="true"  class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full" >
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div  class="relative bg-white rounded-lg shadow bg-gray-700" >
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-600"  >
                        <h3  class="text-xl font-semibold text-gray-900 text-white" >
                            Sign in to our platform
                        </h3>
                        <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center hover:bg-gray-600 hover:text-white" data-modal-hide="authentication-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" >
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        <form  action="<?php echo e(route('user.update.avatar')); ?>"  method="POST"  enctype="multipart/form-data" >
                            <?php echo csrf_field(); ?>
                            <div class="p-4">
                                <input type="file" name="avatar" accept="image/*" class="w-full py-2 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-500"  />
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6" >
                                <!-- Save Button -->
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="xl:w-[80%] lg:w-[90%] md:w-[90%] sm:w-[92%] xs:w-[90%] mx-auto flex flex-col gap-4 items-center relative lg:-top-8 md:-top-6 sm:-top-4 xs:-top-4" >
            <!-- Description -->
            <div class="flex items-center justify-between">
                <p class="w-fit text-gray-700 text-gray-400 text-md">
                    <?php echo e($user->description); ?>

                </p>
                <button data-modal-target="update-description-modal" data-modal-toggle="update-description-modal" class="text-sm text-blue-500 text-blue-400 hover:underline focus:outline-none"> Update
                </button>
            </div>
            <!-- Update Description Modal -->
            
            <div id="update-description-modal" aria-labelledby="modal-title" role="dialog" aria-modal="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full" >
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow bg-gray-700"  >
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-600" >
                            <h3 class="text-xl font-semibold text-gray-900 text-white" >
                                Update Description
                            </h3>
                            <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center hover:bg-gray-600 hover:text-white" data-modal-hide="update-description-modal" >
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" >
                                    <path  stroke="currentColor"  stroke-linecap="round"  stroke-linejoin="round"  stroke-width="2"  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5">
                            <form action="<?php echo e(route('user.update.description')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <textarea id="update-description-textarea" name="description" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4" placeholder="Enter new description..."><?php echo e($user->description); ?></textarea>
                                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                    <button id="update-description-btn" type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"> Update </button>
                                    <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:ml-3 sm:w-auto"> Cancel </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Detail -->
            <div class="w-full my-auto py-6 flex flex-col justify-center gap-2">
                <div   class="w-full flex sm:flex-row xs:flex-col gap-2 justify-center"  >
                    <div class="w-full">
                        <dl class="text-gray-900 divide-y divide-gray-200 text-white divide-gray-700">
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg text-gray-400">
                                    Date Of Birth
                                </dt>
                                <dd class="text-lg font-semibold">
                                    <form action="<?php echo e(route('user.update.birthdate')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input type="date" name="date_of_birth" value="<?php echo e($user->date_of_birth); ?>" class="w-full py-2 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-500 dark:bg-gray-800 dark:text-white" onclick="document.getElementById('update-dob-btn').style.display = 'block';"   style="background-color: transparent;">
                                        <div class="mt-2">
                                            <button id="update-dob-btn" type="submit" style="display: none;" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Update</button>
                                        </div>
                                    </form>
                                </dd>
                            </div>
                        
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg text-gray-400">
                                    Gender
                                </dt>
                                <dd class="text-lg font-semibold">
                                    <form action="<?php echo e(route('user.update.gender')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <select name="gender" class="w-full py-2 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-500 dark:bg-gray-800 dark:text-white" onclick="document.getElementById('update-gender-btn').style.display = 'block';" style="background-color: transparent;">
                                            <option value="male" <?php echo e($user->gender === 'male' ? 'selected' : ''); ?>>Male</option>
                                            <option value="female" <?php echo e($user->gender === 'female' ? 'selected' : ''); ?>>Female</option>
                                        </select>
                                        <div class="mt-2">
                                            <button id="update-gender-btn" type="submit" style="display: none;" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Update</button>
                                        </div>
                                    </form>
                                </dd>
                            </div>
                        
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg text-gray-400">
                                    Address
                                </dt>
                                <dd class="text-lg font-semibold">
                                    <form action="<?php echo e(route('user.update.address')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input type="text" name="address" value="<?php echo e($user->address); ?>" class="w-full py-2 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-500 dark:bg-gray-800 dark:text-white" onclick="document.getElementById('update-address-btn').style.display = 'block';" style="background-color: transparent;">
                                        <div class="mt-2">
                                            <button id="update-address-btn" type="submit" style="display: none;" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Update</button>
                                        </div>
                                    </form>
                                </dd>
                            </div>
                        
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg text-gray-400">
                                    Phone Number
                                </dt>
                                <dd class="text-lg font-semibold">
                                    <form action="<?php echo e(route('user.update.phone')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input type="text" name="phone" value="<?php echo e($user->phone); ?>" class="w-full py-2 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-500 dark:bg-gray-800 dark:text-white" onclick="document.getElementById('update-phone-btn').style.display = 'block';" style="background-color: transparent;">
                                        <div class="mt-2">
                                            <button id="update-phone-btn" type="submit" style="display: none;" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Update</button>
                                        </div>
                                    </form>
                                </dd>
                            </div>
                        
                            <div class="flex flex-col py-3">
                                <dt class="mb-1 text-gray-500 md:text-lg text-gray-400">
                                    Email
                                </dt>
                                <dd class="text-lg font-semibold">
                                    <?php echo e($user->email); ?>

                                </dd>
                            </div>
                        </dl>
                        
                        
                        
                    </div>
                    <div class="w-full">
                        <dl
                            class="text-gray-900 divide-y divide-gray-200 text-white divide-gray-700"
                        ></dl>
                    </div>
                </div>
            </div>

            <!-- Social Links -->
            <div
                class="fixed right-2 bottom-20 flex flex-col rounded-sm bg-gray-200 text-gray-500 bg-gray-200/80 text-gray-700 hover:text-gray-600 hover:text-gray-400"
            >
                <a href="<?php echo e($user->linkedin); ?>">
                    <div class="p-2 hover:text-primary hover:text-primary">
                        <svg
                            class="lg:w-6 lg:h-6 xs:w-4 xs:h-4 text-blue-500"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z"
                                clip-rule="evenodd"
                            />
                            <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
                        </svg>
                    </div>
                    youtube
                </a>
                <a href="<?php echo e($user->twitter); ?>">
                    <div class="p-2 hover:text-primary hover:text-primary">
                        <svg
                            class="lg:w-6 lg:h-6 xs:w-4 xs:h-4 text-gray-900"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95v-5.62l5.4 2.819-5.4 2.801Z"
                            />
                        </svg>
                    </div>
                    youtube
                </a>
                <a href="<?php echo e($user->facebook); ?>">
                    <div
                        class="p-2 hover:text-blue-500 hover:text-blue-500"
                    >
                        <svg
                            class="lg:w-6 lg:h-6 xs:w-4 xs:h-4 text-blue-700"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                    youtube
                </a>
                <a href="<?php echo e($user->youtube); ?>">
                    <div class="p-2 hover:text-primary hover:text-primary">
                        <svg
                            class="lg:w-6 lg:h-6 xs:w-4 xs:h-4 text-red-600"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                    youtube
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Photo by '@jessbaileydesigns' & '@von_co' on Unsplash -->

<script
    src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/alpine.min.js"
    defer
></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.book', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Youcode\OneDrive\Desktop\youlink\resources\views/user/profile.blade.php ENDPATH**/ ?>