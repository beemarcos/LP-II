@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">



                <div class="panel panel-default">
                    <div class="panel-heading">{{ $produto->nome }}</div>

                    <div class="panel-body">

                        {{ $produto->id_categoria }}

                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection
