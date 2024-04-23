<!-- resources/views/posts/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Détails du Post</h1>
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>
    <h2>Tags:</h2>
        <ul>
            @foreach($post->tags as $tag)
                <li>{{ $tag->name }}</li>
            @endforeach
        </ul>

    <a href="{{ route('posts.edit', $post) }}">Modifier</a>
    <form action="{{ route('posts.destroy', $post) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>
@endsection
