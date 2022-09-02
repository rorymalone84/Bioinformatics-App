<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-blue-100">
            {{ __('Edit Role') }}
        </h2>
        <div class="flex justify-end">
            <x-page.link-button href="{{route('admin.roles.index')}}" class="bg-blue-400 dark:bg-blue-700 dark:hover:bg-blue-500"> < Permissions Index</x-page.link-button>
        </div> 
    </x-slot>

    <x-page.section heading="Edit existing role">
        <div class="flex flex-col">
        <form method="POST" action="{{ route('admin.roles.update', $role) }}">
            @csrf
            @method('PUT')
          <div class="sm:col-span-6">
            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-blue-100"> Edit name of Role </label>
            <div class="mt-1">
              <input type="text" id="name" name="name" value="{{$role->name}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>
            @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
          </div>
          <div class="sm:col-span-6 pt-5">
            <button type="submit" class="px-4 py-2 bg-green-500 text-gray-100 hover:bg-green-700 rounded-md">Update</button>
          </div>
        </form>
        </div>
    </x-page.section>
</x-app-layout>