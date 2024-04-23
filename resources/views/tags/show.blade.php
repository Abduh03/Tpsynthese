<!-- resources/views/tags/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Détails du Tag</h1>
    <p><strong>Nom :</strong> {{ $tag->name }}</p>
    <a href="{{ route('tags.edit', $tag) }}">Modifier</a>
    <form action="{{ route('tags.destroy', $tag) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>
@endsection
