<!DOCTYPE html>
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->
    <html lang="en" xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <!-- Required meta tags -->
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                    <meta name="author" content="Damian Sarracent Lopez" />
                    <meta name="description" content="sitio web oficial biocubafarma,official website biocubafarma." />
                    <meta name="keywords"  content="biocubafarma,medicamentos,cuba,empresa,osde,Biocubafarma, medicines, cuba, company, osde" />
                    <meta name="Resource-type" content="Document" />
                    
    		    <meta name="csrf-token" content="{{ csrf_token() }}">

                    <!--<link rel="icon" href="/favicon.ico" />-->
                    
                   
		    <script>
			window.Laravel = {!! json_encode([
			    'csrfToken' => csrf_token(),
			]) !!};
		    </script>

                    
                    {!!Html::style('css/bootstrap.min.css')!!}
                    
                    {!!Html::style('css/style.css')!!}
                    {!!Html::style('css/fonts.css')!!}
                    {!!Html::style('css/icon.css')!!}
                    {!!Html::style('css/paginador.css')!!}
                    {!!Html::style('css/jquery.loadingModal.min.css')!!}
                    {!!Html::style('css/jquery.fullPage.min.css')!!}
                    
                    {!!Html::script('js/jquery-3.2.1.min.js')!!}
                    {!!Html::script('js/tether.min.js')!!}
                    {!!Html::script('js/bootstrap.min.js')!!}
                    {!!Html::script('js/jquery.fullPage.min.js')!!}
                    {!!Html::script('js/jquery.content-paginator.js')!!}
                    {!!Html::script('js/paginador.js')!!}
                    {!!Html::script('js/search.js')!!}
                    {!!Html::script('js/jquery.loadingModal.min.js')!!}
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#fullpage').fullpage({
                                verticalCentered: false,
                                anchors: ['seccion1', 'seccion2', 'seccion3', 'seccion4']
                            });
                        });
                    </script>
                    
                    @yield('content')
                    
        </body>
    </html> 
