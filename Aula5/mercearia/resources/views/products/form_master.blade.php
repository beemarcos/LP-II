<div class="row">
    <div class="col-sm-2">
      {!! form::label('name','Nome') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('name') ? 'has-error' : "" }}">
        {{ Form::text('name',NULL, ['class'=>'form-control', 'id'=>'name', 'placeholder'=>'Nome ...']) }}
        {{ $errors->first('name', '<p class="help-block">:message</p>') }}
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-sm-2">
      {!! form::label('id_category','Categoria') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('id_category') ? 'has-error' : "" }}">
        {{ Form::text('id_category',NULL, ['class'=>'form-control', 'id'=>'id_category', 'placeholder'=>'Categoria ...']) }}
        {{ $errors->first('id_category', '<p class="help-block">:message</p>') }}
      </div>
    </div>
  </div>
  
  <div class="form-group">
    {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
  </div>