$(function() {
        $.ajaxSetup({
          headers: {
            'X-CSRF-Token': $('meta[name="_token"]').attr('content')
          }
        });
      });
$(document).ready(function () {
    $("#titulo a").click(function (e) {
        var ur = $(this).attr('href');
        e.preventDefault();
        $("#noticias").load('noticias/noticia ', {id: parseInt(ur)});
        return false;
    });
});

$(document).ready(function () {
    $("#buscar_completo").click(function () {
        var nombre = $('.busqueda').val();
        console.log(nombre);
          $.ajax({
             async: false,
            type: 'GET',
            url: "buscartodo",
            data: "nombre="+nombre,
             success: function (data) {
               $("body").html(data);  
             }
        });  
        return false;
    });
});

$(document).ready(function () {
    $(".info").click(function (e) {
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

$(document).ready(function () {
    $(".enlace").click(function (e) {
        var ur = $(this).attr('href');
        e.preventDefault();
        console.log(ur);
        $.ajax({
            type: 'POST',
            url: "negocios/infoneg",
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

