<?php

namespace App\Http\ViewComposers;

use \Illuminate\Contracts\View\View;

class Gestion_NoticiasComposer {

    public function compose(View $view) {
        $noticias = \App\Noticia::all();
        
        if(\Request::get('id')!=NULL){
            
             $noticias = \App\Noticias::all()->find(\Request::get('id'));
        return $noticias;
        }else{
        $contactos = \DB::table('estructuras')->get()->first();
        $view->with('contactos', $contactos)->with('noticias', $noticias);
        
        }
    }

}
