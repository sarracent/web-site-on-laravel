<?php

namespace App\Http\ViewComposers;

use \Illuminate\Contracts\View\View;

class MenuDireccionComposer {

    public function compose(View $view) {

    $direccion= \DB::table('estructuras')->select('direccion','id')->get();
        $view->with('direccion', $direccion);   
    }

}
