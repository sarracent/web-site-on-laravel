@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Menuenlace #{{ $menuenlace->id }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/menuenlace/menuenlace') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($menuenlace, [
                            'method' => 'PATCH',
                            'url' => ['/menuenlace/menuenlace', $menuenlace->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('menuenlace.menuenlace.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
