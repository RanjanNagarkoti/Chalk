@extends('layouts.master')
@section('content')
    <section class="d-flex justify-content-between align-items-center my-3">
        <h1>Posts</h1>
        <div>
            <a href="{{ route('posts.index') }}" class="btn btn-sm btn-primary">Go Back</a>
        </div>
    </section>

    <section>
        <div class="card" style="width: 20rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <hr>
                <p class="card-text">{{ $post->description }}</p>
                <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="card-link">Edit</a>
                <a href="{{ route('posts.destroy', ['post' => $post->id]) }}" class="card-link">Delete</a>
            </div>
        </div>
    </section>
@endsection
