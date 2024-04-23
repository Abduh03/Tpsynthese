<!-- resources/views/photo_tag_post.blade.php -->

@extends('layouts.app')

@section('content')
    <div>
        <h1>Photos</h1>
        <!-- Afficher la liste des photos -->
        <ul>
            @foreach($photos as $photo)
                <li>
                    <!-- Afficher les détails de la photo -->
                    <p><strong>URL :</strong> {{ $photo->url }}</p>
                    <!-- Afficher les tags associés à la photo -->
                    <p><strong>Tags :</strong>
                        @foreach($photo->tags as $tag)
                            {{ $tag->name }},
                        @endforeach
                    </p>
                    <!-- Afficher les commentaires associés à la photo -->
                    <p><strong>Commentaires :</strong>
                        @foreach($photo->comments as $comment)
                            {{ $comment->content }},
                        @endforeach
                    </p>
                    <!-- Bouton pour supprimer la photo -->
                    <form action="{{ route('photos.destroy', $photo) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>

    <div>
        <h1>Tags</h1>
        <!-- Afficher la liste des tags -->
        <ul>
            @foreach($tags as $tag)
                <li>
                    <!-- Afficher les détails du tag -->
                    <p><strong>Nom :</strong> {{ $tag->name }}</p>
                    <!-- Afficher les photos associées au tag -->
                    <p><strong>Photos :</strong>
                        @foreach($tag->photos as $photo)
                            {{ $photo->url }},
                        @endforeach
                    </p>
                </li>
            @endforeach
        </ul>
    </div>

    <div>
        <h1>Posts</h1>
        <!-- Afficher la liste des posts -->
        <ul>
            @foreach($posts as $post)
                <li>
                    <!-- Afficher les détails du post -->
                    <p><strong>Titre :</strong> {{ $post->title }}</p>
                    <p><strong>Contenu :</strong> {{ $post->content }}</p>
                    <!-- Afficher les tags associés au post -->
                    <p><strong>Tags :</strong>
                        @foreach($post->tags as $tag)
                            {{ $tag->name }},
                        @endforeach
                    </p>
                    <!-- Afficher les commentaires associés au post -->
                    <p><strong>Commentaires :</strong>
                        @foreach($post->comments as $comment)
                            {{ $comment->content }},
                        @endforeach
                    </p>
                    <!-- Bouton pour supprimer le post -->
                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
