<div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
    {!! Form::label('titulo', 'Título', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('titulo', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('titulo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('grupoind1') ? 'has-error' : ''}}">
    {!! Form::label('grupoind1', 'Contenido Biocubafarma Colunma-1', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('grupoind1', null, ['class' => 'form-control', 'required' => 'required','class' => 'ckeditor']) !!}
        {!! $errors->first('grupoind1', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('grupoind2') ? 'has-error' : ''}}">
    {!! Form::label('grupoind2', 'Contenido Biocubafarma Colunma-2', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('grupoind2', null, ['class' => 'form-control', 'required' => 'required','class' => 'ckeditor']) !!}
        {!! $errors->first('grupoind2', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('mis') ? 'has-error' : ''}}">
    {!! Form::label('mis', 'Misión/Visión/Valores Compartidos', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('mis', null, ['class' => 'form-control', 'required' => 'required','class' => 'ckeditor']) !!}
        {!! $errors->first('mis', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
