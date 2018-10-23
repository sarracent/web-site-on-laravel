<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {


        view()->composer(['Noticias', 'Galeria', 'Negocios'], '\App\Http\ViewComposers\UltimaNoticiaComposer');
        view()->composer(['Noticias', 'Galeria', 'Negocios'], '\App\Http\ViewComposers\MenuNoticiaComposer');
        view()->composer(['Noticias', 'layout.Noticias', 'Galeria', 'Negocios'], '\App\Http\ViewComposers\NoticiasComposer');
        view()->composer(['Inicio'], '\App\Http\ViewComposers\UltimasNoticiasComposer');
        view()->composer(['Empresas'], '\App\Http\ViewComposers\MenuDireccionComposer');
        view()->composer(['Empresas'], '\App\Http\ViewComposers\ContactosDireccionComposer');
        view()->composer(['Empresas'], '\App\Http\ViewComposers\ClasificacionEmpresasComposer');
        view()->composer(['Empresas'], '\App\Http\ViewComposers\MenuEmpresasComposer');
        view()->composer(['Empresas'], '\App\Http\ViewComposers\EmpresasComposer');
        view()->composer(['Negocios','Busqueda'], '\App\Http\ViewComposers\ComercioNegocioComposer');
        view()->composer(['Negocios','Busqueda'], '\App\Http\ViewComposers\ClasificacionNegociosComposer');
        view()->composer(['Galeria'], '\App\Http\ViewComposers\GaleriasComposer');
        view()->composer(['Other','subvistas.otros.fidelnoticias'], '\App\Http\ViewComposers\FidelComposer');
        view()->composer(['Other','subvistas.otros.fidelnoticias'], '\App\Http\ViewComposers\InteresComposer');
        view()->composer(['Other'], '\App\Http\ViewComposers\MenuenlaceComposer');
        view()->composer(['negocios.negocios.form','Busqueda'], '\App\Http\ViewComposers\ClasificacionNegociosComposer');
        view()->composer(['Negocios','Busqueda'], '\App\Http\ViewComposers\NegociosComposer');
        view()->composer(['Inicio'], '\App\Http\ViewComposers\IniciosComposer');
        view()->composer(['Inicio'], '\App\Http\ViewComposers\ImagenesComposer');
        view()->composer(['subvistas.partial.footer'], '\App\Http\ViewComposers\FooterComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
