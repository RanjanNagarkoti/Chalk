@extends('layouts.master')
@section('content')
    <section class="d-flex justify-content-between align-items-center my-3">
        <h1>Product Details</h1>
        <div>
            <a href="{{ route('products.index') }}" class="btn btn-sm btn-primary">Go Back</a>
        </div>
    </section>

    <section class="d-flex flex-wrap gap-5 justify-content-between">
        <div class="card" style="width: 20rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->body }}</p>
                <div class="d-flex">
                    <a href="{{ route('products.edit', ['product' => $product]) }}"
                        class="btn btn-sm btn-primary me-1">Edit</a>

                    {!! Form::open(['route' => ['products.destroy', 'product' => $product], 'method' => 'DELETE']) !!}
                    <button type="submit" class="btn btn-sm btn-secondary ms-1">Delete</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
@endsection
