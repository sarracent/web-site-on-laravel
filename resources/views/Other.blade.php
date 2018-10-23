@extends('subvistas.layouts.layout')        
@section('content')
@parent
<title>BIOCUBAFARMA|OTROS</title>
{!!Html::script('js/otro.js')!!} 
</head>
<body>
    @include('subvistas.modal.menuotros')
    <div class="container-wrap" >
        <div id="fullpage">
            <div class="section section-others color-white-background">
                @include('subvistas.partial.menuotros')
                <div class="hidden-md-up py-4 py-sm-5 img-width img-fluid" style="background-image: url({{ URL::asset('uploads/img2.jpg') }}); background-size: cover;">
                    <div class="container d-flex justify-content-end">
                        <div class="mr-auto"><a onclick="atras()"><i class="display-trasparent display mr-4 border-0 btn-white rounded-circle icon-back-01 font-weight-bold"></i></a></div>
                        <a data-toggle="modal" data-target="#menuModal"><i class="border-0 btn-white rounded-circle icon-menu-01 font-weight-bold"></i></a>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 clase1-others">
                            <div class="d-flex flex-column mt-4 mt-sm-5 mt-lg-3 mt-others">
                                <a class="active-link nav-link color-dark-gray nav-link-colunm py-0 mb-3 MyriadProRegular news-font-size text-uppercase font-weight-bold ">FIDEL Y LA CIENCIA</a>
                                <div class="content-paginator-wrapper-frases-fidel mt-2 pt-2 mt-md-0 pt-md-0 mf menu-fidel">
                                    @foreach($fidelciencia as $f)
                                    <p><a class="MyriadProRegular progranm news-font-size color-dark-gray" href="{{$f->id}}">{!!substr($f->titulo, 0, 42)!!}...</a></p>
                                    @endforeach
                                </div>
                            </div>
                        </div>  

                        <div class="col-12 col-md-6 col-lg-8 contenido clase2-others">
                            <div class="border-left-recent-news mt-4 mt-sm-5 mt-lg-3 px-lg-5 hidden-sm-down">
                                <div  class="d-flex justify-content-end px-lg-5 pt-others">

                                    <div class="content-paginator-wrapper-discurso MyriadProRegular">
                                        <p class="text-uppercase color-dark-gray MyriadProSemibold">{{$fidelciencia[0]->titulo}}</p>
                                        {!!$fidelciencia[0]->contenido!!}
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container py-4 py-sm-5 img-width img-fluid hidden-md-up" style="background-image: url({{ URL::asset('uploads/img2.jpg') }}); background-size: cover;">
                    <a href="#"><i class="display-trasparent border-0 btn-white rounded-circle icon-down-01 font-weight-bold"></i></a>
                </div>
            </div>
            <div class="section section-links-others" style="background-image: url({{ URL::asset('uploads/menuenlace.jpg') }}); background-size: cover;">
                <div class="container py-content">
                    <div class="d-flex justify-content-end">
                        <div class="mr-auto"><a href="#seccion1"><i class="mr-4 border-0 btn-white rounded-circle icon-up-01 font-weight-bold"></i></a></div>
                        <div><a href="#" data-toggle="modal" data-target="#menuModal"><i class="border-0 btn-white rounded-circle hidden-md-up icon-menu-01 font-weight-bold"></i></a></div>
                    </div>
                </div>

                <div class="color-white-background">
                    <div class="container"> 
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="d-flex flex-row mt-4 mt-sm-5 mt-lg-3 mt-others">
                                    <nav class="nav flex-column MyriadProRegular news-font-size text-uppercase">
                                        <a class="active-link nav-link color-dark-gray nav-link-colunm py-0 mb-3 font-weight-bold menuinteres">ENLACES DE INTERÉS</a>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-8" id="contenido">
                                <div class="border-left-recent-news  mt-md-5 mt-lg-3 px-lg-5">

                                    <nav class="nav flex-column news-font-size MyriadProRegular px-lg-5 pt-others menuinteres">
                                        <div class="content-paginator-wrapper-link-interes">
                                            @foreach($interes as $int)
                                            <a class="nav-link progranm text-uppercase color-dark-gray" href="{{$int->contenido }}" target="_blank">{!!substr($int->titulo, 0, 35)!!}</a>
                                            @endforeach  
                                        </div>
                                    </nav> 
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <hr class="my-0 separator-section hidden-md-down"/>
            </div>           
            @include('subvistas.partial.footer')
        </div>
    </div>
    @stop
