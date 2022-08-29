<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-blue-100">
            {{ __('Python Playground') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Experiment with Pyscript here
                </div>
            </div>
        </div>
    </div>

    <!-- experiment with code editor -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="underline mb-6">Experiment with Pyscript editor</h1>
                    <py-repl></py-repl>
                </div>
            </div>
        </div>
    </div>

    <!-- experiment with code -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="underline mb-6">Experiment with Code Result</h1>
                    <!-- script to experiment in -->
                    <py-script> print(1+1) </py-script>
                    <!-- end of script -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>