@extends('subvistas.layouts.layout')        
@section('content')
@parent
<title>BIOCUBAFARMA|GALERIA</title>
{!!Html::style('css/unite-gallery.css')!!}
</head>
<body>
    @include('subvistas.modal.menu')
    <div class="container-wrap">
        <div id="fullpage">
            <div class="section news color-white-background" data-section-name="seccion">
                <div class="align-button-menu separator container hidden-md-up py-4 py-sm-5">
                    <a data-toggle="modal" data-target="#menuModal"><i class="border-0 btn-dark-gray rounded-circle icon-menu-01 font-weight-bold"></i></a>
                </div>
                @include('subvistas.partial.menugaleria')
                <div class="container-wrapper gallery-bottom">
                    <div id="gallery-extra-small">
                        @for($i=0; $i < count($galerias);$i++)
                        <img src="{{url('uploads/'.$galerias[$i]->foto)}}"
                             data-image="{{url('uploads/'.$galerias[$i]->foto)}}">
                        @endfor
                    </div>
                    <div id="gallery-small">
                        @for($i=0; $i < count($galerias);$i++)
                        <img src="{{url('uploads/'.$galerias[$i]->foto)}}"
                             data-image="{{url('uploads/'.$galerias[$i]->foto)}}">
                        @endfor
                    </div>
                    <div id="gallery-medium">
                        @for($i=0; $i < count($galerias);$i++)
                        <img src="{{url('uploads/'.$galerias[$i]->foto)}}"
                             data-image="{{url('uploads/'.$galerias[$i]->foto)}}">
                        @endfor
                    </div>
                    <div id="gallery-medium-large">
                        @for($i=0; $i < count($galerias);$i++)
                        <img src="{{url('uploads/'.$galerias[$i]->foto)}}"
                             data-image="{{url('uploads/'.$galerias[$i]->foto)}}">
                        @endfor
                    </div>
                    <div id="gallery-large">
                        @for($i=0; $i < count($galerias);$i++)
                        <img src="{{url('uploads/'.$galerias[$i]->foto)}}"
                             data-image="{{url('uploads/'.$galerias[$i]->foto)}}">
                        @endfor
                    </div>
                    <div id="gallery">
                        @for($i=0; $i < count($galerias);$i++)
                        <img src="{{url('uploads/'.$galerias[$i]->foto)}}"
                             data-image="{{url('uploads/'.$galerias[$i]->foto)}}">
                        @endfor
                    </div>
                    <div id="gallery-big">
                        @for($i=0; $i < count($galerias);$i++)
                        <img src="{{url('uploads/'.$galerias[$i]->foto)}}"
                             data-image="{{url('uploads/'.$galerias[$i]->foto)}}">
                        @endfor
                    </div>
                    <div id="gallery-extra-big">
                        @for($i=0; $i < count($galerias);$i++)
                        <img src="{{url('uploads/'.$galerias[$i]->foto)}}"
                             data-image="{{url('uploads/'.$galerias[$i]->foto)}}">
                        @endfor
                    </div>
                </div>
            </div>      
            @include('subvistas.partial.footer')
        </div>
    </div>
    {!!Html::script('js/unitegallery.min.js')!!}
    {!!Html::script('js/ug-theme-compact.js')!!}
    {!!Html::script('js/gallery.js')!!}
    @stop
