<!-- resources/views/photos/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Liste des Photos</h1>
    <ul>
        @foreach ($photos as $photo)
            <li><a href="{{ route('photos.show', $photo) }}">{{ $photo->url }}</a></li>
        @endforeach
    </ul>
    <a href="{{ route('photos.create') }}">Ajouter une nouvelle photo</a>
@endsection
