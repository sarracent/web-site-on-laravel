<div class="form-group {{ $errors->has('menuenlace') ? 'has-error' : ''}}">
    {!! Form::label('menuenlace', 'MenuEnlaceInteres', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
         {!! Form::file('menuenlace', null, ['class' => 'form-control']) !!}
        {!! $errors->first('menuenlace', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
