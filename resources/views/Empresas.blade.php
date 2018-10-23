@extends('subvistas.layouts.layout')       
@section('content')
@parent
<title>BIOCUBAFARMA|EMPRESAS</title>
{!!Html::script('js/empresas.js')!!}
</head>
<body>
    @include('subvistas.modal.menuempresa')
    <div class="container-wrap" >
        <div id="fullpage">
            <div class="section color-white-background structure-enterprise ultnot">
                @include('subvistas.partial.menuempresas')
                <div class="hidden-md-up py-4 py-sm-5 img-width img-fluid" style="background-image: url({{ URL::asset('uploads/img2.jpg') }}); background-size: cover;">
                    <div class="container d-flex justify-content-end">
                        <div class="mr-auto"><a onclick="atras()"><i class="display-trasparent display mr-4 border-0 btn-white rounded-circle icon-back-01 font-weight-bold"></i></a></div>
                        <a data-toggle="modal" data-target="#menuModal"><i class="border-0 btn-white rounded-circle icon-menu-01 font-weight-bold"></i></a>
                    </div>
                </div>
                <div class="container">
                    <div class="row my-4 mt-sm-5 mt-lg-3 mb-md-2 mb-lg-0 my-structure-enterprise clase1-menudir">
                        <div class="col col-md-8 col-lg-12">
                            <p class="text-uppercase MyriadProSemibold color-dark-gray mb-2 h3-title">ESTRUCTURA DE BIOCUBAFARMA</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-7 col-lg-6 clase1-menudir">
                            <div class="content-paginator-wrapper-menudir MyriadProRegular menudir" id="noti">
                                @foreach($direccion as $d)
                                <p><a class="nav-link text-uppercase color-dark-gray nav-link-colunm py-0 mb-3" href="{{$d->id}}">{{$d->direccion}}</a></p>           
                                @endforeach  
                            </div>
                        </div>
                        <div class="col-12 col-md-5 col-lg-6 clase2-menudir" id="contactos">
                            <p class="MyriadProSemibold color-dark-gray hidden-sm-down">{{$contactos->director}}</p>
                            <!--<div class="content-paginator-wrapper-contactos MyriadProRegular color-dark-gray hidden-sm-down">
                                {!!$contactos->mision!!}
                            </div>-->
                        </div>
                    </div> 
                </div>
                <div class="container py-4 py-sm-5 img-width img-fluid hidden-md-up" style="background-image: url({{ URL::asset('uploads/img2.jpg') }}); background-size: cover;">
                    <a href="#"><i class="display-trasparent border-0 btn-white rounded-circle icon-down-01 font-weight-bold"></i></a>
                </div>
                <hr class="my-0 separator-section-dark-gray hidden-sm-down"/>
            </div>
            <div class="section filter-enterprise color-white-background">
                <div class="py-4 py-sm-5 img-width img-fluid hidden-md-up clase3" style="background-image: url({{ URL::asset('uploads/img2.jpg') }}); background-size: cover;">
                    <div class="container d-flex justify-content-end">
                        <div class="mr-auto"><a href="#seccion1"><i class="mr-4 border-0 btn-white rounded-circle icon-up-01 font-weight-bold"></i></a></div>
                        <div><a href="#" data-toggle="modal" data-target="#menuModal"><i class="border-0 btn-white rounded-circle hidden-md-up icon-menu-01 font-weight-bold"></i></a></div>
                    </div>
                </div>
                <div class="container-section">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 clase3">
                            <form  accept-charset="UTF-8" >
                                <div class="d-flex flex-row my-4 my-sm-5 my-search-filter-enterprise pl-xl-5">
                                    <div class="px-2 hidden-sm-down">
                                        <a href="#seccion1"><i class="scroll btn-dark-gray rounded-circle border-0 icon-up-01 font-weight-bold"></i></a>
                                    </div>
                                    <div class="pr-2 pl-md-2">
                                        <a value="" id="buscar_empresa"><span class="btn-dark-gray rounded-circle border-0 icon-search-01 font-weight-bold"></span></a>
                                    </div>
                                    <div class="px-2">
                                        <input class="form-control form-control-width form-control-border-color rounded-0 nombre" id="nombre"  type="text">
                                    </div>
                                </div>
                            </form>

                            <div class="d-flex flex-row flex-md-column justify-content-md-center pl-xl-5">
                                <div class="pl-md-5 pr-0 col col-md-12">
                                    <nav class="nav flex-column py-2 py-md-4 py-lg-2 nav-colunm-border-botom-color MyriadProSemibold news-font-size text-uppercase" id="mclasificacion" >
                                        <a class="nav-link-enterprise color-dark-gray nav-link-colunm py-0 mb-3 todasempresas" href="">todas</a>
                                        @foreach($clasificacion as $c)
                                        <a class="nav-link-enterprise color-dark-gray nav-link-colunm py-0 mb-3" href="{{$c->clasificacion}}">{{$c->clasificacion}}</a>
                                        @endforeach
                                    </nav>
                                </div>

                                <div class="pl-md-5 col col-md-12">
                                    <div class="mempresas">
                                        <div class="pt-md-5 pt-lg-4 pl-lg-filter-emp">
                                            <div class="content-paginator-wrapper-menuemp MyriadProRegular">
                                                @foreach($empresas as $t)
                                                <p><a class="nav-link color-dark-gray nav-link-colunm py-0 mb-3" href="{{$t->id }}" >{!!substr($t->titulo, 0, 25)!!}</a></p>
                                                @endforeach  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-12 col-md-6 col-lg-8 img-fluid px-md-0 clase4 image" style="background-size: cover; width: 100%;" id="infoempresas">
                        </div>
                        <style type="text/css">
                            @media (min-width: 768px) {
                                .image {
                                    background-image:url({{ URL::asset('uploads/fotoempresa.jpg')}});
                                }
                                }
                            </style>

                        </div>
                    </div>
                    <div class="container py-4 py-sm-5 img-width img-fluid hidden-md-up clase3" style="background-image: url({{ URL::asset('uploads/img2.jpg') }}); background-size: cover;">
                        <a href="#"><i class="display-trasparent border-0 btn-white rounded-circle icon-down-01 font-weight-bold"></i></a>
                    </div>
                </div> 
                @include('subvistas.partial.footer')
            </div>
        </div>
        @stop
