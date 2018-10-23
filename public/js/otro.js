$(function() {
        $.ajaxSetup({
          headers: {
            'X-CSRF-Token': $('meta[name="_token"]').attr('content')
          }
        });
      });
$(document).ready(function () {
    $("#buscar_noticia").click(function (e) {
        $(".completo").load('buscar', {nombre: document.getElementById("nombre").value});
        return false;
    });
});
$(document).ready(function () {
    $("#buscar_noticia").click(function (e) {
        $(".completo").load('buscar', {nombre: document.getElementById("nombre").value});
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

    $(".mf p a").click(function () {
        var ur = $(this).attr('href');
        $.ajax({
             async: false,
            type: 'GET',
            url: "otros/discurso",
            data:'id='+parseInt(ur),
             success: function (data) {
               $(".contenido").html(data);  
             }
        });  
 return false;
    });
});
