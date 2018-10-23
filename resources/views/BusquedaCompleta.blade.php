@extends('subvistas.layouts.layout') 
@section('content')
@parent
<title>BIOCUBAFARMA|BUSQUEDA</title>
</head>
<body>
    @include('subvistas.modal.menuhome')
    <div class="container-wrap">
        <div id="fullpage">
            <div class="section section-search color-white-background ultnot">
                @include('subvistas.partial.menubuscartodo')
                <div class="others-img-separator-view-movil-03 py-4 py-sm-5 img-width img-fluid hidden-md-up clase3">
                    <div class="align-button-menu container">
                        <a data-toggle="modal" data-target="#menuModal"><i class="border-0 btn-white rounded-circle icon-menu-01 font-weight-bold"></i></a>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="comp">
                                <p class="text-uppercase color-dark-gray MyriadProSemibold my-3 my-sm-5 my-search-all my-lg-3">{{$encabezado}} </p>
                                <p class="color-dark-gray MyriadProRegular">( <strong>{!!count($titulo)+count($titulo1)+count($titulo2)!!}</strong> resultados encontrados para el término de búsqueda <strong>"{!!$valor!!}"</strong> )</p>
                                <div class="MyriadProRegular content-paginator-wrapper-search">
                                    @foreach($titulo as $t)
                                    <hr class="separator-search-all my-0 pb-2"/>
                                    <p class="text-uppercase mb-1"><a class="MyriadProSemibold color-dark-gray" href="{{url('/noticias/noticiabus?id=').$t->id}}">{!!$t->titulo !!}</a></p>
                                    <p class="my-0">{!!substr($t->cuerpo, 0, 300)!!}...</p>
                                    @endforeach 
                                    @foreach($titulo1 as $t)
                                    <hr class="separator-search-all my-0 pb-2"/>
                                    <p class="text-uppercase mb-1"><a class="MyriadProSemibold color-dark-gray" href="{{url('/negocios/infon?id=').$t->id }}" >{!!$t->titulo !!}</a></p>
                                    <p class="my-0 pb-2 view-site-search">{!!substr($t->cuerpo, 0, 300)!!}...</p>
                                    @endforeach  
                                    @foreach($titulo2 as $t)
                                    <hr class="separator-search-all my-0 pb-2"/>
                                    <p class="text-uppercase mb-1"><a class="MyriadProSemibold color-dark-gray" href="{{url('/empresas/infoempresasbus?id=').$t->id }}" >{!!$t->titulo !!}</a></p>
                                    <p class="my-0">{!!substr($t->cuerpo, 0, 300)!!}...</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="others-img-separator-view-movil-03 container py-4 py-sm-5 img-width img-fluid hidden-md-up clase1">
                    <a href="#" class='scrollToTop'><i class="display-trasparent border-0 btn-white rounded-circle icon-down-01 font-weight-bold"></i></a>
                </div>
            </div>      
            @include('subvistas.partial.footer')
        </div>
    </div>
    @stop
