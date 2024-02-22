<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class=" sm:justify-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between w-full h-fit">
            <div class="">
                <a href="{{ route('dashboard') }}">
                    <img src="{{ asset('images/hisabKitabLogo-removebg.png') }}" class="w-20 h-18">
                </a>
            </div>
            <div class="self-center">
                @if (Route::has('login'))
                <div class="flex gap-4">
                    @auth
                    <a href="{{ url('/hisabkitab') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class=" font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                    @endauth
                </div>
                @endif
            </div>
        </div>
        <hr>
        <div class="mx-20 flex mt-16 justify-between">
            <div class="text-white flex ml-8 items-center">
                <div class="">
                    <h1 class="mb-4 text-7xl">Hisab Kitab</h1>
                    <span class="text-xl">Personal Pocket Management System</span>
                    <div class="w-[27rem] text-sm mt-2 text-[#9BA3AF]">Hisab Kitab, the ultimate solution for personal
                        pocket
                        management.
                        With Hisab
                        Kitab, gone
                        are the days of
                        financial disarray and scattered receipts. This innovative system empowers you to effortlessly
                        track expenses, manage income, and achieve your budgetary goals, all from the convenience of
                        your pocket.
                    </div>
                    <div class="mt-8 flex gap-10 ml-4">
                        @auth
                        <a href="{{ url('/hisabkitab') }}" class="font-semibold text-white dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <div class="rounded-lg bg-gray-600  px-4 py-2 hover:text-[#ff9933] ">
                                Dashboard
                            </div>
                        </a>
                        @else
                        <a href="{{ route('login') }}" class="font-semibold text-black hover:text-white dark:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <div class=" rounded-lg bg-[#ff9933] px-4 py-2">
                                Sign in
                            </div>
                        </a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class=" font-semibold text-gray-600 hover:text-white dark:text-gray-900 focus:rounded-sm focus:outline-red-500">
                            <div class=" rounded-lg bg-gray-600  px-4 py-2">
                                Sign up
                            </div>
                        </a>
                        @endif
                        @endauth
                    </div>
                </div>

            </div>
            <div class="rounded-3xl overflow-hidden">
                <img src="https://lh4.googleusercontent.com/_ArbKQ9PjTf3TNq9aJg3yEB7eQNahG2UDRc5xbp6V4CWbpJGV08efLMQNQGkzP5_SOIOe-aOjJNPU2IBZUW1JyWCkmMO5xIqHo-GQMmEJOnlEodE-PPZEzpt_QR5cJYaJFtoNS8m" alt="" class="h-[30rem] w-[40rem]">
            </div>
        </div>
    </div>
</body>

</html>