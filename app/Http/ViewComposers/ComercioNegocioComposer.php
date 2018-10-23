<?php

namespace App\Http\ViewComposers;

use \Illuminate\Contracts\View\View;

class ComercioNegocioComposer {

    public function compose(View $view) {


        $comercionegocio = \DB::table('comercionegocios')->get()->last();

        $view->with('comercionegocio', $comercionegocio);
    }

}
