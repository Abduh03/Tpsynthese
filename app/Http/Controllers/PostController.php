<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // Validation rules for post creation
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        // Create a new post record with validated data
        $post = Post::create($validatedData);

        // Attach tags to the post
        if ($request->has('tags')) {
            $post->tags()->attach($request->tags); // Assuming 'tags' is an array of tag IDs sent from the form
        }

        // Redirect the user to the index page for posts
        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return redirect()->route('posts.index');
    }
    

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
