@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading">{{ $categoria->nome }}</div>
                    
                </div>
                {{ link_to_route('categoria.index','Voltar',null,['class'=>'btn btn-primary']) }}
            </div>
        </div>
    </div>
@endsection
