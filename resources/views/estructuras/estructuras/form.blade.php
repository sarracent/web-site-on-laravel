<div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
    {!! Form::label('direccion', 'Direccion', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
        {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('director') ? 'has-error' : ''}}">
    {!! Form::label('director', 'Director', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('director', null, ['class' => 'form-control']) !!}
        {!! $errors->first('director', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<!--<div class="form-group {{ $errors->has('correo') ? 'has-error' : ''}}">
    {!! Form::label('correo', 'Correo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::email('correo', null, ['class' => 'form-control']) !!}
        {!! $errors->first('correo', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('mision') ? 'has-error' : ''}}">
    {!! Form::label('mision', 'Mision', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('mision', null, ['class' => 'form-control','class' => 'ckeditor']) !!}
        {!! $errors->first('mision', '<p class="help-block">:message</p>') !!}
    </div>
</div>-->

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
