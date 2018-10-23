<div class="border-left-recent-news px-lg-5">
    <p class="mt-2 pt-2 px-lg-5 text-uppercase color-dark-gray MyriadProSemibold py-programs hidden-sm-down">frases de fidel relacionadas con ciencia, técnica e innovación</p>

    <div class="d-flex flex-column px-lg-5 menufidelint" >
        <div class="content-paginator-wrapper-not2">
            @for($i=0;$i < count($fidelciencia); $i++)
                <p><a class="MyriadProRegular progranm news-font-size color-dark-gray" href="{{'otros/noticia?id='.$fidelciencia[$i]->id}}">{{$fidelciencia[$i]->titulo}}</a></p>
            @endfor
        </div>   
    </div> 
</div>

<script type="text/javascript">
    $(document).ready(function () {
       
        if ($(this).width() < 576) {
            $('.content-paginator-wrapper-not2').contentPaginator({
                pageHeight: 265,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
        if ($(this).width() >= 576 && $(this).width() < 768) {
            $('.content-paginator-wrapper-not2 ').contentPaginator({
                pageHeight: 330,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'

            });
        }
        if ($(this).width() >= 768 && $(this).width() < 992) {
            $('.content-paginator-wrapper-not2').contentPaginator({
                pageHeight: 602,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
        if ($(this).width() >= 992 && $(this).width() < 1200) {
            $('.content-paginator-wrapper-not2').contentPaginator({
                pageHeight: 245,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
        if ($(this).width() >= 1200 && $(this).width() < 1400) {
            $('.content-paginator-wrapper-not2').contentPaginator({
                pageHeight: 223,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
        if ($(this).width() >= 1400) {
            $('.content-paginator-wrapper-not2').contentPaginator({
                pageHeight: 371,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }


    });

</script>