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
                <div class="d-flex">
                    <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-sm btn-primary me-1">Edit</a>
                    <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger ms-1">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
