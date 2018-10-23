$(function() {
        $.ajaxSetup({
          headers: {
            'X-CSRF-Token': $('meta[name="_token"]').attr('content')
          }
        });
      });
$(document).ready(function () {
    $("div #buscar_noticia").click(function () {
        var nombre = $('div .nombre').val();   
        console.log('paso');
        $(".completo").load('buscar', {nombre: nombre});
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

    $(".completo a").click(function () {
        var ur = $(this).attr('href');
        $.ajax({
             async: false,
            type: 'GET',
            url: "noticias/noticia",
            data:'id='+parseInt(ur),
             success: function (data) {
               $("#noticias").html(data);  
             }
        });  
 return false;
    });
});





