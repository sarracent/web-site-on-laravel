<div class="form-group {{ $errors->has('img1') ? 'has-error' : ''}}">
    {!! Form::label('img1', 'Imagen1', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('img1', null, ['class' => 'form-control']) !!}
        {!! $errors->first('img1', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('img2') ? 'has-error' : ''}}">
    {!! Form::label('img2', 'Imagen2', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('img2', null, ['class' => 'form-control']) !!} 
        {!! $errors->first('img2', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('img3') ? 'has-error' : ''}}">
    {!! Form::label('img3', 'Imagen3', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('img3', null, ['class' => 'form-control']) !!}
        {!! $errors->first('img3', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('imgfidciencia') ? 'has-error' : ''}}">
    {!! Form::label('imgfidciencia', 'Imagen Fidel y la ciencia', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('imgfidciencia', null, ['class' => 'form-control']) !!}
        {!! $errors->first('imgfidciencia', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('imgenlace') ? 'has-error' : ''}}">
    {!! Form::label('imgenlace', 'Imagen enlace de Interés', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('imgenlace', null, ['class' => 'form-control']) !!}
      {!! $errors->first('imgenlace', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
