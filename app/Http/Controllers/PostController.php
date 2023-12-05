<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Barryvdh\Debugbar\Facades\Debugbar;
use Exception;

class PostController extends Controller
{
    public function index()
    {
        Debugbar::info('I\'m info!');
        Debugbar::error('I\'m error!');
        Debugbar::warning('I\'m warning!');
        Debugbar::addMessage('I\'m addMessage!');

        Debugbar::startMeasure('Blockade', 'Render message');

        try {
            throw new Exception('Try Message!');
        } catch (Exception $e) {
            Debugbar::addException($e);
        }

        $posts = Post::all();

        Debugbar::info($posts);
        
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $post = new Post();

        return view('posts.create', compact('post'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'description' => 'required',
        ]);

        $post = new Post();
        $post->title = $validated['title'];
        $post->description = $validated['description'];
        $post->save();

        return to_route('posts.index');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validated([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $post->update($validated);

        // $post = Post::findOrFail($id);

        // $post->title = $validated['title'];
        // $post->description = $validated['description'];

        // $post->save();

        return to_route('posts.show');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return to_route('posts.index');
    }
}
