<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel 9 Vite 3 With Tailwind CSS</title>

    <!-- font:family -->
    <link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <!-- header -->
    <header class="z-50 header sticky top-0 bg-white shadow-xl flex items-center justify-between px-8 py-02">

        <h1 class="p-2">
            <img class="header-custom" src="{{ asset('images/header_logo.png') }}" alt="">
            <a href="#" class="block header-custom-text font-medium text-5xl allura text-green-600 hover:text-yellow-400 duration-700">Task Management System</a>
        </h1>

        <nav class="nav font-semibold text-lg">
            <ul class="flex">
                <li class="font-medium text-sm pr-4 pt-12 pl-4 cursor-pointer">
                    <a href="#" class="block border-b-2 border-opacity-0 text-green-600 hover:text-yellow-400 border-yellow-400 hover:border-opacity-100 duration-700">Tasks</a>
                </li>
                <li class="font-medium text-sm pr-4 pt-12 pl-4 cursor-pointer">
                    <a href="#" class="block border-b-2 border-opacity-0 text-green-600 hover:text-yellow-400 border-yellow-400 hover:border-opacity-100 duration-700">Household Account Books</a>
                </li>
                <li class="font-medium text-sm pr-4 pt-12 pl-4 cursor-pointer">
                    <a href="#" class="block border-b-2 border-opacity-0 text-green-600 hover:text-yellow-400 border-yellow-400 hover:border-opacity-100 duration-700">Schedules</a>
                </li>
                <li class="font-medium text-sm pr-4 pt-12 pl-4 cursor-pointer">
                    <a href="#" class="block border-b-2 border-opacity-0 text-green-600 hover:text-yellow-400 border-yellow-400 hover:border-opacity-100 duration-700">Files</a>
                </li>
                <li class="font-medium text-sm pr-4 pt-12 pl-4 cursor-pointer">
                    <a href="#" class="block border-b-2 border-opacity-0 text-green-600 hover:text-yellow-400 border-yellow-400 hover:border-opacity-100 duration-700">Settings</a>
                </li>
            </ul>
        </nav>

    </header>

    <!-- main -->
    <main class="z-10 bg-gray-200">
        @yield('content')
    </main>

</body>

</html>
