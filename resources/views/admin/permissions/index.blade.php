<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-blue-100">
            {{ __('Permissions') }}
        </h2>
        <div class="flex justify-end">
            <x-page.link-button href="{{route('admin.permissions.create')}}" class="bg-green-400 dark:bg-green-700 dark:hover:bg-green-500">Create Permission</x-page.link-button>
        </div> 
    </x-slot>

    <x-page.section heading="Manage Permissions here">
        <div class="overflow-x-auto w-full">
            <x-table.table :headers="['Permissions','']">
                @foreach($permissions as $permission)
                <tr>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-3">
                            <div>
                                <p class="dark:text-fuchsia-200">
                                    {{ $permission->name }}                                        
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 flex justify-end">
                        <div class="flex">
                            <x-page.link-button href="/dashboard" class="bg-blue-600 text-blue-100 dark:bg-blue-200 dark:text-black">Edit</x-page.link-button>
                            <x-page.link-button href="/dashboard" class="bg-red-600 text-blue-100 dark:bg-red-700 dark:text-grey-100">Delete</x-page.link-button>                    
                        </div>
                    </td>
                </tr>
                @endforeach
            </x-table.table>
        </div>
    </x-page.section>
</x-app-layout>