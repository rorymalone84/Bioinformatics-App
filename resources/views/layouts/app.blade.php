<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
x-cloak
x-data="{darkMode: localStorage.getItem('dark') === 'true'}"
x-init="$watch('darkMode', val => localStorage.setItem('dark', val))"
x-bind:class="{'dark': darkMode}"
>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>


        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <style> [x-cloak] { display: none; } </style>
        <link rel="stylesheet" href="https://pyscript.net/alpha/pyscript.css" />
        <script defer src="https://pyscript.net/alpha/pyscript.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-700">
            @include('layouts.navigation')
            

            <!-- Page Heading -->
            <header class="bg-white shadow dark:bg-gray-800 ">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 ">
                    {{ $header }}
                </div>                
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
