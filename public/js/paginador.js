var ancho;
$(document).ready(function () {
    //alert("El ancho de la ventana es " + $(window).width() + "y la altura es" + $(window).height());
    var ancho = $(window).width();
    /************************HOME-group-industries***************************************************/
    if (ancho < 576) {
        $('.content-paginator-wrapper-industries-group').contentPaginator({
            pageHeight: $(window).height() - 210,
            prevText: '',
            nextText: '',
            numbersText: ''
        });
    }
    if (ancho >= 576 && ancho < 768) {
        $('.content-paginator-wrapper-industries-group').contentPaginator({
            pageHeight: $(window).height() - 380,
            prevText: '',
            nextText: '',
            numbersText: ''
        });
    }
    /**********************HOME-mision-vision**********************************************************/
    if (ancho < 576) {
        $('.content-paginator-wrapper-mision-vision').contentPaginator({
            pageHeight: $(window).height() - 258,
            prevText: '',
            nextText: '',
            numbersText: ''
        });
    }
    if (ancho >= 576 && ancho < 768) {
        $('.content-paginator-wrapper-mision-vision').contentPaginator({
            pageHeight: $(window).height() - 400,
            prevText: '',
            nextText: '',
            numbersText: ''
        });
    }
    if (ancho >= 768 && ancho < 960) {
        $('.content-paginator-wrapper-mision-vision').contentPaginator({
            pageHeight: $(window).height() - 430,
            prevText: '',
            nextText: '',
            numbersText: ''
        });
    }
    if (ancho >= 960 && ancho < 992) {
        $('.content-paginator-wrapper-mision-vision').contentPaginator({
            pageHeight: $(window).height() - 287,
            prevText: '',
            nextText: '',
            numbersText: ''
        });
    }
    if (ancho >= 992 && ancho < 1200) {
        $('.content-paginator-wrapper-mision-vision').contentPaginator({
            pageHeight: $(window).height() - 372,
            prevText: '',
            nextText: '',
            numbersText: ''
        });
    }
    if (ancho >= 1200) {
        $('.content-paginator-wrapper-mision-vision').contentPaginator({
            pageHeight: $(window).height() - 500,
            prevText: '',
            nextText: '',
            numbersText: ''
        });
    }
    /**********************NOTICIAS**********************************************************************************/
    if (ancho < 576) {
        $('.content-paginator-wrapper').contentPaginator({
            pageHeight: $(window).height() - 350,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 576 && ancho < 768) {
        $('.content-paginator-wrapper').contentPaginator({
            pageHeight: $(window).height() - 510,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 768 && ancho < 960) {
        $('.content-paginator-wrapper').contentPaginator({
            pageHeight: $(window).height() - 599,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 960 && ancho < 992) {
        $('.content-paginator-wrapper').contentPaginator({
            pageHeight: $(window).height() - 283,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 992 && ancho < 1200) {
        $('.content-paginator-wrapper').contentPaginator({
            pageHeight: $(window).height() - 305,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 1200 && ancho < 1400) {
        $('.content-paginator-wrapper').contentPaginator({
            pageHeight: $(window).height() - 338,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 1400 && ancho < 1600) {
        $('.content-paginator-wrapper').contentPaginator({
            pageHeight: $(window).height() - 374,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 1600) {
        $('.content-paginator-wrapper').contentPaginator({
            pageHeight: $(window).height() - 375,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    /********************************************************************/
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
            pageHeight: $(window).height() - 216,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 1400 && $(window).width() < 1600) {
        $('.content-paginator-wrapper-menu').contentPaginator({
            pageHeight: $(window).height() - 286,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 1600) {
        $('.content-paginator-wrapper-menu').contentPaginator({
            pageHeight: $(window).height() - 290,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    /******************************************************************************/
    if ($(window).width() < 576) {
        $('.content-paginator-wrapper-recent-news').contentPaginator({
            pageHeight: $(window).height() - 350,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 576 && $(window).width() < 768) {
        $('.content-paginator-wrapper-recent-news').contentPaginator({
            pageHeight: $(window).height() - 510,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'

        });
    }
    if ($(window).width() >= 768 && $(window).width() < 960) {
        $('.content-paginator-wrapper-recent-news').contentPaginator({
            pageHeight: $(window).height() - 407,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 960 && $(window).width() < 992) {
        $('.content-paginator-wrapper-recent-news').contentPaginator({
            pageHeight: $(window).height() - 300,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 992 && $(window).width() < 1200) {
        $('.content-paginator-wrapper-recent-news').contentPaginator({
            pageHeight: $(window).height() - 310,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 1200 && $(window).width() < 1400) {
        $('.content-paginator-wrapper-recent-news').contentPaginator({
            pageHeight: $(window).height() - 360,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 1400 && $(window).width() < 1600) {
        $('.content-paginator-wrapper-recent-news').contentPaginator({
            pageHeight: $(window).height() - 427,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 1600) {
        $('.content-paginator-wrapper-recent-news').contentPaginator({
            pageHeight: $(window).height() - 476,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    /**********************EMPRESA*************************************************/
    if ($(window).width() < 576) {
        $('.content-paginator-wrapper-menudir').contentPaginator({
            // container height
            pageHeight: $(window).height() - 267,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
        $('.menudir p a').click(function (e) {
            $('.display').removeClass("display-trasparent");
            $('.clase1-menudir').hide();
            $('.clase2-menudir').show();
        });
    }
    if ($(window).width() >= 576 && $(window).width() < 768) {
        $('.content-paginator-wrapper-menudir').contentPaginator({
            pageHeight: $(window).height() - 410,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
        $('.menudir p a').click(function (e) {
            $('.display').removeClass("display-trasparent");
            $('.clase1-menudir').hide();
            $('.clase2-menudir').show();
        });
    }
    if ($(window).width() >= 768 && $(window).width() < 960) {
        $('.content-paginator-wrapper-menudir').contentPaginator({
            pageHeight: $(window).height() - 386,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 960 && $(window).width() < 992) {
        $('.content-paginator-wrapper-menudir').contentPaginator({
            pageHeight: $(window).height() - 344,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 992 && $(window).width() < 1200) {
        $('.content-paginator-wrapper-menudir').contentPaginator({
            pageHeight: $(window).height() - 376,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 1200 && $(window).width() < 1400) {
        $('.content-paginator-wrapper-menudir').contentPaginator({
            pageHeight: $(window).height() - 400,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 1400) {
        $('.content-paginator-wrapper-menudir').contentPaginator({
            pageHeight: $(window).height() - 499,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    /***********************************************************************/
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
            pageHeight: $(window).height() - 350,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 768 && $(window).width() < 960) {
        $('.content-paginator-wrapper-contactos').contentPaginator({
            pageHeight: $(window).height() - 493,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 960 && $(window).width() < 992) {
        $('.content-paginator-wrapper-contactos').contentPaginator({
            pageHeight: $(window).height() - 429,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 992 && $(window).width() < 1200) {
        $('.content-paginator-wrapper-contactos').contentPaginator({
            pageHeight: $(window).height() - 466,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 1200 && $(window).width() < 1400) {
        $('.content-paginator-wrapper-contactos').contentPaginator({
            pageHeight: $(window).height() - 490,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 1400) {
        $('.content-paginator-wrapper-contactos').contentPaginator({
            pageHeight: $(window).height() - 590,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    /*********************************************************************************/
    if ($(window).width() < 576) {
        $('.content-paginator-wrapper-menuemp').contentPaginator({
            // container height
            pageHeight: $(window).height() - 260,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
        $('.mempresas p a').click(function (e) {
            $('.clase3').hide();
            $('.clase4').show();
        });
    }
    if ($(window).width() >= 576 && $(window).width() < 768) {
        $('.content-paginator-wrapper-menuemp').contentPaginator({
            pageHeight: $(window).height() - 425,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
        $('.mempresas p a').click(function (e) {
            $('.clase3').hide();
            $('.clase4').show();
        });
    }
    if ($(window).width() >= 768 && $(window).width() < 960) {
        $('.content-paginator-wrapper-menuemp').contentPaginator({
            pageHeight: $(window).height() - 485,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 960 && $(window).width() < 992) {
        $('.content-paginator-wrapper-menuemp').contentPaginator({
            pageHeight: $(window).height() - 350,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 992 && $(window).width() < 1200) {
        $('.content-paginator-wrapper-menuemp').contentPaginator({
            pageHeight: $(window).height() - 374,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 1200 && $(window).width() < 1400) {
        $('.content-paginator-wrapper-menuemp').contentPaginator({
            pageHeight: $(window).height() - 382,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if ($(window).width() >= 1400) {
        $('.content-paginator-wrapper-menuemp').contentPaginator({
            pageHeight: $(window).height() - 478,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    /*********************NEGOCIO**************************************************************/
    if (ancho < 576) {
        $('.content-paginator-wrapper-business').contentPaginator({
            // container height
            pageHeight: $(window).height() - 359,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 576 && ancho < 768) {
        $('.content-paginator-wrapper-business').contentPaginator({
            pageHeight: $(window).height() - 510,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 768 && ancho < 960) {
        $('.content-paginator-wrapper-business').contentPaginator({
            pageHeight: $(window).height() - 599,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 960 && ancho < 992) {
        $('.content-paginator-wrapper-business').contentPaginator({
            pageHeight: $(window).height() - 283,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 992 && ancho < 1200) {
        $('.content-paginator-wrapper-business').contentPaginator({
            pageHeight: $(window).height() - 305,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 1200 && ancho < 1400) {
        $('.content-paginator-wrapper-business').contentPaginator({
            pageHeight: $(window).height() - 338,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 1400) {
        $('.content-paginator-wrapper-business').contentPaginator({
            pageHeight: $(window).height() - 374,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    /******************************************************************************************/
    if (ancho < 576) {
        $('.content-paginator-wrapper-business-nav').contentPaginator({
            // container height
            pageHeight: $(window).height() - 360,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
        $('.info').click(function (e) {
            $('.clase3').hide();
            $('.clase4').show();
        });
        $('.infoneg').click(function (e) {
            $('.clase3').hide();
            $('.clase4').show();
        });
    }
    if (ancho >= 576 && ancho < 768) {
        $('.content-paginator-wrapper-business-nav').contentPaginator({
            pageHeight: $(window).height() - 709,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
        $('.info').click(function (e) {
            $('.clase3').hide();
            $('.clase4').show();
        });
        $('.infoneg').click(function (e) {
            $('.clase3').hide();
            $('.clase4').show();
        });
    }
    if (ancho >= 768 && ancho < 960) {
        $('.content-paginator-wrapper-business-nav').contentPaginator({
            pageHeight: $(window).height() - 175,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'

        });
    }
    if (ancho >= 960 && ancho < 992) {
        $('.content-paginator-wrapper-business-nav').contentPaginator({
            pageHeight: $(window).height() - 113,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 992 && ancho < 1200) {
        $('.content-paginator-wrapper-business-nav').contentPaginator({
            pageHeight: $(window).height() - 125,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 1200 && ancho < 1400) {
        $('.content-paginator-wrapper-business-nav').contentPaginator({
            pageHeight: $(window).height() - 160,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 1400) {
        $('.content-paginator-wrapper-business-nav').contentPaginator({
            pageHeight: $(window).height() - 215,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    /***********************OTROS******************************************************************/
    if (ancho < 576) {
        $('.content-paginator-wrapper-others').contentPaginator({
            // container height
            pageHeight: $(window).height() - 274,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 576 && ancho < 768) {
        $('.content-paginator-wrapper-others').contentPaginator({
            pageHeight: $(window).height() - 391,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 768 && ancho < 960) {
        $('.content-paginator-wrapper-others').contentPaginator({
            pageHeight: $(window).height() - 381,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 960 && ancho < 992) {
        $('.content-paginator-wrapper-others').contentPaginator({
            pageHeight: $(window).height() - 357,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 992 && ancho < 1200) {
        $('.content-paginator-wrapper-others').contentPaginator({
            pageHeight: $(window).height() - 398,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 1200 && ancho < 1400) {
        $('.content-paginator-wrapper-others').contentPaginator({
            pageHeight: $(window).height() - 422,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 1400) {
        $('.content-paginator-wrapper-others').contentPaginator({
            pageHeight: $(window).height() - 494,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    /******************************************************************************************/
    if (ancho < 576) {
        $('.content-paginator-wrapper-frases-fidel').contentPaginator({
            // container height
            pageHeight: $(window).height() - 261,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
        $('.menu-fidel p a').click(function (e) {
            $('.display').removeClass("display-trasparent");
            $('.clase1-others').hide();
            $('.clase2-others').show();
        });
    }
    if (ancho >= 576 && ancho < 768) {
        $('.content-paginator-wrapper-frases-fidel').contentPaginator({
            pageHeight: $(window).height() - 399,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
        $('.menu-fidel p a').click(function (e) {
            $('.display').removeClass("display-trasparent");
            $('.clase1-others').hide();
            $('.clase2-others').show();
        });
    }
    if (ancho >= 768 && ancho < 960) {
        $('.content-paginator-wrapper-frases-fidel').contentPaginator({
            pageHeight: $(window).height() - 373,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 960 && ancho < 992) {
        $('.content-paginator-wrapper-frases-fidel').contentPaginator({
            pageHeight: $(window).height() - 333,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 992 && ancho < 1200) {
        $('.content-paginator-wrapper-frases-fidel').contentPaginator({
            pageHeight: $(window).height() - 367,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 1200 && ancho < 1400) {
        $('.content-paginator-wrapper-frases-fidel').contentPaginator({
            pageHeight: $(window).height() - 393,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 1400) {
        $('.content-paginator-wrapper-frases-fidel').contentPaginator({
            pageHeight: $(window).height() - 465,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    /******************************************************************************************/
    if (ancho < 576) {
        $('.content-paginator-wrapper-link-interes').contentPaginator({
            // container height
            pageHeight: $(window).height() - 250,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 576 && ancho < 768) {
        $('.content-paginator-wrapper-link-interes').contentPaginator({
            pageHeight: $(window).height() - 378,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 768 && ancho < 960) {
        $('.content-paginator-wrapper-link-interes').contentPaginator({
            pageHeight: $(window).height() - 375,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 960 && ancho < 992) {
        $('.content-paginator-wrapper-link-interes').contentPaginator({
            pageHeight: $(window).height() - 294,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 992 && ancho < 1200) {
        $('.content-paginator-wrapper-link-interes').contentPaginator({
            pageHeight: $(window).height() - 325,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 1200 && ancho < 1400) {
        $('.content-paginator-wrapper-link-interes').contentPaginator({
            pageHeight: $(window).height() - 350,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 1400) {
        $('.content-paginator-wrapper-link-interes').contentPaginator({
            pageHeight: $(window).height() - 422,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
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
    /***************************BUSQUEDA******************************************************************/
    if (ancho < 576) {
        $('.content-paginator-wrapper-search').contentPaginator({
            // container height
            pageHeight: $(window).height() - 296,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 576 && ancho < 768) {
        $('.content-paginator-wrapper-search').contentPaginator({
            pageHeight: $(window).height() - 448,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 768 && ancho < 960) {
        $('.content-paginator-wrapper-search').contentPaginator({
            pageHeight: $(window).height() - 448,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 960 && ancho < 992) {
        $('.content-paginator-wrapper-search').contentPaginator({
            pageHeight: $(window).height() - 375,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 992 && ancho < 1200) {
        $('.content-paginator-wrapper-search').contentPaginator({
            pageHeight: $(window).height() - 417,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 1200 && ancho < 1400) {
        $('.content-paginator-wrapper-search').contentPaginator({
            pageHeight: $(window).height() - 440,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 1400) {
        $('.content-paginator-wrapper-search').contentPaginator({
            pageHeight: $(window).height() - 523,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    /******************************************************************************************/
    if (ancho < 576) {
        $('.content-paginator-wrapper-busqueda').contentPaginator({
            pageHeight: $(window).height() - 350,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 576 && ancho < 768) {
        $('.content-paginator-wrapper-busqueda').contentPaginator({
            pageHeight: $(window).height() - 510,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 768 && ancho < 960) {
        $('.content-paginator-wrapper-busqueda').contentPaginator({
            pageHeight: $(window).height() - 599,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 960 && ancho < 992) {
        $('.content-paginator-wrapper-busqueda').contentPaginator({
            pageHeight: $(window).height() - 283,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 992 && ancho < 1200) {
        $('.content-paginator-wrapper-busqueda').contentPaginator({
            pageHeight: $(window).height() - 305,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 1200 && ancho < 1400) {
        $('.content-paginator-wrapper-busqueda').contentPaginator({
            pageHeight: $(window).height() - 339,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
    if (ancho >= 1400) {
        $('.content-paginator-wrapper-busqueda').contentPaginator({
            pageHeight: $(window).height() - 374,
            prevText: '',
            nextText: '',
            numbersText: '{0} de {1}'
        });
    }
});
