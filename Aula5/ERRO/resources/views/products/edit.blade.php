@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::model($product,['route'=>['products.update',$product->id],'method'=>'PATCH']) }}
      @include('products.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection