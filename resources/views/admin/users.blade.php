<x-app-layout>
    <x-slot name="header">
        <h2
            class="font-semibold text-xl text-gray-800 leading-tight dark:text-blue-100"
        >
            {{ __("Users") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-x-auto w-full">
                <table
                    class="mx-auto max-w-4xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden"
                >
                    <thead class="bg-gray-200 dark:bg-gray-900">
                        <tr class="text-left dark:text-blue-200">
                            <th
                                class="font-semibold text-sm uppercase px-6 py-4"
                            >
                                name
                            </th>
                            <th
                                class="font-semibold text-sm uppercase px-6 py-4"
                            >
                                role
                            </th>
                            <th
                                class="font-semibold text-sm uppercase px-6 py-4 text-center"
                            > Edit
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-800 dark:bg-gray-800">
                        @foreach ($users as $user)    
                        <tr>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div>
                                        <p class="dark:text-fuchsia-300">{{ $user->name }}</p>
                                        <p
                                            class="text-gray-500 text-sm font-semibold tracking-wide dark:text-fuchsia-900"
                                        >
                                            {{ $user->email}}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex items-center space-x-3">
                                    <div>
                                        <p class="dark:text-fuchsia-300">admin</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <a
                                    href="#"
                                    class="text-purple-800 hover:underline"
                                    >Button</a
                                >
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{ $users->onEachSide(5)->links() }}
</x-app-layout>
