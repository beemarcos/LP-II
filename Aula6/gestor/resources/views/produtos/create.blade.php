@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Produtos</div>

                    <div class="panel-body">

                        {!! Form::open(array('route'=>'produto.store')) !!}
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
                                    <select class="form-control" name="id_categoria" id="id_categoria">
                                    <option>=== Selecione a Categoria ===</option>
                                        @foreach ($categorias as $key => $value)
                                            <option value="{{$value->id}}">{{ $value->nome }}</option>
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
