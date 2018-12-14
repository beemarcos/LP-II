@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Atualizando Categoria</div>

                    <div class="panel-body">

                        {!! Form::model($categoria,array('route'=>['categoria.update',$categoria->id],'method'=>'PUT')) !!}
                            <div class="form-group">
                                {!! Form::label('nome','Nome') !!}
                                {!! Form::text('nome',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::button('Salvar',['type'=>'submit','class'=>'btn btn-success']) !!}
                                {{ link_to_route('categoria.index','Voltar',null,['class'=>'btn btn-primary']) }}
                            </div>
                        {!! Form::close() !!}

                    </div>
                </div>

                @if($errors->has())
                    <ul class="aler alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

            </div>
        </div>
    </div>
@endsection
