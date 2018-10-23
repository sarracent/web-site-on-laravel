
<div class="form-group {{ $errors->has('menuempresa') ? 'has-error' : ''}}">
    {!! Form::label('menuempresa', 'Menuempresa', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('menuempresa', null, ['class' => 'form-control']) !!}
        {!! $errors->first('menuempresa', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('menuotros') ? 'has-error' : ''}}">
    {!! Form::label('menuotros', 'Menuotros', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
         {!! Form::file('menuotros', null, ['class' => 'form-control']) !!}
        {!! $errors->first('menuotros', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
