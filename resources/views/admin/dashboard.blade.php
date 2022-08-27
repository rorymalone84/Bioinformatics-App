<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-blue-100">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <x-page.section heading="welcome back">
    </x-page.section>

    <x-page.section heading="menu">
        <x-menu-grid-wrap>            
            <x-menu-card cardHeading="Users">Search the users index here</x-menu-card>
            <x-menu-card cardHeading="Data Models">Search Data Models index here</x-menu-card>
            <x-menu-card cardHeading="Stats">Observe App statistics here</x-menu-card>
            <x-menu-card cardHeading="Site Content">Edit front page content and about section here</x-menu-card>
        </x-menu-grid-wrap>
    </x-page.section>
</x-app-layout>
