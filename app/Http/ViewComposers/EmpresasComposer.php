<?php

namespace App\Http\ViewComposers;

use \Illuminate\Contracts\View\View;

class EmpresasComposer {

    public function compose(View $view) {

$empresas= \DB::table('empresas')->distinct('titulo')->orderBy('titulo', 'asc')->paginate(100);
   //  $empresa=\DB::table('empresas')->select('titulo','id')->orderBy('titulo', 'asc')->paginate(100); 
  $view->with(compact('empresas'));   
    }
}
