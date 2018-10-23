
    <div class="content-paginator-wrapper-contactos mt-4 mt-sm-5 mt-md-0 MyriadProRegular color-dark-gray">
        <p class="hidden-md-up text-uppercase MyriadProSemibold color-dark-gray mb-2 h3-title">{{$contactos->direccion}}</p>
        <p class="MyriadProSemibold color-dark-gray">{{$contactos->director}}</p>
        <!--{!!$contactos->mision!!}-->
    </div>

<script type="text/javascript">
    function atras() {
        $(document).ready(function () {
            $('.display').addClass("display-trasparent");
            $('.clase2-menudir').hide();
            $('.clase1-menudir').show();
                return false;
        });
    };

    $(document).ready(function () {
        if ($(window).width() < 576) {
        $('.content-paginator-wrapper-contactos').contentPaginator({
            // container height
            pageHeight: $(window).height() - 212,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 576 && $(window).width() < 768) {
        $('.content-paginator-wrapper-contactos').contentPaginator({
            pageHeight: $(window).height()-350,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 768 && $(window).width() < 960) {
        $('.content-paginator-wrapper-contactos').contentPaginator({
            pageHeight: $(window).height()-388,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 960 && $(window).width() < 992) {
        $('.content-paginator-wrapper-contactos').contentPaginator({
            pageHeight: $(window).height()-349,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 992 && $(window).width() < 1200) {
        $('.content-paginator-wrapper-contactos').contentPaginator({
            pageHeight: $(window).height()-375,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 1200 && $(window).width() < 1400) {
        $('.content-paginator-wrapper-contactos').contentPaginator({
            pageHeight: $(window).height()-400,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 1400) {
        $('.content-paginator-wrapper-contactos').contentPaginator({
            pageHeight: $(window).height()-500,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    });
</script>
