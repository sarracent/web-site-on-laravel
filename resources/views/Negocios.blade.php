@extends('subvistas.layouts.layout')    
@section('content')
@parent
<title>BIOCUBAFARMA|NEGOCIOS</title>
{!!Html::script('js/negocios.js')!!} 
</head>
<body>
    @include('subvistas.modal.menu')
    <div class="container-wrap" >
        <div id="fullpage">
            <div class="section business color-white-background">
                @include('subvistas.partial.menunegocios')
                <div class="align-button-menu separator container hidden-md-up py-4 py-sm-5">
                    <a data-toggle="modal" data-target="#menuModal"><i class="border-0 btn-dark-gray rounded-circle icon-menu-01 font-weight-bold"></i></a>
                </div>
                <div class="container-md">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-lg-6 padding-buss-img img-width img-fluid" style="background-image:url({{url('uploads/imagenneg.jpg')}});background-size: cover;">
                        </div>

                        <div class="col-12 col-md-8 col-lg-6 pt-md-5 pt-lg pl-xl-5">
                            <div class="mt-2 pt-2 mt-lg-0 pt-lg-0 content-paginator-wrapper-business color-dark-gray MyriadProRegular">
                                <p class="text-uppercase color-dark-gray MyriadProSemibold">{!!$comercionegocio->titulo!!}</p>
                                {!!$comercionegocio->objetivos!!}     
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-0 separator-section-dark hidden-sm-down hidden-lg-up"/>
            </div>
            <div class="section business-nav color-white-background">
                <div class="container business-img-separator py-4 py-sm-5 img-width img-fluid hidden-md-up clase3">
                    <div class="d-flex justify-content-end">
                        <div class="mr-auto"><a href="#seccion1"><i class="mr-4 border-0 btn-white rounded-circle icon-up-01 font-weight-bold"></i></a></div>
                        <div><a href="#" data-toggle="modal" data-target="#menuModal"><i class="border-0 btn-white rounded-circle hidden-md-up icon-menu-01 font-weight-bold"></i></a></div>
                    </div>
                </div>
                <div class="container-section">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 clase3">
                            <div class="d-flex flex-row my-4 pl-xl-5 my-search-filter-enterprise my-lg-5 hidden-sm-down">
                                <div class="px-2">
                                    <a href="#seccion1"><i class="btn-dark-gray rounded-circle border-0 icon-up-01 font-weight-bold"></i></a>
                                </div>
                            </div>

                            <div class="d-flex flex-row justify-md-content-center py-5 py-md-0 pl-md-5">
                                <nav class="nav flex-column MyriadProRegular news-font-size text-uppercase pl-xl-5" >
                                    <div class="content-paginator-wrapper-business-nav">
                                        <a class="info mb-4 font-weight-bold nav-link color-dark-gray nav-link-colunm py-0 mb-3" href="{{$clasificacion[0]->clasificacion}}" >{{$clasificacion[0]->clasificacion}}</a>
                                        @foreach($negocios as $t)
                                        @if($t->clasificacion!=$clasificacion[0]->clasificacion)
                                        <a class="infoneg mb-4 font-weight-bold nav-link color-dark-gray nav-link-colunm py-0 mb-3 enlace" href="{{$t->clasificacion}}" >{{$t->clasificacion}}</a>
                                        @endif
                                        @endforeach
                                    </div>
                                </nav>
                            </div>
                        </div>  

                        <div class="col-12 col-md-6 col-lg-8 img-fluid px-md-0 clase4 image" style="background-size: cover; width: 100%; display: block;" id="infonegocios">
                        </div>
                        <style type="text/css">
                            @media (min-width: 768px) {
                                .image {
                                    background-image:url({{URL::asset('uploads/fotonegocio.jpg')}});
                                }
                                }
                            </style>

                        </div>
                    </div>
                    <div class="business-img-separator-movil container img-width img-fluid hidden-md-up clase3">
                    </div>
                </div>
                @include('subvistas.partial.footer')
            </div>
        </div>
        @stop
