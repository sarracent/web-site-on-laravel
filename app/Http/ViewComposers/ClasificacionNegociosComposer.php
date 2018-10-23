<?php

namespace App\Http\ViewComposers;

use \Illuminate\Contracts\View\View;

class ClasificacionNegociosComposer {

    public function compose(View $view) {

    $clasificacion= \DB::table('clasifnegocios')->select('clasificacion')->get();
        $view->with('clasificacion',$clasificacion);   
    }

}
