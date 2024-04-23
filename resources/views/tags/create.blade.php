<!-- resources/views/tags/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Créer un nouveau Tag</h1>
    <form action="{{ route('tags.store') }}" method="post">
        @csrf
        <label for="name">Nom :</label><br>
        <input type="text" id="name" name="name"><br>
        <button type="submit">Créer</button>
    </form>
@endsection
