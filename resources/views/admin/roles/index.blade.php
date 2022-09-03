<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-blue-100">
            {{ __('Roles') }}
        </h2>
        <div class="flex justify-end">
            <x-page.link-button href="{{route('admin.roles.create')}}" class="bg-green-400 dark:bg-green-700 dark:hover:bg-green-500">Create Role</x-page.link-button>
        </div>        
    </x-slot>

    <x-page.section heading="Manage Roles here">
        <div class="overflow-x-auto w-full">            
            <x-table.table :headers="['Role','']">
                @foreach($roles as $role)
                <tr>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-3">
                            <p class="dark:text-fuchsia-200">
                                {{ $role->name }}                                        
                            </p>
                        </div>
                    </td>
                    <td class="px-6 py-4 flex justify-end">
                        <div class="flex">
                            @if($role->name !== 'admin')
                            <x-page.link-button href="{{route('admin.roles.edit', $role->id)}}" class="bg-blue-600 text-blue-100 dark:bg-blue-200 dark:text-black">Edit</x-page.link-button>
                            <x-page.link-button href="{{route('admin.roles.destroy', $role->id)}}" class="bg-red-600 text-blue-100 dark:bg-red-700 dark:text-grey-100">Delete</x-page.link-button>
                            @else
                            <h3 class="font-semibold text-sm text-gray-800 leading-tight dark:text-blue-100">
                                {{ __('Admin role cant be updated') }}
                            </h3>                            
                            @endif           
                        </div>
                    </td>
                </tr>
                @endforeach
            </x-table.table>
        </div>
    </x-page.section>
</x-app-layout>