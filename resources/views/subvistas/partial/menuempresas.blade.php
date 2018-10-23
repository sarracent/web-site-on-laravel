
        <header class="header-enterprise img-fluid hidden-sm-down" style=" background-image:url({{ URL::asset('uploads/menuempresa.jpg') }}); background-size: cover;">
          <div class="container">
            <form  accept-charset="UTF-8" role="form" action="resultado-busqueda" method="GET">
             {{ csrf_field() }}
                <div class="d-flex flex-row padding-menu align-items-center justify-content-center justify-content-md-end">
                    <div class="mr-brand-auto">   
                        <a class="navbar-brand py-0 impact color-white" href="{{url('/')}}">BioCubaFarma</a>
                        <a href="menu.blade.php"></a>
                    </div>
                    <div class="hidden-sm-down pt-3">
                        <a href="#"><i class="border-0 rounded-circle btn-white icon-eng mr-2"></i></a>
                    </div>
                    <div class="hidden-sm-down pt-3">
                        <a href="feed" target="_blank"><i class="border-0 rounded-circle btn-white icon-sss-01 mr-2 rss"></i></a>
                    </div>
                    <div class="hidden-sm-down pt-3">
                        <a href="mailto:direccion@dominio.com"><i class="border-0 rounded-circle btn-white icon-mail mr-3"  ></i></a>
                    </div>
                    <div class="hidden-sm-down pt-3">
                        <button id="rut_check" type="submit" onclick="showModal();" name="" value="" class="border-0 rounded-circle btn-white-search icon-search-01 mr-2"></button>
                    </div>
                    <div class="hidden-sm-down pt-3">
                        <input id="rut_txt" class="form-control rounded-0 form-control-border-color " required="true" name="query" type="text">
                    </div>
                </div>
            </form>
            <hr class="my-0 hidden-md-up separator-section-nav"/>
            <div class="d-flex justify-content-center pt-3 pt-md-0">
              <nav class="nav text-center flex-column flex-md-row nav-biocubafarma MyriadProBoldCond">
                <a class="nav-link nav-lik-biocubafarma mb-3 mb-md-0" href="{{url('/inicio')}}">inicio</a>
                <a class="nav-link nav-lik-biocubafarma mb-3 mb-md-0" href="{{url('/noticias')}}">noticias</a>
                <a class="active-white nav-link nav-lik-biocubafarma mb-3 mb-md-0" href="{{url('/empresas')}}">empresas</a>
                <a class="nav-link nav-lik-biocubafarma mb-3 mb-md-0" href="{{url('/galeria')}}">galería</a>
                <a class="nav-link nav-lik-biocubafarma mb-3 mb-md-0" href="{{url('/negocios')}}">negocios</a>
                <a class="nav-link nav-lik-biocubafarma mb-3 mb-md-0" href="{{url('/otros')}}">otros</a>
              </nav>
            </div>
          </div>
        </header>
