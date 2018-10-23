@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Imagene {{ $imagene->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/imagenes/imagenes') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/imagenes/imagenes/' . $imagene->id . '/edit') }}" title="Edit Imagene"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $imagene->id }}</td>
                                    </tr>
                                    <tr><th> Img1 </th><td> {{ $imagene->img1 }} </td></tr><tr><th> Img2 </th><td> {{ $imagene->img2 }} </td></tr><tr><th> Img3 </th><td> {{ $imagene->img3 }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
