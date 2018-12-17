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
                                <th>Preço</th>
                                <th>Saldo</th>
                                <th>Categoria</th>
                                @if ( Entrust::can('edit-produto') | Entrust::can('delete-produto') ) 
                                    <th>Ação</th>
                                @endif
                            </tr>

                            @foreach($produtos as $produto)
                                <tr>
                                    @if ( Entrust::can('show-produto') )
                                        <td>{{ link_to_route('produto.show',$produto->nome,[$produto->id]) }}</td>
                                    @else
                                        <td>{{ $produto->nome }}</td>
                                    @endif
                                    
                                    <td>R${{ $produto->preco }}</td>
                                    <td>{{ $produto->saldo }}</td>

                                    @foreach ($categorias as $categoria)
                                        
                                        @if ( $produto->id_categoria == $categoria->id )
                                            <td>{{ $categoria->nome }}</td>
                                        @endif
                                        
                                    @endforeach
                                    <td>
                                        {!! Form::open(array('route'=>['produto.destroy',$produto->id],'method'=>'DELETE')) !!}
                                        @permission('edit-produto')
                                            {{ link_to_route('produto.edit','Editar',[$produto->id],['class'=>'btn btn-primary']) }}
                                        @endpermission

                                        @permission('delete-produto')
                                        {!! Form::button('Excluir',['class'=>'btn btn-danger','type'=>'submit', 'onclick' => "return confirm('Você tem certeza que deseja excluir este item?')"]) !!}
                                        @endpermission
                                        {!! Form::close() !!}


                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
                @permission('create-produto')
                    {{ link_to_route('produto.create','Novo Produto',null,['class'=>'btn btn-success']) }}
                @endpermission 
                <a class="btn btn-primary" href="/">Página inicial</a>
            </div>
        </div>
    </div>
@endsection
