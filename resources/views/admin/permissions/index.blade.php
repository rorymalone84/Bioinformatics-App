<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-blue-100">
            {{ __('Permissions') }}
        </h2>
        <div class="flex justify-end">
            <x-page.link-button href="{{route('admin.permissions.create')}}" class="bg-green-400 dark:bg-green-700 dark:hover:bg-green-500">Create Permission</x-page.link-button>
        </div> 
    </x-slot>

    <x-page.section heading="Manage User Role Permissions here">
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
                            <x-page.link-button href="{{route('admin.permissions.edit', $permission->id)}}" class="bg-blue-600 text-blue-100 dark:bg-blue-200 dark:text-black">Edit</x-page.link-button>
                            <form method="POST" action="{{ route('admin.permissions.destroy', $permission->id)}}" onsubmit="return confirm('Are you sure you wish to delete {{ $permission->name }}?')" >
                                @csrf
                                @method('delete')
                                <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                            </form>                    
                        </div>
                    </td>
                </tr>
                @endforeach
            </x-table.table>
        </div>
    </x-page.section>
</x-app-layout>