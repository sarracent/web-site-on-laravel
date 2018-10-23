@extends('subvistas.layouts.layout') 
@section('content')
@parent
<title>BIOCUBAFARMA|NOTICIAS</title>
{!!Html::script('js/noticias.js')!!}   
</head>
<body>
    @include('subvistas.modal.menu')
    <div class="container-wrap" >
        <div id="fullpage">
            <div class="section color-white-background ultnot">
                @include('subvistas.partial.menunoticias')
                <div class="align-button-menu separator container hidden-md-up py-4 py-sm-5">
                    <a data-toggle="modal" data-target="#menuModal"><i class="border-0 btn-dark-gray rounded-circle icon-menu-01 font-weight-bold"></i></a>
                </div>
                <div class="container-md">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-lg-6 img-width img-fluid" style="background-image:url({{url('uploads/'.$ultimanoticia->foto)}});background-size: cover;">
                            <div class="news-title-padding-top content-title-news">
                                <blockquote class="blockquote shadow hidden-sm-down">
                                    <p class="mb-0 h5 MyriadProSemibold color-white text-uppercase">{{$ultimanoticia->titulo}}</p>
                                    <p class="mb-0 MyriadProSemiboldIt h5 color-white">{{$ultimanoticia->subtitulo}}</p>
                                </blockquote>
                            </div>
                        </div>

                        <div class="col-12 col-md-8 col-lg-6 pt-md-5 pt-lg pl-xl-5">
                            <div class="mt-2 pt-2 mt-lg-0 pt-lg-0 content-paginator-wrapper color-dark-gray MyriadProRegular">
                                <p class="text-uppercase color-dark-gray MyriadProSemibold hidden-md-up">{{$ultimanoticia->titulo}}</p>
                                {!!$ultimanoticia->cuerpo!!}    
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-0 separator-section-dark hidden-sm-down hidden-lg-up"/>
            </div>
            <div class="section recent-news color-white-background">
                <div class="py-4 py-sm-5 img-width img-fluid hidden-md-up clase1" style="background-image: url({{ URL::asset('uploads/img2.jpg') }}); background-size: cover;">
                    <div class="container d-flex justify-content-end">
                        <div class="mr-auto"><a href="#seccion1"><i class="mr-4 border-0 btn-white rounded-circle icon-up-01 font-weight-bold"></i></a></div>
                        <div><a href="#" data-toggle="modal" data-target="#menuModal"><i class="border-0 btn-white rounded-circle hidden-md-up icon-menu-01 font-weight-bold"></i></a></div>
                    </div>
                </div>
                <div class="container-md">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 clase1">
                            <form  accept-charset="UTF-8" >
                                <div class="d-flex flex-row my-4 my-sm-5 my-search-filter-enterprise pl-xl-5">
                                    <div class="px-2 hidden-sm-down">
                                        <a href="#seccion1"><i class="btn-dark-gray rounded-circle border-0 icon-up-01 font-weight-bold"></i></a> 
                                    </div>
                                    <div class="pr-2 pl-md-2">
                                        <a value="" id="buscar_noticia"><span class="btn-dark-gray rounded-circle border-0 icon-search-01 font-weight-bold"></span></a>
                                    </div>
                                    <div class="px-2">
                                        <input class="form-control form-control-width form-control-border-color rounded-0 nombre" id="nombre"  type="text">
                                    </div>
                                </div>
                            </form>
                            <div class="completo">
                                <nav class="nav flex-column news-font-size pl-md-4 pl-xl-5 MyriadProRegular">
                                    <p class="pl-2 pt-2 pl-md-4 pl-xl-5 text-uppercase MyriadProSemibold color-dark-gray">noticias recientes</p>
                                    <div class="pl-md-4 pl-xl-5 content-paginator-wrapper-menu menunoti">
                                        @foreach($noticia as $t)
                                        <a class="nav-link text-uppercase color-dark-gray nav-link-colunm py-0 mb-3" href="{{$t->id }}" >{!!substr($t->titulo, 0, 25)!!}...</a>
                                        @endforeach
                                    </div>
                                </nav>  
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-8 px-lg-0 clase2" id="noticias">
                            
                            <div class="img-width img-fluid padding-news-img hidden-sm-down" style="background-image:url({{url('uploads/'.$noticia[1]->foto)}});background-size: cover;">
                            </div>

                            <div class="border-left-recent-news px-lg-5 hidden-sm-down">
                                <div class="d-flex flex-column mt-2 pt-2 pt-lg-0 px-lg-5">
                                    <div class="content-paginator-wrapper-recent-news color-dark-gray MyriadProRegular py-programs">
                                        <p class="text-uppercase color-dark-gray MyriadProSemibold">{{$noticia[1]->titulo}} {{$noticia[1]->subtitulo}}</p>
                                        {!!$noticia[1]->cuerpo!!}    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="container py-4 py-sm-5 img-width img-fluid hidden-md-up clase1" style="background-image: url({{ URL::asset('uploads/img2.jpg') }}); background-size: cover;">
                    <a href="#" class='scrollToTop'><i class="display-trasparent border-0 btn-white rounded-circle icon-down-01 font-weight-bold"></i></a>
                </div>
            </div>     
            @include('subvistas.partial.footer')
        </div>
    </div>
    @stop
