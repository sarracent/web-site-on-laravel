@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Menubaner {{ $menubaner->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/menubaner/menubaner') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/menubaner/menubaner/' . $menubaner->id . '/edit') }}" title="Edit Menubaner"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $menubaner->id }}</td>
                                    </tr>
                                    <tr><th> Menuinicio </th><td> {{ $menubaner->menuinicio }} </td></tr><tr><th> Menunoticia </th><td> {{ $menubaner->menunoticia }} </td></tr><tr><th> Menuempresa </th><td> {{ $menubaner->menuempresa }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
