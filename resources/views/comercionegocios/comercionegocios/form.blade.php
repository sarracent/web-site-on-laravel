<div class="form-group {{ $errors->has('empresa') ? 'has-error' : ''}}">
    {!! Form::label('titulo', 'Titulo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
        {!! $errors->first('titulo', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('objetivos') ? 'has-error' : ''}}">
    {!! Form::label('objetivos', 'Objetivos', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('objetivos', null, ['class' => 'form-control','class' => 'ckeditor']) !!}
        {!! $errors->first('objetivos', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
    {!! Form::label('foto', 'Foto', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('foto', null, ['class' => 'form-control']) !!}
        {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
