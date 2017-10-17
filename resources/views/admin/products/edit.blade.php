@extends('app')

@section('content')
    <div class="container">
        <h3>Editando produto: {{$product->name}}</h3>

        {!! Form::model($product,['route'=>['admin.products.update',$product->id]]) !!}

        @include('admin.products._form')

        <div class="form-group">
            {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection