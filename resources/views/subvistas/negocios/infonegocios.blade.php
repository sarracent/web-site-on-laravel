
<div class="separator hidden-md-up py-4 py-sm-5">
    <div class="d-flex justify-content-end">
        <div class="mr-auto"><a onclick="atras()"><i class="mr-4 border-0 btn-dark-gray rounded-circle icon-back-01 font-weight-bold"></i></a></div>
        <a data-toggle="modal" data-target="#menuModal"><i class="border-0 btn-dark-gray rounded-circle icon-menu-01 font-weight-bold"></i></a>
    </div>
</div>

<div class="pr-lg-colunm color-white-background">

    <div class="img-width img-fluid padding-news-img" style="background-image:url({{url('uploads/'.$noticia[0]->foto)}});background-size: cover;">
    </div>

    <div class="border-left-recent-news px-lg-5" id="cuerponegocio" >
        <div class="d-flex flex-column mt-2 pt-2 pt-lg-0 px-lg-5">
            <div  class="content-paginator-wrapper-general color-dark-gray MyriadProRegular py-programs">
                <p class="text-uppercase color-dark-gray MyriadProSemibold">{{$noticia[0]->titulo}}</p>
                {!!$noticia[0]->cuerpo!!}     
            </div>
        </div>     
    </div>
</div>
{!!Html::script('js/paginator-options.js')!!}
<script type="text/javascript">
    $(document).ready(function () {

        $("#titulocontenido a").click(function (e) {
            var ur = $(this).attr('href');
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: "negocios/info",
                data: "id=" + ur,
                success: function (data) {
                    $("#infonegocios").html(data);

                },
                error: function (data1) {

                }
            });
            return false;
        });
    });


    $(document).ready(function () {

        $("#nclasificacion a").click(function (e) {
            var ur = $(this).attr('href');
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: "negocios/clasificacion",
                data: "clasificacion=" + ur,
                success: function (data) {
                    $("#infonegocios").html(data);

                },
                error: function (data1) {

                }
            });
            return false;
        });
    });

    function atras() {
        $(document).ready(function () {
            $('.clase4').hide();
            $('.clase3').show();
            return false;
        });
    }
    ;
</script>
