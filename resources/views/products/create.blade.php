@extends('layouts.master')
@section('content')
    <section class="d-flex justify-content-between align-items-center my-3">
        <h1>New Product</h1>
        <div>
            <a href="{{ route('products.index') }}" class="btn btn-sm btn-primary">Go Back</a>
        </div>
    </section>

    <section class="row justify-content-center">
        {!! Form::model($product, [
            'route' => 'products.store',
            'enctype' => 'multipart/form-data',
            'class' => 'col-6 border p-3 rounded shadow',
        ]) !!}
        @include('products.form')
        {!! Form::close() !!}
    </section>
@endsection
