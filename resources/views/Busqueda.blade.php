@extends('subvistas.layouts.layout') 
@section('content')
@parent
<title>BIOCUBAFARMA|BUSQUEDA</title>
</head>
<body>
    @include('subvistas.modal.menu')
    <div class="container-wrap">
        <div id="fullpage">
            <div class="section color-white-background ultnot" data-section-name="seccion">
                @include('subvistas.partial.menubuscar')
                <div class="align-button-menu separator container hidden-md-up py-4 py-sm-5">
                    <a data-toggle="modal" data-target="#menuModal"><i class="border-0 btn-dark-gray rounded-circle icon-menu-01 font-weight-bold"></i></a>
                </div>
                <div class="container-md">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-lg-6 img-width img-fluid" style="background-image:url({{url('uploads/'.$noticia[0]->foto)}});background-size: cover;">
                            <div class="news-title-padding-top content-title-news">
                                <blockquote class="blockquote shadow mb-md-blockquote hidden-sm-down">
                                    <p class="mb-0 h5 MyriadProSemibold color-white text-uppercase">{{$noticia[0]->titulo}}</p>
                                </blockquote>
                            </div>
                        </div>

                        <div class="col-12 col-md-8 col-lg-6 pt-md-5 pt-lg pl-xl-5" id="not">
                            <div class="mt-2 pt-2 mt-lg-0 pt-lg-0 content-paginator-wrapper-busqueda color-dark-gray MyriadProRegular">
                                <p class="text-uppercase color-dark-gray MyriadProSemibold hidden-md-up">{{$noticia[0]->titulo}}</p>
                                {!!$noticia[0]->cuerpo!!}  
                            </div>
                        </div>
                    </div>
                </div>
            </div>     
            @include('subvistas.partial.footer')
        </div>
    </div>
    @stop


