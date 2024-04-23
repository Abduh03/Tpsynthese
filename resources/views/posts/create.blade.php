<!-- resources/views/posts/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Créer un Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Titre :</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="content">Contenu :</label><br>
        <textarea id="content" name="content"></textarea><br>
        <button type="submit">Créer</button>
    </form>
@endsection
