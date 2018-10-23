@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Inicio</div>
                    <div class="panel-body">
                        

                        {!! Form::open(['method' => 'GET', 'url' => '/inicio/inicio', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Título</th><th>Contenido</th><th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($inicio as $item)
                                    <tr>
                                        <td>{{ $item->titulo }}</td><td>{{ $item->grupoind1 }}</td>
                                        <td>
                                            <a href="{{ url('/inicio/inicio/' . $item->id) }}" title="View Inicio"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/inicio/inicio/' . $item->id . '/edit') }}" title="Edit Inicio"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                        </td>
                                        
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $inicio->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
