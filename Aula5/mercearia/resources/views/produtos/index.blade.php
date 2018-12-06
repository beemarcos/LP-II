@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                @if(Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">Produtos</div>

                    <div class="panel-body">

                        <table class="table">
                            <tr>
                                <th>Nome</th>
                                <th>Categoria</th>
                                <th>Ação</th>
                            </tr>
                            @foreach($produtos as $produto)
                                <tr>
                                    <td>{{ link_to_route('produto.show',$produto->nome,[$produto->id]) }}</td>
                                    <td>{{ link_to_route('produto.show',$produto->id_categoria,[$produto->id]) }}</td>
                                    <td>
                                        {!! Form::open(array('route'=>['produto.destroy',$produto->id],'method'=>'DELETE')) !!}
                                            {{ link_to_route('produto.edit','Edit',[$produto->id],['class'=>'btn btn-primary']) }}
                                            |

                                            {!! Form::button('Excluir',['class'=>'btn btn-danger','type'=>'submit']) !!}
                                        {!! Form::close() !!}


                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>

                {{ link_to_route('produto.create','Novo Produto',null,['class'=>'btn btn-success']) }}

            </div>
        </div>
    </div>
@endsection
