
<div class="pt-md-5 pt-lg-4 pl-lg-filter-emp">
    <div class="content-paginator-wrapper-menuemp MyriadProRegular menuemp">
        @foreach($empresas as $t)
            <a class="nav-link color-dark-gray nav-link-colunm py-0 mb-3" href="{{$t->id }}" >{!!substr($t->titulo, 0, 25)!!}</a>
        @endforeach  
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function (){
        $(".menuemp a").click(function (e) {
            var ur = $(this).attr('href');
            e.preventDefault();
            $("#infoempresas").load('empresas/infoempresas', {id: parseInt(ur)});
            return false;
        });

        if ($(window).width() < 576) {
            $('.content-paginator-wrapper-menuemp').contentPaginator({
                // container height
                pageHeight: $(window).height() - 260,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
            $(".menuemp a").click(function (e) {
                $('.clase3').hide();
                $('.clase4').show();
            });
        }
        if ($(this).width() >= 576 && $(this).width() < 768) {
            $('.content-paginator-wrapper-menuemp').contentPaginator({
                pageHeight: $(window).height() - 425,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
            $(".menuemp a").click(function (e) {
                $('.clase3').hide();
                $('.clase4').show();
            });
        }
        if ($(this).width() >= 768 && $(this).width() < 960) {
            $('.content-paginator-wrapper-menuemp').contentPaginator({
                pageHeight: $(window).height() - 485,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
        if ($(this).width() >= 960 && $(this).width() < 992) {
            $('.content-paginator-wrapper-menuemp').contentPaginator({
                pageHeight: $(window).height() - 350,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
        if ($(this).width() >= 992 && $(this).width() < 1200) {
            $('.content-paginator-wrapper-menuemp').contentPaginator({
                pageHeight: $(window).height() - 374,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }  
        if ($(this).width() >= 1200 && $(this).width() < 1400) {
            $('.content-paginator-wrapper-menuemp').contentPaginator({
                pageHeight: $(window).height() - 382,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
        if ($(this).width() >= 1400) {
            $('.content-paginator-wrapper-menuemp').contentPaginator({
                pageHeight: $(window).height() - 478,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
    });
</script>
