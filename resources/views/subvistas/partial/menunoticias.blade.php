
<header class="header-menu hidden-sm-down">
    <div class="container">
        <form  accept-charset="UTF-8" role="form" action="resultado-busqueda" method="GET">
             {{ csrf_field() }}
            <div class="d-flex flex-row padding-menu align-items-center justify-content-center justify-content-md-end">
                <div class="mr-brand-auto">   
                    <a class="navbar-brand py-0 impact color-dark-gray" href="{{url('/')}}">BioCubaFarma</a>
                    <a href="menu.blade.php"></a>
                </div>
                <div class="hidden-sm-down pt-3">
                    <a href="#"><i class="border-0 rounded-circle btn-dark-gray-btn icon-eng mr-2"></i></a>
                </div>
                <div class="hidden-sm-down pt-3">
                    <a href="feed" target="_blank"><i class="border-0 rounded-circle btn-dark-gray-btn icon-sss-01 mr-2 rss"></i></a>
                </div>
                <div class="hidden-sm-down pt-3">
                    <a href="mailto:direccion@dominio.com"><i class="border-0 rounded-circle btn-dark-gray-btn icon-mail mr-3"  ></i></a>
                </div>
                <div class="hidden-sm-down pt-3">
                    <button id="rut_check" type="submit" onclick="showModal();" name="" value="" class="border-0 rounded-circle btn-dark-gray-btn icon-search-01 mr-2"></button>
                </div>
                <div class="hidden-sm-down pt-3">
                    <input id="rut_txt" class="form-control rounded-0 form-control-border-color " required="true" name="query" type="text">
                </div>
            </div>
        </form>
        <hr class="my-0 hidden-md-up separator-section-nav-dark"/>
        <div class="d-flex justify-content-center pt-3 pt-md-0">
            <nav class="nav text-center flex-column flex-md-row nav-biocubafarma-dark-gray MyriadProBoldCond">
                <a class="nav-link nav-lik-biocubafarma-dark mb-3 mb-md-0 color-dark-gray" href="{{url('/inicio')}}"> INICIO </a>
                <a class="active-black nav-link nav-lik-biocubafarma-dark mb-3 mb-md-0 color-dark-gray" href="{{url('/noticias')}}"> noticias </a>
                <a class="nav-link nav-lik-biocubafarma-dark mb-3 mb-md-0 color-dark-gray" href="{{url('/empresas')}}"> EMPRESAS </a>
                <a class="nav-link nav-lik-biocubafarma-dark mb-3 mb-md-0 color-dark-gray" href="{{url('/galeria')}}"> galería </a>
                <a class="nav-link nav-lik-biocubafarma-dark mb-3 mb-md-0 color-dark-gray" href="{{url('/negocios')}}"> NEGOCIOS </a>
                <a class="nav-link nav-lik-biocubafarma-dark mb-3 mb-md-0 color-dark-gray" href="{{url('/otros')}}"> OTROS </a>
            </nav>
        </div>
    </div>
</header>




