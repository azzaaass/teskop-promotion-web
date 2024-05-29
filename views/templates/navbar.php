<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>

    <link rel="icon" type="image/png" sizes="16x16" href="../public/images/favicon.png">
    <!-- TAILWIND -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FLOWBITE -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header class="fixed w-full shadow z-50">
        <nav class="bg-black border-gray-200 py-2.5">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
                <a href="#" class="flex items-center">
                    <img src="../public/images/telu.png" class="h-6 mr-3 sm:h-9" alt="Logo teskop" />
                    <span class="self-center text-2xl font-bold whitespace-nowrap text-gray-700">Teskop</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <a href="admin/login.php"
                        class="text-white bg-[#b7292e] hover:bg-[#97151b] focus:ring-4 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0">Login</a>
                    <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="landing-page.php" class="block py-2 pl-3 pr-4 rounded
                            <?php if ($page == 'landing-page') {
                                echo ' bg-[#b7292e]';
                                echo ' text-white';
                            } else {
                                echo ' text-gray-500';
                                echo ' hover:text-white';
                                echo ' lg:bg-transparent';
                            } ?>">Home</a>
                        </li>
                        <li>
                            <a href="about.php" class="block py-2 pl-3 pr-4 rounded
                            <?php if ($page == 'about') {
                                echo ' bg-[#b7292e]';
                                echo ' text-white';
                            } else {
                                echo ' text-gray-500';
                                echo ' hover:text-white';
                                echo ' lg:bg-transparent';
                            } ?>">About</a>
                        </li>
                        <li>
                            <a href="coffee.php" class="block py-2 pl-3 pr-4 rounded
                            <?php if ($page == 'coffee') {
                                echo ' bg-[#b7292e]';
                                echo ' text-white';
                            } else {
                                echo ' text-gray-500';
                                echo ' hover:text-white';
                                echo ' lg:bg-transparent';
                            } ?>">Coffess</a>
                        </li>
                        <li>
                            <a href="blog.php" class="block py-2 pl-3 pr-4 rounded
                            <?php if ($page == 'blog') {
                                echo ' bg-[#b7292e]';
                                echo ' text-white';
                            } else {
                                echo ' text-gray-500';
                                echo ' hover:text-white';
                                echo ' lg:bg-transparent';
                            } ?>">Blog</a>
                        </li>
                        <li>
                            <a href="contact.php" class="block py-2 pl-3 pr-4 rounded
                            <?php if ($page == 'contact') {
                                echo ' bg-[#b7292e]';
                                echo ' text-white';
                            } else {
                                echo ' text-gray-500';
                                echo ' hover:text-white';
                                echo ' lg:bg-transparent';
                            } ?>">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>