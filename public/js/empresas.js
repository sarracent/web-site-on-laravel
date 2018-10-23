$(function() {
        $.ajaxSetup({
          headers: {
            'X-CSRF-Token': $('meta[name="_token"]').attr('content')
          }
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
    
    $("#noti p a").click(function (e) {
        var ur = $(this).attr('href');
        e.preventDefault();
       
       $.ajax({
            type: 'POST',
            url: "empresas/estructura",
            data: "id=" + parseInt(ur),
            success: function (data) {
                $("#contactos").html(data);
        
            },
            error: function (data1) {
              
            }
        });
        return false;
    });
});

$(document).ready(function () {
    
    $("#mclasificacion a").click(function (e) {
        var ur = $(this).attr('href');
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: "empresas/clasificacion",
            data: "clasificacion=" + ur,
            success: function (data) {
                $(".mempresas").html(data);
            },
            error: function (data1) {
         
            }
        });
        return false;
    });
});

$(document).ready(function () {
  $("div #buscar_empresa").click(function (e) {
    var nombre=   $('div .nombre').val();
       
        e.preventDefault();
      console.log('paso');
       
       $(".mempresas").load('empresas/buscar',{nombre:nombre});
        return false;
    });
});

   $(document).ready(function () {
        $(".mempresas p a").click(function (e) {
            var ur = $(this).attr('href');
            e.preventDefault();
            console.log(ur);
            $("#infoempresas").load('empresas/infoempresas', {id: parseInt(ur)});
            return false;
        });
    });
    
     $(document).ready(function () {
        $(".todasempresas ").click(function (e) {
        
            $(".mempresas").load('empresas/clasificaciontodas');
            return false;
        });
    });

 
