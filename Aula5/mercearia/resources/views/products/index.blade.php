@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Produtos</h1>

            @foreach ($products as $p)
                <h2>{{ $p->nome }}</h2>
            @endforeach
        </div>
    </div>
</div>
@stop

