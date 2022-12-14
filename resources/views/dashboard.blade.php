<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-blue-100">
            {{Auth::user()->getRoleNames()->implode(' , '); }}'s {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-page.section heading="Welcome back, {{ Auth::user()->name }}">
        <x-menu-grid-wrap>           
            <x-menu-card cardHeading="Users" href="{{ route('admin.users.index')}}" >Search the users index here</x-menu-card>
            <x-menu-card cardHeading="Models" href="{{ route('admin.users.index')}}">Search Data Models index here</x-menu-card>
            @role('admin')
            <x-menu-card cardHeading="Stats" href="{{ route('admin.users.index')}}">Observe App statistics here</x-menu-card>
            <x-menu-card cardHeading="Content" href="{{ route('admin.users.index')}}" >Edit front page content and about section here</x-menu-card>
            <x-menu-card cardHeading="Permissions" href="{{ route('admin.permits')}}">Create and Edit user roles and permissions here</x-menu-card>
            @endrole
        </x-menu-grid-wrap>
    </x-page.section>
</x-app-layout>
