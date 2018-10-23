      <header class="header-home hidden-sm-down">
          <div class="container">
            <form  accept-charset="UTF-8" role="form" action="resultado-busqueda" method="GET">
             {{ csrf_field() }}
                <div class="d-flex flex-row padding-menu align-items-center justify-content-center justify-content-md-end">
                    <div class="mr-brand-auto py-3 py-sm-5 py-md-0">   
                        <a class="navbar-brand py-0 impact color-white" href="{{url('/')}}">BioCubaFarma</a>
                        <a href="menu.blade.php"></a>
                    </div>
                    <div class="hidden-sm-down pt-3">
                        <a onclick="googleTranslateElement()"><i class="border-0 rounded-circle btn-white icon-eng mr-2"></i></a>
                    </div>
                    <div class="hidden-sm-down pt-3">
                        <a href="feed" target="_blank"><i class="border-0 rounded-circle btn-white icon-sss-01 mr-2 rss"></i></a>
                    </div>
                    <div class="hidden-sm-down pt-3">
                        <a href="mailto:direccion@dominio.com"><i class="border-0 rounded-circle btn-white icon-mail mr-3"></i></a>
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
            <div class="d-flex justify-content-center pt-4 pt-sm-5 pt-md-0">
              <nav class="nav text-center flex-column flex-md-row nav-biocubafarma MyriadProBoldCond">
                <a class="active-white nav-link nav-lik-biocubafarma mb-4 mb-md-0" href="{{url('/inicio')}}"> INICIO </a>
                <a class="nav-link nav-lik-biocubafarma mb-4 mb-sm-5 mb-md-0" href="{{url('/noticias')}}"> noticias </a>
                <a class="nav-link nav-lik-biocubafarma mb-4 mb-sm-5 mb-md-0" href="{{url('/empresas')}}"> EMPRESAS </a>
                <a class="nav-link nav-lik-biocubafarma mb-4 mb-sm-5 mb-md-0" href="{{url('/galeria')}}"> galería </a>
                <a class="nav-link nav-lik-biocubafarma mb-4 mb-sm-5 mb-md-0" href="{{url('/negocios')}}"> NEGOCIOS </a>
                <a class="nav-link nav-lik-biocubafarma mb-4 mb-sm-5 mb-md-0" href="{{url('/otros')}}"> OTROS </a>
              </nav>
            </div>

            <div class="d-flex flex-row justify-content-center hidden-md-up">
                <div class="p-3 p-sm-4">
                    <a href="#"><i class=" border-0 rounded-circle btn-menu icon-eng"></i></a>
                </div>
                <div class="p-3 p-sm-4">
                    <a href="feed" target="_blank"><i class=" border-0 rounded-circle btn-menu icon-sss-01"></i></a>
                </div>
                <div class="p-3 p-sm-4">
                    <a href="mailto:direccion@dominio.com"><i class="border-0 rounded-circle btn-menu icon-mail"></i></a>
                </div>
            </div>
            <form  accept-charset="UTF-8" action="resultado-busqueda" method="GET">
                <div class="d-flex flex-row justify-content-center mb-3 hidden-md-up">
                    <div class="py-2 py-sm-4 pr-2">
                        <button id="rut_check" type="submit" onclick="showModal();" name="" value="" class="border-0 rounded-circle btn-menu icon-search-01"></button>
                    </div>
                    <div class="py-2 py-sm-4 pl-2">
                        <input id="rut_txt" class="form-control form-input-search rounded-0 " required="true" name="query" type="text">
                    </div>
                </div>
            </form>
            <div class="d-flex flex-row justify-content-center py-3 hidden-md-up">
                <a href="#"><i class="btn-white border-0 rounded-circle display-trasparent icon-down-01 font-weight-bold"></i></a>
            </div>

          </div>
      </header>
