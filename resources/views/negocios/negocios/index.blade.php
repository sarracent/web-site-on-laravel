@extends('layouts.backend')
<script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Negocios</div>
                    <div class="panel-body">
                        <a href="{{ url('/negocios/negocios/create') }}" class="btn btn-success btn-sm" title="Add New Negocio">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/negocios/negocios', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                                        <th>Clasificacion</th><th>Titulo</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($negocios as $item)
                                   <tr>
                                      
                                        <td>{{ $item->clasificacion }}</td><td>{{ $item->titulo }}</td>
                                        <td>
                                            <a href="{{ url('/negocios/negocios/' . $item->id) }}" title="View Negocio"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/negocios/negocios/' . $item->id . '/edit') }}" title="Edit Negocio"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/negocios/negocios', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Negocio',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    
                                   
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $negocios->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
