<div class="form-group {{ $errors->has('grupo') ? 'has-error' : ''}}">
    {!! Form::label('grupo', 'Grupo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('grupo', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('grupo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
    {!! Form::label('direccion', 'Direccion', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
       {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
        {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('telefonos') ? 'has-error' : ''}}">
    {!! Form::label('telefonos', 'Telefonos', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('telefonos', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('telefonos', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('imagen') ? 'has-error' : ''}}">
    {!! Form::label('imagen', 'Imagen', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
         {!! Form::file('imagen', null, ['class' => 'form-control']) !!}
       {!! $errors->first('imagen', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
