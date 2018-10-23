<div class="section footer-biocubafarma img-fluid fp-table" style="background-image:url({{ URL::asset('uploads/footer.jpg') }}); background-size: cover;">
  <div class="fp-tableCell">
    <div class="container">
      <div class="container py-footer">
        <div class="d-flex justify-content-end">
          <div class="mr-auto"><a href="#seccion1"><i class="mr-4 border-0 btn-white rounded-circle icon-up-01 font-weight-bold"></i></a></div>
          <div><a href="#" data-toggle="modal" data-target="#menuModal"><i class="border-0 btn-white rounded-circle hidden-md-up icon-menu-01 font-weight-bold"></i></a></div>
        </div>
      </div>
      <!--<nav class="nav text-sm-center text-uppercase pb-xl-3 MyriadProSemibold flex-row flex-sm-column flex-lg-row justify-content-center nav-footer-border-botom">
        <a class="nav-link nav-link-footer h5 pl-xl-0 mb-sm-3 mb-xl-4 pl-0" href="{{url('/otros#seccion2')}}">organismos guías</a>
        <a class="nav-link nav-link-footer nav-link-footer-border-left-right h5 mb-sm-3 mb-xl-4" href="">nube de etiquetas</a>
        <a class="nav-link nav-link-footer h5 pr-xl-0 mb-sm-3 mb-xl-4 pr-0" href="{{url('/otros#seccion2')}}">enlaces</a>
      </nav>-->
      <p class="MyriadProSemibold text-uppercase h5 color-blanco mb-0 py-contact py-4 py-sm-5 py-md-4 py-lg-3 py-xl-4">contáctenos</p>
      <p class="MyriadProCond color-blanco mb-0 h5  ">{{$footers[0]->grupo}}</p>
      <p class="MyriadProCond color-blanco mb-0 h5 ">{{$footers[0]->direccion}} </p>
      <p class="MyriadProCond color-blanco h5 mb-lg-0 pb-four pb-4 pb-sm-5 pb-lg-3 pb-xl-4">{{$footers[0]->telefonos}}</p>
      <div class="row">
        <div class="col-10 col-md-5 col-lg-4">
          <input class="form-control mb-2 pl-2 pt-1 rounded-0 MyriadProIt color-light-gray nombre" placeholder="Nombre..." type="text">
        </div>
      </div>
      <div class="row">
        <div class="col-10 col-md-5 col-lg-4">
          <input class="form-control mb-2 pl-2 pt-1 rounded-0 MyriadProIt color-light-gray correo" placeholder="Correo..." type="text">
        </div>
        <div class="col-2 col-md-7 col-lg-3 text-right pl-send">
          <button class="btn mt-3 px-0 pb-0 pt-1 btn-outline-secondary rounded-0 border-0 MyriadProBoldCond enviar_mail" type="submit">ENVIAR</button>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-7">
          <textarea class="form-control pl-2 pb-5 pb-lg-4 rounded-0 MyriadProIt color-light-gray contenido" id="exampleTextarea" rows="5" placeholder="Contenido a enviar...."></textarea>
        </div>
        <div class="col-12 col-lg-5">
          <p class="color-blanco impact text-lg-right mb-md-3 mt-footer-3 h2 mt-3 mt-sm-5 hide-element-footer">BioCubaFarma</p>
          <p class="color-blanco MyriadProCond text-uppercase text-lg-right hide-element h5 mb-0 hide-element-footer">{{date('Y')}} / biocubafarma</p>
          <p class="color-blanco MyriadProCond text-lg-right h5 mb-0 hide-element-footer">Desarrollado por</p>
          <p class="text-lg-right mb-0"><a href="http://www.biocubafarma.cu" target="_blank" class="color-white MyriadProCond h5 hide-element-footer">BioCubaFarma ©</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<script>

     $(function() {
        $.ajaxSetup({
          headers: {
            'X-CSRF-Token': $('meta[name="_token"]').attr('content')
          }
        });
      });

    $(document).ready(function () {

        $("div .enviar_mail").click(function (e) {

            var nombre = $('.name').val();
            var correo = $('.correo').val();
            var contenido = $('.contenido').val();

            e.preventDefault();
            $.post('enviar', {nombre: nombre, correo: correo, contenido: contenido});
            alert('Se envió el correo satisfactoriamente');
            return false;
        });
    });
</script>
