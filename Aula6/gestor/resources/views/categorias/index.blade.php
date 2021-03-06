@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                @if(Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                @endif

                @if(Session::has('message-error'))
                    <div class="alert alert-danger">{{ Session::get('message-error') }}</div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">Categorias</div>

                    <div class="panel-body">

                        <table class="table">
                            <tr>
                                <th>Nome</th>
                                @if ( Entrust::can('edit-categoria') | Entrust::can('delete-categoria') ) 
                                    <th>Ação</th>
                                @endif
                                </tr>
                            @foreach($categorias as $categoria)
                                <tr>
                                    @if ( Entrust::can('show-categoria') )
                                    <td>{{ link_to_route('categoria.show',$categoria->nome,[$categoria->id]) }}</td>
                                    @else
                                        <td>{{ $categoria->nome }}</td>
                                    @endif
                                    
                                    <td>
                                        {!! Form::open(array('route'=>['categoria.destroy',$categoria->id],'method'=>'DELETE')) !!}
                                        @permission('edit-categoria')
                                            {{ link_to_route('categoria.edit','Editar',[$categoria->id],['class'=>'btn btn-primary']) }}
                                        @endpermission

                                        @permission('delete-categoria')
                                            {!! Form::button('Excluir',['class' => 'btn btn-danger', 'type' => 'submit', 'onclick' => "return confirm('Você tem certeza que deseja excluir este item?')"]) !!}
                                        @endpermission
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
                @permission('create-categoria')
                {{ link_to_route('categoria.create','Nova Categoria',null,['class'=>'btn btn-success']) }}
                @endpermission
                <a class="btn btn-primary" href="/">Página inicial</a>
            </div>
        </div>
    </div>
@endsection
