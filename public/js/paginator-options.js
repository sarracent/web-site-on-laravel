$(document).ready(function () {
        if ($(window).width() < 576) {
            $('.content-paginator-wrapper-general').contentPaginator({
                pageHeight: $(window).height()-350,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
        if ($(window).width() >= 576 && $(window).width() < 768) {
            $('.content-paginator-wrapper-general').contentPaginator({
                pageHeight: $(window).height()-510,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'

            });
        }
        if ($(window).width() >= 768 && $(window).width() < 960) {
            $('.content-paginator-wrapper-general').contentPaginator({
                pageHeight: $(window).height()-407,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
        if ($(window).width() >= 960 && $(window).width() < 992) {
            $('.content-paginator-wrapper-general').contentPaginator({
                pageHeight: $(window).height()-300,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
        if ($(window).width() >= 992 && $(window).width() < 1200) {
            $('.content-paginator-wrapper-general').contentPaginator({
                pageHeight: $(window).height()-310,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
        if ($(window).width() >= 1200 && $(window).width() < 1400) {
            $('.content-paginator-wrapper-general').contentPaginator({
                pageHeight: $(window).height()-360,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
        if ($(window).width() >= 1400 && $(window).width() < 1600) {
            $('.content-paginator-wrapper-general').contentPaginator({
                pageHeight: $(window).height()-427,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
        if ($(window).width() >= 1600) {
            $('.content-paginator-wrapper-general').contentPaginator({
                pageHeight: $(window).height()-476,
                prevText: '',
                nextText: '',
                numbersText: '{0} de {1}'
            });
        }
    });