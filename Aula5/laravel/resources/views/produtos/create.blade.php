@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Novo Produto</h1>
    {!! Form::open(['url'=>'produtos/store']) !!}

        <!-- Nome Form Input -->
        <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', null, ['class'=>'form-control']) !!}
        </div>
        
        <!-- Categoria Form Input -->
        <div class="form-group">
        {!! Form::label('categoria', 'Categoria:') !!}
        {!! Form::number('categoria', null, ['class'=>'form-control']) !!}
        </div>
        
        <div class="form-group">
        {!! Form::submit('Criar Produto', ['class'=>'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}
</div>
@endsection