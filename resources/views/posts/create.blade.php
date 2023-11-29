@extends('layouts.master')
@section('content')
    <section class="d-flex justify-content-between align-items-center my-3">
        <h1>New Post </h1>
        <div>
            <a href="{{ route('posts.index') }}" class="btn btn-sm btn-primary">Go Back</a>
        </div>
    </section>

    <section>
        <form action="{{ route('posts.store') }}" method="POST">
            @include('posts.form')
        </form>
    </section>
@endsection
