@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Produtos</div>

                    <div class="panel-body">

                        {!! Form::open(array('route'=>'produto.store')) !!}
                            <div class="form-group">
                                {!! Form::label('nome','Nome') !!}
                                {!! Form::text('nome',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                <label for="">Categoria</label>
                                <select class="form-control" name="id_categoria" id="categorias">
                                  <option value="0" disable="true" selected="true">=== Selecione a Categoria ===</option>
                                    @foreach ($categorias as $key => $value)
                                      <option value="{{$value->id}}">{{ $value->nome }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                {!! Form::button('Criar',['type'=>'submit','class'=>'btn btn-primary']) !!}
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
