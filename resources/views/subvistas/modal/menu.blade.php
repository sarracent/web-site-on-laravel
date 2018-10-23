<div id="menuModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <header class="header color-white-background">
                <div class="container">
                    <div class="d-flex flex-row justify-content-center justify-content-md-end">
                        <div class="mr-brand-auto py-3 py-md-0 py-xs">   
                            <a class="navbar-brand mr-0 impact pb-0 color-dark-gray" href="#">BioCubaFarma</a>
                        </div>
                    </div>
                    <hr class="my-0 hidden-md-up separator-section-nav-dark"/>
                    <div class="d-flex justify-content-center pt-4 pt-sm-5 pt-md-0 pt-xs">
                        <nav class="nav text-center flex-column flex-md-row nav-biocubafarma MyriadProBoldCond">
                            <a class="nav-link nav-lik-biocubafarma-dark mb-4 mb-sm-5 mb-md-0 mb-xs color-dark-gray" href="{{url('/inicio')}}">inicio</a>
                            <a class="nav-link nav-lik-biocubafarma-dark mb-4 mb-sm-5 mb-md-0 mb-xs color-dark-gray" href="{{url('/noticias')}}">noticias</a>
                            <a class="nav-link nav-lik-biocubafarma-dark mb-4 mb-sm-5 mb-md-0 mb-xs color-dark-gray" href="{{url('/empresas')}}">empresas</a>
                            <a class="nav-link nav-lik-biocubafarma-dark mb-4 mb-sm-5 mb-md-0 mb-xs color-dark-gray" href="{{url('/galeria')}}">galería</a>
                            <a class="nav-link nav-lik-biocubafarma-dark mb-4 mb-sm-5 mb-md-0 mb-xs color-dark-gray" href="{{url('/negocios')}}">negocios</a>
                            <a class="nav-link nav-lik-biocubafarma-dark mb-4 mb-sm-5 mb-md-0 mb-xs color-dark-gray" href="{{url('/otros')}}">otros</a>
                        </nav>
                    </div>

                    <div class="d-flex flex-row justify-content-center hidden-md-up">
                        <div class="p-3 p-sm-4">
                            <a href="#"><i class="border-0 rounded-circle btn-menu-dark icon-eng"></i></a>
                        </div>
                        <div class="p-3 p-sm-4">
                            <a href="#"><i class="border-0 rounded-circle btn-menu-dark icon-sss-01"></i></a>
                        </div>
                        <div class="p-3 p-sm-4">
                            <a href="#"><i class="border-0 rounded-circle btn-menu-dark icon-mail"></i></a>
                        </div>
                    </div>
                    <form  accept-charset="UTF-8" action="resultado-busqueda" method="GET">
                        <div class="d-flex flex-row justify-content-center mb-3 hidden-md-up">
                            <div class="py-2 py-sm-4 pr-2">
                                <button id="rut_check" type="submit" onclick="showModal();" name="" value="" class="border-0 rounded-circle btn-menu-dark icon-search-01"></button>
                            </div>
                            <div class="py-2 py-sm-4 pl-2">
                                <input id="rut_txt" class="form-control form-input-search-modal form-control-border-color-modal rounded-0" required="true" name="query" type="text">
                            </div>
                        </div>
                    </form>
                    <div class="d-flex flex-row justify-content-center pb-3 hidden-md-up">
                        <a href="#"><i class="btn-dark-gray rounded-circle display-trasparent border-0 icon-down-01 font-weight-bold"></i></a>
                    </div>

                </div>
            </header>
        </div>
    </div>
</div>




