@extends('layouts.app')
@section('content')
  <div class="row">
  <div class="col-sm-12">
    <div class="full-right">
      <h2>CRUD Products</h2>
    </div>
  </div>
  </div>

  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif

  <table class="table table-bordered">
    <tr>
      <th with="80px">Id</th>
      <th>Nome</th>
      <th>Categoria</th>
      <th with="140px" class="text-center">
        <a href="{{route('products.create')}}" class="btn btn-success btn-sm">
          <i class="glyphicon glyphicon-plus"></i>
        </a>
      </th>
    </tr>
    <?php $no=1; ?>
    @foreach ($product as $key => $value)
      <tr>
        <td>{{$no++}}</td>
        <td>{{ $value->name }}</td>
        <td>{{ $value->id_category }}</td>
        <td>
          <a class="btn btn-info btn-sm" href="{{route('products.show',$value->id)}}">
              <i class="glyphicon glyphicon-th-large"></i></a>
          <a class="btn btn-primary btn-sm" href="{{route('products.edit',$value->id)}}">
              <i class="glyphicon glyphicon-pencil"></i></a>
            {!! Form::open(['method' => 'DELETE','route' => ['products.destroy', $value->id],'style'=>'display:inline']) !!}
              <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
            {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
  </table>
@endsection


