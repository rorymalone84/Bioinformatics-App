<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-blue-100">
            {{ __('Roles and Permissions') }}
        </h2>
    </x-slot>

    <x-page.section heading="Update user roles and permissions here">
        <x-menu-grid-wrap>            
            <x-menu-card cardHeading="Roles" href="{{ route('admin.roles.index')}}" >Create and edit user roles here</x-menu-card>
            <x-menu-card cardHeading="Permissions" href="{{ route('admin.permissions.index')}}">Create edit or assign user roles here</x-menu-card>
            <x-menu-card cardHeading="Dashboard" href="{{ route('dashboard')}}" >return to the dashboard</x-menu-card>
        </x-menu-grid-wrap>
    </x-page.section>
</x-app-layout>