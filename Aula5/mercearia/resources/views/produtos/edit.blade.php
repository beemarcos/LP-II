@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Atualizando Produto</div>

                    <div class="panel-body">

                        {!! Form::model($produto,array('route'=>['produto.update',$produto->id],'method'=>'PUT')) !!}
                            <div class="form-group">
                                {!! Form::label('nome','Nome') !!}
                                {!! Form::text('nome',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('id_categoria','Categoria') !!}
                                {!! Form::number('id_categoria',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::button('Update',['type'=>'submit','class'=>'btn btn-primary']) !!}
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
