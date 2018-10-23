@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Fotocomercionegocio {{ $fotocomercionegocio->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/fotocomercionegocio/fotocomercionegocio') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/fotocomercionegocio/fotocomercionegocio/' . $fotocomercionegocio->id . '/edit') }}" title="Edit Fotocomercionegocio"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $fotocomercionegocio->id }}</td>
                                    </tr>
                                    <tr><th> Foto </th><td> {{ $fotocomercionegocio->foto }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
