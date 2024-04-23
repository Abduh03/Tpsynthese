<!-- resources/views/photos/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Ajouter une nouvelle Photo</h1>
    <form action="{{ route('photos.store') }}" method="post">
        @csrf
        <label for="url">URL :</label><br>
        <input type="text" id="url" name="url"><br>
        <button type="submit">Ajouter</button>
    </form>
@endsection
