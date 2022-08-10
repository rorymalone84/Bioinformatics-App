<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-blue-100">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg dark:bg-gray-600">
                <div class="font-semibold text-xl p-6 border-b border-gray-200 dark:text-blue-100">
                    Welcome back
                </div>
            </div>
        </div>
    </div>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-menu-grid-wrap>            
            <x-menu-card cardHeading="Users"/>
            <x-menu-card cardHeading="Data Models"/>
            <x-menu-card cardHeading="Stats"/>
            <x-menu-card cardHeading="Site Content"/>
        </x-menu-grid-wrap>
    </div>

</x-app-layout>
