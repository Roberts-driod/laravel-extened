@extends('layouts.app')  <!-- Pārņem layout -->

@section('title', 'Books')  <!-- Nosaukums, kas tiks ielādēts head sadaļā -->

@section('content')  <!-- Saturs, kas tiks ielikts layout content vietā -->


<h1>Contacts</h1>
<a href="{{ route('contacts.create') }}">Create a contact</a>
<ul>
    @foreach($contacts as $contact)
        <li>
            <h2>{{ $contact->name }}</h2>
            <p>{{$contact->email}}
        </li>
    @endforeach
</ul>

@endsection