<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-blue-100">
            {{ __('Permissions') }}
        </h2>
        <div class="flex justify-end">
            <x-page.link-button href="#" class="bg-green-400 dark:bg-green-700">Create Permission</x-page.link-button>
        </div> 
    </x-slot>

    <x-page.section heading="Manage Roles here">
        <div class="overflow-x-auto w-full">
            <x-table.table :headers="['Role','Edit','Delete']">
                @foreach($permissions as $permissions)
                <tr>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-3">
                            <div>
                                <p class="dark:text-fuchsia-200">
                                    {{ $permission->name }}                                        
                                </p>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex items-center space-x-3">
                            <x-page.link-button href="/dashboard" class="bg-blue-600 text-blue-100 dark:bg-blue-200 dark:text-black">Edit</x-page.link-button>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="flex items-center space-x-3">
                            <x-page.link-button href="/dashboard" class="bg-blue-600 text-blue-100 dark:bg-blue-200 dark:text-black">Delete</x-page.link-button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </x-table.table>
        </div>
    </x-page.section>

</x-app-layout>