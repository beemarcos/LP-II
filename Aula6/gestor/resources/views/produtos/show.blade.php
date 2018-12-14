@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">



                <div class="panel panel-default">
                    <div class="panel-heading">
                        <label>Nome: </label>
                        {{ $produto->nome }}
                    </div>

                    <div class="panel-heading">
                        <label>Categoria: </label>
                        @foreach ($categorias as $key => $value)
                            @if ($value->id == $produto->id_categoria)
                                {{ $value->nome }}
                            @endif
                        @endforeach
                    </div>
                    <div class="panel-heading">
                        <label>Preço:   R$</label>
                        {{ $produto->preco }}
                    </div>
                    <div class="panel-heading">
                        <label>Saldo:</label>
                        {{ $produto->saldo }}
                    </div>
                    <div class="panel-heading">
                        <label>Custo:</label>
                        {{ $produto->custo }}
                    </div>
                    <div class="panel-heading">
                        <label>Perecível:</label>
                        @if ($produto->perecivel)
                            Sim 
                        @else
                            Não
                        @endif
                    </div>
                    <div class="panel-heading">
                        <label>ICMS:</label>
                        {{ $produto->icms }}
                    </div>
                </div>
                {{ link_to_route('produto.index','Voltar',null,['class'=>'btn btn-primary']) }}
            </div>
        </div>
    </div>
@endsection
