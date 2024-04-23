<!-- resources/views/photos/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Modifier la Photo</h1>
    <form action="{{ route('photos.update', $photo) }}" method="post">
        @csrf
        @method('PUT')
        <label for="url">URL :</label><br>
        <input type="text" id="url" name="url" value="{{ $photo->url }}"><br>
        <button type="submit">Modifier</button>
    </form>
@endsection
