<x-app-layout>
    <x-slot name="header">
        <h2
            class="font-semibold text-xl text-gray-800 leading-tight dark:text-blue-100"
        >
            {{ __("Users") }}
        </h2>
        <x-filter placeholder="Search for name or role"/>
    </x-slot>

    <x-page.section heading="Click on a name to view">
            <div class="overflow-x-auto w-full">
                <x-table.table :headers="['Name','Role','Models']">
                    @foreach($users as $user)
                    <tr>
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-3">
                                <div>
                                    <p class="dark:text-fuchsia-200">
                                        {{ $user->name }}                                        
                                    </p>
                                    <p
                                        class="text-gray-500 text-sm font-semibold tracking-wide dark:text-fuchsia-700"
                                    >
                                        {{ $user->email}}                                        
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <div class="flex items-center space-x-3">
                                <div>
                                    <p class="dark:text-fuchsia-300">
                                        {{$user->getRoleNames()->implode(', '); }}
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <div class="flex items-center space-x-3">
                                <div>
                                    <p class="dark:text-fuchsia-300">1</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </x-table.table>
            </div>
    </x-page.section>

    {{ $users->links() }}
</x-app-layout>
