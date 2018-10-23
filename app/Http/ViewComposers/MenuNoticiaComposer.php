<?php

namespace App\Http\ViewComposers;

use \Illuminate\Contracts\View\View;

class MenuNoticiaComposer {

    public function compose(View $view) {
        $valor = \Request::get('nombre');
        $titulo = NULL;
        if ($valor == NULL) {
            $valor = '';
            $titulo = \DB::table('noticias')->select('titulo', 'id')->orderBy('id', 'desc');
        } else {
            $titulo = \DB::table('noticias')->where('titulo', 'LIKE', '%' . $valor . '%');
        }
      

        $view->with('titulo',$titulo);
    }

}
