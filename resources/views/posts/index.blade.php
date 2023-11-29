@extends('layouts.master')
@section('content')
    <section class="d-flex justify-content-between align-items-center my-3">
        <h1>Posts</h1>
        <div>
            <a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary">New Post</a>
        </div>
    </section>

    <section class="d-flex flex-wrap gap-5 justify-content-between">
        @foreach ($posts as $post)
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <hr>
                    <p class="card-text">{{ $post->description }}</p>
                    <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="card-link">View More</a>
                </div>
            </div>
        @endforeach
    </section>
@endsection
