<!-- resources/views/tags/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Liste des Tags</h1>
    <ul>
        @foreach ($tags as $tag)
            <li><a href="{{ route('tags.show', $tag) }}">{{ $tag->name }}</a></li>
        @endforeach
    </ul>
    <a href="{{ route('tags.create') }}">Créer un nouveau tag</a>
@endsection
