<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                <form action="{{ route('books.update', $editBook->id) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <!-- Title -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="title" id="title"
                               value="{{ old('title', $editBook->title) }}"
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        @error('title')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Author -->
                    <div>
                        <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                        <input type="text" name="author" id="author"
                               value="{{ old('author', $editBook->author) }}"
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        @error('author')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Release Date -->
                    <div>
                        <label for="released_at" class="block text-sm font-medium text-gray-700">Release Date</label>
                        <input type="date" name="released_at" id="released_at"
                               value="{{ old('released_at', $editBook->released_at) }}"
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        @error('released_at')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit -->
                    <div class="flex justify-end">
                        <a href="{{ route('books.index') }}"
                           class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400 mr-2">
                            Cancel
                        </a>
                        <button type="submit"
                                class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
