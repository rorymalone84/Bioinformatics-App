<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
    <table
        class="mx-auto max-w-4xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden"
    >
        <thead class="bg-gray-200 dark:bg-gray-900">
            <tr class="text-left dark:text-blue-200">
                @foreach ($headers as $header)
                    <th class="font-semibold text-sm uppercase px-6 py-4">{{ $header }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-800 dark:bg-gray-800">
            {{ $slot }}
        </tbody>
    </table>
</div>
