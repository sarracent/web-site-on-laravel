@extends('subvistas.layouts.layout')      	
@section('content')
@parent
<title>BIOCUBAFARMA|BCF</title>
</head>
<body>
    @include('subvistas.modal.menuhome')
    <div class="container-wrap" >
        <div id="fullpage">
            <div class="section img-fluid group-industries" style="background-image: url({{ URL::asset('uploads/img1.jpg') }}); background-size: cover;">
                @include('subvistas.partial.menuhome')
                <div class="container align-button-menu py-4 py-sm-5 hidden-md-up">
                    <a data-toggle="modal" data-target="#menuModal"><i class="border-0 btn-white rounded-circle icon-menu-01 font-weight-bold"></i></a>
                </div>

                <div class="content">
                    <div class="container MyriadProRegular color-dark-gray content-paginator-wrapper-industries-group">
                        <div class="row justify-content-md-center justify-content-lg-start mb-2">
                            <div class="col col-md-8 col-lg-6">
                                <div class="text-uppercase MyriadProSemibold color-dark-gray h5">
                                    {!!$inicios[0]->titulo!!}
                                </div>
                            </div>
                            <div class="col-lg-6">
                            </div>
                        </div>
                        <div class="row justify-content-md-center justify-content-lg-start">
                            <div class="col-12 col-md-8 col-lg-6">  
                                {!!$inicios[0]->grupoind1!!}
                            </div>
                            <div class="col-12 col-md-8 col-lg-6">
                                {!!$inicios[0]->grupoind2!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section mision-vision" style="background-image: url({{ URL::asset('uploads/img2.jpg') }}); background-size: cover;">
                <div class="container py-content">
                    <div class="d-flex justify-content-end">
                        <div class="mr-auto"><a href="#seccion1"><i class="mr-4 border-0 btn-white rounded-circle icon-up-01 font-weight-bold"></i></a></div>
                        <div><a href="#" data-toggle="modal" data-target="#menuModal"><i class="border-0 btn-white rounded-circle hidden-md-up icon-menu-01 font-weight-bold"></i></a></div>
                    </div>
                </div>
                <div class="content-mision"> 
                    <div class="container MyriadProRegular color-dark-gray">
                        <div class="row justify-content-md-center">
                            <div class="col col-md-8 col-xl-6">
                                <p class="text-uppercase MyriadProSemibold color-dark-gray mb-2 h5">misión y visión</p>
                                <hr class="separator-center-wrap hidden-md-down"/>
                                <div class="content-paginator-wrapper-mision-vision">
                                    {!!$inicios[0]->mis!!}
                                </div>
                                <hr class="separator-center-wrap mb-0 hidden-md-down"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section title-news" style="background-image: url({{ URL::asset('uploads/img3.jpg') }}); background-size: cover;">

                <div class="d-flex justify-content-end py-4 py-sm-5 hidden-md-up container">
                    <div class="mr-auto"><a href="#seccion1"><i class="mr-4 border-0 btn-white rounded-circle icon-up-01 font-weight-bold"></i></a></div>
                    <div><a href="#" data-toggle="modal" data-target="#menuModal"><i class="btn-white rounded-circle border-0 icon-menu-01 font-weight-bold"></i></a></div>
                </div>

                <hr class="my-0 separator-section"/>

                <div class="container-home-section-titles-new">
                    <div class="row">
                        <div class="col-12 col-lg-8 px-0">
                            <div class="relative crop-img-news" style="width: 100%;">
                                <img style="width: 100%; margin:0 0 -133.3% 0;" src="{{url('uploads/'.$noticias[0]->foto)}}" class="absolute" alt="Responsive image">
                                <div class="container relative square">
                                    <div class="pt-5 pt-lg-4 pl-xl-5 hidden-sm-down">
                                        <a href="#seccion1"><i class="mr-4 border-0 btn-white rounded-circle icon-up-01 font-weight-bold"></i></a>
                                    </div>
                                    <div class="home-title-news-wrap pt-md-4 pt-xl-5 pb-md-title-new">
                                        <blockquote class="blockquote shadow mb-0 py-0">
                                            <p class="mb-0 h5"><a class="MyriadProSemibold color-white text-uppercase" href="{{url('/noticias?id='.$noticias[0]->id)}}">{!!substr($noticias[0]->titulo, 0, 35)!!}...</a></p>
                                            <p class="mb-0 MyriadProSemiboldIt h5"><a class="color-white" href="{{url('/noticias?id='.$noticias[0]->id)}}">leer más...</a></p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-0 separator-section"/>

                            <div class="relative crop-img-news" style="width: 100%;">
                                <img style="width: 100%; margin:0 0 -133.3% 0;" src="{{url('uploads/'.$noticias[1]->foto)}}" class="absolute" alt="Responsive image">
                                <div class="container relative square">
                                    <div class="home-title-news-wrap">
                                        <blockquote class="blockquote shadow mb-0 py-0">
                                            <p class="mb-0 h5"><a class="MyriadProSemibold color-white text-uppercase" href="{{url('/noticias?id='.$noticias[1]->id)}}">{!!substr($noticias[1]->titulo, 0, 35)!!}...</a></p>
                                            <p class="mb-0 MyriadProSemiboldIt h5"><a class="color-white" href="{{url('/noticias?id='.$noticias[1]->id)}}">leer más...</a></p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-0 separator-section"/>

                            <div class="relative crop-img-news" style="width: 100%;">
                                <img style="width: 100%; margin:0 0 -133.3% 0;" src="{{url('uploads/'.$noticias[2]->foto)}}" class="absolute" alt="Responsive image">
                                <div class="container relative square">
                                    <div class="home-title-news-wrap">
                                        <blockquote class="blockquote shadow mb-0 py-0">
                                            <p class="mb-0 h5"><a class="MyriadProSemibold color-white text-uppercase" href="{{url('/noticias?id='.$noticias[2]->id)}}">{!!substr($noticias[2]->titulo, 0, 35)!!}...</a></p>
                                            <p class="mb-0 MyriadProSemiboldIt h5"><a class="color-white" href="{{url('/noticias?id='.$noticias[2]->id)}}">leer más...</a></p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-0 separator-section hidden-lg-up"/>

                        </div>

                        <div class="col-12 col-lg-4 px-0">
                            <div class="d-flex flex-row pr-lg-2 flex-lg-column color-white-background">

                                <div style="background-image:url({{ URL::asset('uploads/imgenlace.jpg') }}); background-size: cover;" class="img-fluid img-width ml-lg-2 mr-1 mr-md-2 mr-lg-0 mb-lg-2">
                                    <div class="home-title-links-wrap square-links">
                                        <blockquote class="blockquote shadow mb-0 py-0">
                                            <p class="mb-0 h5"><a class="MyriadProSemibold color-white text-uppercase" href="{{url('/otros#seccion2')}}">enlaces de interés</a></p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div style=" background-image:url({{ URL::asset('uploads/imgfidciencia.jpg') }}); background-size: cover;" class=" img-fluid img-width ml-lg-2">
                                    <div class="home-title-links-wrap square-links">
                                        <blockquote class="blockquote shadow mb-0 py-0">
                                            <p class="mb-0 h5"><a class="MyriadProSemibold color-white text-uppercase" href="{{url('/otros')}}">fidel</a></p>
                                            <p class="mb-0 h5"><a class="MyriadProSemibold color-white text-uppercase" href="{{url('/otros')}}">y la ciencia</a></p>
                                        </blockquote>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-0 separator-section"/>
            </div>
            @include('subvistas.partial.footer')
        </div>
    </div>
    @stop
