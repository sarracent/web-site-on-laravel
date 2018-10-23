<?php

namespace App\Http\ViewComposers;

use \Illuminate\Contracts\View\View;

class UltimasNoticiasComposer {

    public function compose(View $view) {

    $noticias = \DB::table('noticias')->select('titulo', 'subtitulo','foto','id')->orderBy('id', 'desc')->get();
        
        $view->with('noticias', $noticias);  
        
    }

}
