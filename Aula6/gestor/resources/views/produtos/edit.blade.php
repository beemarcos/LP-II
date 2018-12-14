@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Atualizando Produto</div>

                    <div class="panel-body">

                        {!! Form::model($produto,array('route'=>['produto.update',$produto->id],'method'=>'PUT')) !!}
                        <div class="form-group row">
                            <div class="col-sm-1">
                                {!! Form::label('nome','Nome') !!}
                            </div>
                            <div class="col-sm-7">
                                {!! Form::text('nome',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="col-sm-2">
                                {!! Form::label('preco','Preço R$') !!}
                            </div>    
                            <div class="col-sm-2">
                                {!! Form::number('preco',null,['class'=>'form-control','step' => '0.01']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-1">
                                {!! Form::label('icms','ICMS') !!}
                            </div>
                            <div class="col-sm-2">
                                {!! Form::number('icms',null,['class'=>'form-control','step' => '0.01']) !!}
                            </div>
                            <div class="col-sm-1">
                                <label for="id_categoria">Categoria</label>
                            </div>    
                            <div class="col-sm-8">
                                <select class="form-control" name="id_categoria" id="categorias">
                                    <option value="0" disable="true" selected="true">=== Selecione a Categoria ===</option>
                                    @foreach ($categorias as $key => $value)
                                        @if ($value->id == $produto->id_categoria)
                                            <option selected value="{{$value->id}}">{{ $value->nome }}</option>
                                        @else
                                            <option value="{{$value->id}}">{{ $value->nome }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-1">
                                {!! Form::label('saldo','Saldo') !!}
                            </div>
                            <div class="col-sm-2">
                                {!! Form::number('saldo',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="col-sm-1">
                                {!! Form::label('custo','Custo') !!}
                            </div>
                            <div class="col-sm-2">
                                {!! Form::number('custo',null,['class'=>'form-control','step' => '0.01']) !!}
                            </div>
                            <div class="col-sm-2">
                                {!! Form::label('perecivel','Produto perecivel?') !!}
                            </div>
                            <div class="col-sm-1">
                                <p>Sim</p>{!! Form::radio('perecivel', '1') !!}
                            </div>
                            <div class="col-sm-1">
                                <p>Não</p>{!! Form::radio('perecivel', '0') !!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!! Form::button('Salvar',['type'=>'submit','class'=>'btn btn-success']) !!}

                            {{ link_to_route('produto.index','Voltar',null,['class'=>'btn btn-primary']) }}
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
