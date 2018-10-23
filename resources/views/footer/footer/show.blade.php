@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Footer {{ $footer->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/footer/footer') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/footer/footer/' . $footer->id . '/edit') }}" title="Edit Footer"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                       
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $footer->id }}</td>
                                    </tr>
                                    <tr><th> Grupo </th><td> {{ $footer->grupo }} </td></tr><tr><th> Direccion </th><td> {{ $footer->direccion }} </td></tr><tr><th> Telefonos </th><td> {{ $footer->telefonos }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
