<!-- resources/views/posts/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Modifier le Post</h1>
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Titre :</label><br>
        <input type="text" id="title" name="title" value="{{ $post->title }}"><br>
        <label for="content">Contenu :</label><br>
        <textarea id="content" name="content">{{ $post->content }}</textarea><br>
        <button type="submit">Mettre à jour</button>
    </form>
@endsection
