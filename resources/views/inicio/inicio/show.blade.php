@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Inicio {{ $inicio->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/inicio/inicio') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/inicio/inicio/' . $inicio->id . '/edit') }}" title="Edit Inicio"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $inicio->id }}</td>
                                    </tr>
                                    <tr><th> Titulo </th><td> {{ $inicio->titulo }} </td></tr><tr><th> Grupoind1 </th><td> {{ $inicio->grupoind1 }} </td></tr><tr><th> Grupoind2 </th><td> {{ $inicio->grupoind2 }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
