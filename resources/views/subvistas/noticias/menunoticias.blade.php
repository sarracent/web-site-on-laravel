
    <nav class="nav flex-column news-font-size pl-md-4 pl-xl-5 MyriadProRegular">
        <p class="pl-2 pt-2 pl-md-4 pl-xl-5 text-uppercase MyriadProSemibold color-dark-gray">noticias recientes</p>
        <div class="pl-md-4 pl-xl-5 content-paginator-wrapper-menu menunoti">
            @foreach($titulo as $t)
                <a class="nav-link text-uppercase color-dark-gray nav-link-colunm py-0 mb-3" href="{{$t->id }}" >{!!substr($t->titulo, 0, 25)!!}...</a>                             
            @endforeach  
        </div>
    </nav>

<script type="text/javascript">
    
    $(document).ready(function () {
        if ($(window).width() < 576) {
        $('.content-paginator-wrapper-menu').contentPaginator({
            // container height
            pageHeight: $(window).height() - 301,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
        $('.menunoti a').click(function (e) {
            $('.clase1').hide();
            $('.clase2').show();
        });
    }
    if ($(window).width() >= 576 && $(window).width() < 768) {
        $('.content-paginator-wrapper-menu').contentPaginator({
            pageHeight: $(window).height() - 467,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
        $('.menunoti a').click(function (e) {
            $('.clase1').hide();
            $('.clase2').show();
        });
    }
    if ($(window).width() >= 768 && $(window).width() < 960) {
        $('.content-paginator-wrapper-menu').contentPaginator({
            pageHeight: $(window).height() - 274,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'

        });
    }
    if ($(window).width() >= 960 && $(window).width() < 992) {
        $('.content-paginator-wrapper-menu').contentPaginator({
            pageHeight: $(window).height() - 196,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 992 && $(window).width() < 1200) {
        $('.content-paginator-wrapper-menu').contentPaginator({
            pageHeight: $(window).height() - 214,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 1200 && $(window).width() < 1400) {
        $('.content-paginator-wrapper-menu').contentPaginator({
            pageHeight: $(window).height() - 217,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 1400) {
        $('.content-paginator-wrapper-menu').contentPaginator({
            pageHeight: $(window).height() - 286,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
        
        
        $(".menunoti a").click(function (e) {
            var ur = $(this).attr('href');
            e.preventDefault();
            $("#noticias").load('noticias/noticia', {id: parseInt(ur)});
            return false;
        });
    });

</script>


