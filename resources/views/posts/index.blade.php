<!-- resources/views/posts/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Liste des Posts</h1>
    <ul>
        @foreach($posts as $post)
            <li><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>
@endsection
