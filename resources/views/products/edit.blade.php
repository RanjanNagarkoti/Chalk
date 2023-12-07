@extends('layouts.master')
@section('content')
    <section class="d-flex justify-content-between align-items-center my-3">
        <h1>Edit Product</h1>
        <div>
            <a href="{{ route('products.show', ['product' => $product]) }}" class="btn btn-sm btn-primary">Go Back</a>
        </div>
    </section>

    <section class="row justify-content-center">
        {!! Form::model($product, [
            'route' => ['products.update', 'product' => $product],
            'enctype' => 'multipart/form-data',
            'method' => 'PUT',
            'class' => 'col-6 border p-3 rounded shadow',
        ]) !!}

        @include('products.form')
        {!! Form::close() !!}
    </section>
@endsection
