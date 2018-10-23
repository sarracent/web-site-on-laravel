<?php

namespace App\Http\ViewComposers;

use \Illuminate\Contracts\View\View;

class ClasificacionEmpresasComposer {

    public function compose(View $view) {

    $clasificacion= \DB::table('empresas')->select('clasificacion')->distinct()->get();
     $empresas= \App\Empresa::all();
        $view->with('clasificacion', $clasificacion);   
    }

}
