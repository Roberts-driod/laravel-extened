<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Book details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 space-y-4">

                <div>
                    <h2 class="text-2xl font-bold">{{ $book->title }}</h2>
                    <h3 class="text-lg text-gray-600">{{ $book->author }}</h3>
                    <p class="text-gray-500">{{ \Carbon\Carbon::parse($book->released_at)->format('Y-m-d') }}</p>
                </div>

                <div class="flex space-x-4">
                    <a href="{{ route('books.index') }}"
                       class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">
                        ← All books
                    </a>

                    <a href="{{ route('books.edit', $book) }}"
                       class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">
                        Edit
                    </a>

                    <form action="{{ route('books.destroy', $book) }}" method="POST"
                          onsubmit="return confirm('Are you sure you want to delete this book?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                            Delete
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
