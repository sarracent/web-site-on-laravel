<div class="form-group {{ $errors->has('clasificacion') ? 'has-error' : ''}}">
    {!! Form::label('clasificacion', 'Clasificación', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('clasificacion', null, ['class' => 'form-control']) !!}
        {!! $errors->first('clasificacion', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
    {!! Form::label('titulo', 'Titulo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
        {!! $errors->first('titulo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cuerpo') ? 'has-error' : ''}}">
    {!! Form::label('cuerpo', 'Cuerpo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('cuerpo', null, ['class' => 'form-control','class' => 'ckeditor']) !!}
        {!! $errors->first('cuerpo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
    {!! Form::label('foto', 'Img1(requerido)', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('foto', null, ['class' => 'form-control']) !!}
        {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<!-- <div class="form-group {{ $errors->has('foto2') ? 'has-error' : ''}}">
    {!! Form::label('foto2', 'Img2(opcional)', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('foto2', null, ['class' => 'form-control']) !!}
        {!! $errors->first('foto2', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('foto3') ? 'has-error' : ''}}">
    {!! Form::label('foto3', 'Img3(opcional)', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('foto3', null, ['class' => 'form-control']) !!}
        {!! $errors->first('foto3', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('foto4') ? 'has-error' : ''}}">
    {!! Form::label('foto4', 'Img4(opcional)', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('foto4', null, ['class' => 'form-control']) !!}
        {!! $errors->first('foto4', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('foto5') ? 'has-error' : ''}}">
    {!! Form::label('foto5', 'Img5(opcional)', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('foto5', null, ['class' => 'form-control']) !!}
        {!! $errors->first('foto5', '<p class="help-block">:message</p>') !!}
    </div>
</div> -->


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
