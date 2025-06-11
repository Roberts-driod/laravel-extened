<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 border border-red-300 rounded">
                        <ul class="list-disc list-inside text-red-600 text-sm">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('books.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <!-- Title -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="title" id="title"
                               value="{{ old('title') }}"
                               placeholder="Title goes here"
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        @error('title')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Author -->
                    <div>
                        <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                        <input type="text" name="author" id="author"
                               value="{{ old('author') }}"
                               placeholder="Author goes here"
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        @error('author')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Release Date -->
                    <div>
                        <label for="released_at" class="block text-sm font-medium text-gray-700">Release Date</label>
                        <input type="date" name="released_at" id="released_at"
                               value="{{ old('released_at') }}"
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        @error('released_at')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-end">
                        <a href="{{ route('books.index') }}"
                           class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400 mr-2">
                            Cancel
                        </a>
                        <button type="submit"
                                class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
