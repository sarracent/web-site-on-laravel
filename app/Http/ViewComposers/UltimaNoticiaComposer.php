<?php

namespace App\Http\ViewComposers;

use \Illuminate\Contracts\View\View;
use \App\Noticias;

class UltimaNoticiaComposer {

    public function compose(View $view) {
         $request = \Request::get("id");
        if($request==NULL){
            $ultnoticia = \App\Noticia::all()->last();
        }else{
        $ultnoticia = \App\Noticia::all()->find($request);
        }   
    
        $view->with('ultimanoticia', $ultnoticia);
    }

}
