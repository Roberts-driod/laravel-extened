@extends('layouts.app')  <!-- Pārņem layout -->

@section('title', 'Books')  <!-- Nosaukums, kas tiks ielādēts head sadaļā -->

@section('content')  <!-- Saturs, kas tiks ielikts layout content vietā -->


<h1>Books</h1>
<a href="{{ route('books.create') }}">Create a book</a>
<ul>
    @foreach($books as $book)
        <li>
            <h2>{{ $book->title }}</h2>
            <div>
                <a href="{{ route('books.show', ['book' => $book->id]) }}">Show</a>
                <a href="{{ route('books.edit', ['book' => $book->id]) }}">Edit</a>
            </div>
        </li>
    @endforeach
</ul>

@endsection