@extends('layouts.backend')
<script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Comercionegocios</div>
                    <div class="panel-body">
                        

                        {!! Form::open(['method' => 'GET', 'url' => '/comercionegocios/comercionegocios', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                                       <th>Título</th><th>Documento</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($comercionegocios as $item)
                                    <tr>
                                        
                                        <td>{{ $item->titulo }}</td>
                                       <td>{{ $item->foto }}</td>
                                        <td>
                                            <a href="{{ url('/comercionegocios/comercionegocios/' . $item->id) }}" title="View Comercionegocio"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/comercionegocios/comercionegocios/' . $item->id . '/edit') }}" title="Edit Comercionegocio"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/comercionegocios/comercionegocios', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                              
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $comercionegocios->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
