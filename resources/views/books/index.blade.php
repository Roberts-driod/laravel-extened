<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <a href="{{ route('books.create') }}"
                   class="inline-block mb-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    + Create a Book
                </a>

                <ul class="space-y-4">
                    @foreach($books as $book)
                        <li class="border border-gray-200 rounded p-4">
                            <h2 class="text-lg font-semibold">{{ $book->title }}</h2>
                            <div class="mt-2 space-x-4">
                                <a href="{{ route('books.show', $book->id) }}" class="text-blue-600 hover:underline">Show</a>
                                <a href="{{ route('books.edit', $book->id) }}" class="text-yellow-600 hover:underline">Edit</a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
