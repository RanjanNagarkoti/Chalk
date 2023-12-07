<div class="mb-3">
    {!! Form::label('name', 'Product Name', ['class' => 'form-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="mb-3">
    {!! Form::label('body', 'Product description', ['class' => 'form-label']) !!}
    {!! Form::textArea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="mb-3">
    <button class="btn btn-primary" type="submit">Submit</button>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
