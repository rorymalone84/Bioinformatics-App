<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-blue-100">
            {{ __('Create Role') }}
        </h2>
        <div class="flex justify-end">
            <x-page.link-button href="{{route('admin.roles.index')}}" class="bg-blue-400 dark:bg-blue-700 dark:hover:bg-blue-500"> < Roles Index</x-page.link-button>
        </div>  
    </x-slot>

    <x-page.section heading="Create a new role">
        <div class="flex flex-col">
            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                <div class="flex flex-col">
                    <form method="POST" action="{{ route('admin.roles.store') }}">
                        @csrf
                    <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-blue-100"> Post name of role </label>
                        <div class="mt-1">
                        <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </div>
                        @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div class="sm:col-span-6 pt-5">
                        <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Create</button>
                    </div>
                    </form>
                </div>
            </div>      
        </div>
    </x-page.section>
</x-app-layout>