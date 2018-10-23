<div class="separator hidden-md-up py-4 py-sm-5">
    <div class="d-flex justify-content-end">
        <div class="mr-auto"><a onclick="atras()"><i class="mr-4 border-0 btn-dark-gray rounded-circle icon-back-01 font-weight-bold"></i></a></div>
        <a data-toggle="modal" data-target="#menuModal"><i class="border-0 btn-dark-gray rounded-circle icon-menu-01 font-weight-bold"></i></a>
    </div>
</div>

<div class="pr-lg-colunm color-white-background">

    <div class="img-width img-fluid padding-news-img" style="background-image:url({{url('uploads/'.$fotoclasif[0]->foto)}});background-size: cover;">
    </div>

    <div class="border-left-recent-news px-lg-5">

        <p class="mt-2 pt-2 pt-lg-0 text-uppercase color-dark-gray MyriadProSemibold px-lg-5 py-programs">{{$negociosdatos[0]->clasificacion}}</p>

        <nav class="nav flex-column news-font-size MyriadProRegular px-lg-5" id="titulocontenido">
            <div class="content-paginator-wrapper-menu-negocios">
                @foreach($negociosdatos as $n)
                <a class="nav-link progranm color-dark-gray" href="{{$n->id }}" >{{$n->titulo}}</a>
                @endforeach  
            </div>
        </nav>



    </div>
</div>
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
        if ($(this).width() >= 768 && $(this).width() < 960) {
            $('.content-paginator-wrapper-menu-negocios').contentPaginator({
                pageHeight: $(window).height() - 469,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
        if ($(this).width() >= 960 && $(this).width() < 992) {
            $('.content-paginator-wrapper-menu-negocios').contentPaginator({
                pageHeight: $(window).height() - 320,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
        if ($(this).width() >= 992 && $(this).width() < 1200) {
            $('.content-paginator-wrapper-menu-negocios').contentPaginator({
                pageHeight: $(window).height() - 320,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
        if ($(this).width() >= 1200 && $(this).width() < 1400) {
            $('.content-paginator-wrapper-menu-negocios').contentPaginator({
                pageHeight: $(window).height() - 379,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
        if ($(this).width() >= 1400 && $(this).width() < 1600) {
            $('.content-paginator-wrapper-menu-negocios').contentPaginator({
                pageHeight: $(window).height() - 450,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
        if ($(this).width() >= 1600) {
            $('.content-paginator-wrapper-menu-negocios').contentPaginator({
                pageHeight: $(window).height() - 499,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
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