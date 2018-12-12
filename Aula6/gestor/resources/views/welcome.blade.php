@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Página inicial</div>
                @role('admin')
                    <p>This is visible to users with the admin role. Gets translated to </p>
                @endrole
                <div class="panel-body">
                    <img
                        width="33%" 
                        height="33%" 
                        src="/img/market.png"
                    >
                    <img
                        width="33%" 
                        height="33%" 
                        src="/img/market.png"
                    >
                    <img
                        width="33%" 
                        height="33%" 
                        src="/img/market.png"
                    >
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
