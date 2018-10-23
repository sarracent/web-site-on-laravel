
<div class="border-left-recent-news pl-lg-5">
    <p class="mb-0 mt-2 pt-2 mt-md-5 px-lg-5 text-uppercase color-dark-gray MyriadProSemibold py-programs">{{$noticias->titulo}}</p>
  
    <div class="d-flex flex-column pl-lg-5 menufidel">
        <div class="MyriadProRegular">
            {!!$noticias->contenido!!}
        </div>     
    </div>
    
    <div class="pl-lg-5 pt-3 pb-4">
        <a onclick="atras()"><i class="mr-4 border-0 btn-dark-gray rounded-circle icon-back-01 font-weight-bold"></i></a>
    </div>
</div>

<script type="text/javascript">
    function atras() {
        $(document).ready(function () {
          var nombre = $('.busqueda').val();
          console.log(nombre);
            $.ajax({
               async: true,
              type: 'POST',
              url: "otros/menufidel",
             
               success: function (data) {
                 $(".contenido").html(data);  
               }
          });  
          return false;
    });
    
      
    }; 
</script>