@extends('layouts.master')
@section('content')
    <section class="d-flex justify-content-between align-items-center my-3">
        <h1>Products</h1>
        <div>
            <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary">New Product</a>
        </div>
    </section>

    <section class="d-flex flex-wrap gap-5 justify-content-evenly">
        @foreach ($products as $product)
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->body }}</p>
                    <a href="{{ route('products.show', ['product' => $product]) }}" class="btn btn-sm btn-primary">View
                        More</a>
                </div>
            </div>
        @endforeach
    </section>
@endsection
