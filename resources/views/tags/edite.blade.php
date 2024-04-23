<!-- resources/views/tags/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Modifier le Tag</h1>
    <form action="{{ route('tags.update', $tag) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Nom :</label><br>
        <input type="text" id="name" name="name" value="{{ $tag->name }}"><br>
        <button type="submit">Modifier</button>
    </form>
@endsection
