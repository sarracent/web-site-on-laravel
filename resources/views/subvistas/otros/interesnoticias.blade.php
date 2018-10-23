@extends('subvistas.layouts.layout')        
@section('content')
@parent
<title>BIOCUBAFARMA|OTROS</title>
{!!Html::script('js/otro.js')!!} 
</head>
<body>

<body>
    @include('subvistas.modal.menuotros')
    <div class="container-wrap">
        <div id="fullpage"> 
            <div class="section color-white-background">
                @include('subvistas.partial.menuotros')
                <div class="container"> 
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="d-flex flex-row mt-3 mt-md-5 mt-lg-3 mt-others">
                                <nav class="nav flex-column MyriadProRegular news-font-size text-uppercase">
                                    <a class="nav-link color-dark-gray nav-link-colunm py-0 mb-3 font-weight-bold menufidel " href="/menufidel">FIDEL Y LA CIENCIA</a>
                                    <a class="active-link nav-link color-dark-gray nav-link-colunm py-0 mb-3 font-weight-bold menuinteres hidden-sm-down" id="" href="/enlace-interes">ENLACES DE INTERÉS</a>
                                </nav>
                            </div>
                        </div>  
                        <div class="col-12 col-md-6 col-lg-8" id="contenido">
                            <div class="border-left-recent-news px-lg-5">

                                <nav class="nav flex-column news-font-size MyriadProRegular px-lg-5 mt-md-5 mt-lg-3 pt-others menuinteres">
                                    <div class="content-paginator-wrapper-link-interes">
                                        @foreach($interes as $int)
                                        <a class="nav-link progranm color-dark-gray" href="{{$int->contenido }}" target="_blank">{!!substr($int->titulo, 0, 35)!!}...</a>
                                        @endforeach  
                                    </div>
                                </nav> 
                            </div>
                        </div>

                    </div>
                </div>
                <div class="others-img-separator-view-movil-02 container py-4 py-sm-5 img-width img-fluid hidden-md-up">
                    <a href="#"><i class="border-0 btn-white rounded-circle icon-down-01 font-weight-bold"></i></a>
                </div>
            </div>
            @include('subvistas.partial.footer')
        </div>
        @stop
