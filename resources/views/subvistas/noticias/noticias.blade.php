<div class="separator hidden-md-up py-4 py-sm-5">
    <div class="d-flex justify-content-end">
        <div class="mr-auto"><a onclick="atras()"><i class="mr-4 border-0 btn-dark-gray rounded-circle icon-back-01 font-weight-bold"></i></a></div>
        <a data-toggle="modal" data-target="#menuModal"><i class="border-0 btn-dark-gray rounded-circle icon-menu-01 font-weight-bold"></i></a>
    </div>
</div>

<div class="img-width img-fluid padding-news-img" style="background-image:url({{url('uploads/'.$noticia->foto)}});background-size: cover;">  
</div>

<div class="border-left-recent-news px-lg-5">
    <div class="d-flex flex-column mt-2 pt-2 pt-lg-0 px-lg-5">
        <div  class="content-paginator-wrapper-general color-dark-gray MyriadProRegular py-programs" >
            <p class="text-uppercase color-dark-gray MyriadProSemibold">{{$noticia->titulo}} {{$noticia->subtitulo}}</p>        
            {!!$noticia->cuerpo!!}    
        </div>
    </div>
</div>
{!!Html::script('js/paginator-options.js')!!}
<script type="text/javascript">
    function atras() {
        $(document).ready(function () {
            $('.clase2').hide();
            $('.clase1').show();
            return false;
        });
    }
    ;
</script>
