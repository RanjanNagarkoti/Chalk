@extends('layouts.master')
@section('content')
    <section class="d-flex justify-content-between align-items-center my-3">
        <h1>Edit Post</h1>
        <div>
            <a href="{{ route('posts.index') }}" class="btn btn-sm btn-primary">Go Back</a>
        </div>
    </section>

    <section>
        <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="POST">
            @method('PUT')
            @include('posts.form')
        </form>
    </section>
@endsection
