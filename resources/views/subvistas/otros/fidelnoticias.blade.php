<div class="border-left-recent-news mt-4 mt-sm-5 mt-lg-3 px-lg-5">
    <div  class="d-flex justify-content-end px-lg-5 pt-others ">

        <div class="content-paginator-wrapper-discurso MyriadProRegular">
            <p class="text-uppercase color-dark-gray MyriadProSemibold">{{$noticias->titulo}}</p>
            <p>{!!$noticias->contenido!!}</p>
        </div>
    </div>
</div>
{!!Html::script('js/gallery.js')!!}
{!!Html::script('js/paginator-options.js')!!}
<script>
    function atras() {
        $(document).ready(function () {
            $('.display').addClass("display-trasparent");
            $('.clase2-others').hide();
            $('.clase1-others').show();
                return false;
        });
    };
    var ancho;
    $(document).ready(function () {
        //alert("El ancho de la ventana es " + $(window).width() + "y la altura es" + $(window).height());
        var ancho = $(window).width();
        /*****************************************************************************************/
        if (ancho < 576) {
            $('.content-paginator-wrapper-discurso').contentPaginator({
                // container height
                pageHeight: $(window).height() - 212,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
        if (ancho >= 576 && ancho < 768) {
            $('.content-paginator-wrapper-discurso').contentPaginator({
                pageHeight: $(window).height() - 350,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
        if (ancho >= 768 && ancho < 960) {
            $('.content-paginator-wrapper-discurso').contentPaginator({
                pageHeight: $(window).height() - 334,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
        if (ancho >= 960 && ancho < 992) {
            $('.content-paginator-wrapper-discurso').contentPaginator({
                pageHeight: $(window).height() - 294,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
        if (ancho >= 992 && ancho < 1200) {
            $('.content-paginator-wrapper-discurso').contentPaginator({
                pageHeight: $(window).height() - 327,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
        if (ancho >= 1200 && ancho < 1400) {
            $('.content-paginator-wrapper-discurso').contentPaginator({
                pageHeight: $(window).height() - 351,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
        if (ancho >= 1400) {
            $('.content-paginator-wrapper-discurso').contentPaginator({
                pageHeight: $(window).height() - 423,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }

    });
</script>