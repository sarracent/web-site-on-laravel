@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Clasifnegocios</div>
                    <div class="panel-body">

                        {!! Form::open(['method' => 'GET', 'url' => '/clasifnegocios/clasifnegocios', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                                       <th>Clasificacion</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($clasifnegocios as $item)
                                @if($item->clasificacion!=$clasifnegocios[0]->clasificacion)
                                    <tr>
                                      
                                        <td>{{ $item->clasificacion }}</td>
                                        <td>
                                            <a href="{{ url('/clasifnegocios/clasifnegocios/' . $item->id) }}" title="View Clasifnegocio"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/clasifnegocios/clasifnegocios/' . $item->id . '/edit') }}" title="Edit Clasifnegocio"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/clasifnegocios/clasifnegocios', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Clasifnegocio',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    @else
                                    <tr>
                                       
                                        <td>{{ $item->clasificacion }}</td>
                                        <td>
                                            <a href="{{ url('/clasifnegocios/clasifnegocios/' . $item->id) }}" title="View Clasifnegocio"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/clasifnegocios/clasifnegocios/' . $item->id . '/edit') }}" title="Edit Clasifnegocio"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                           
                                        </td>
                                    </tr>
                                   
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $clasifnegocios->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
