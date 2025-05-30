@extends('layouts.app')  <!-- Pārņem layout -->

@section('title', 'Books')  <!-- Nosaukums, kas tiks ielādēts head sadaļā -->

@section('content')  <!-- Saturs, kas tiks ielikts layout content vietā -->

<h1>New contact</h1>
<form action="{{ route('contacts.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="name goes here">
    <input type="email" name="email" placeholder="email goes here">
    <input type="text" name="question" placeholder="question goes here">
    <input type="submit" value="Create">
</form>

@endsection
