<!-- resources/views/photos/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Détails de la Photo</h1>
    <p><strong>URL :</strong> {{ $photo->url }}</p>
    <a href="{{ route('photos.edit', $photo) }}">Modifier</a>
    <form action="{{ route('photos.destroy', $photo) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>
@endsection
