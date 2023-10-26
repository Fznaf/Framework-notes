<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Register Form') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <form action="{{route('input.store')}}" method="post" enctype="multipart/form-data" class="flex flex-col space-x-4">
        @csrf
        <input type="text" name="riderName" placeholder="Rider Name">
        <input type="text" name="formName" placeholder="Form Name">
        <input type="number" name="rate" step="0.1" placeholder="Rating for this form (1-5)" min="1" max="5">
        <input type="file" name="image" accept="image/*" placeholder="Select Image">
        <button type="submit" name="submit" Value="Input" class="py-2 px-4 bg-blue-500 text-white rounded">Submit</button>
    </form>
            </div>
        </div>
    </div>
</x-app-layout>