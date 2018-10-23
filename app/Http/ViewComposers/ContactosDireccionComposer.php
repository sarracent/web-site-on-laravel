<?php

namespace App\Http\ViewComposers;

use \Illuminate\Contracts\View\View;

class ContactosDireccionComposer {

    public function compose(View $view) {

    $contactos= \DB::table('estructuras')->get()->first();
        $view->with('contactos', $contactos);   
    }

}
