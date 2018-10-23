<?php

namespace App\Http\ViewComposers;

use \Illuminate\Contracts\View\View;

class MenuEmpresasComposer{

    public function compose(View $view) {
$valor = \Request::get('');
        $empresas= NULL;
        if ($valor == NULL) {
            $valor = '';
            $empresas = \DB::table('empresas')->where('clasificacion', '=','');
        } else {
            $empresas = \DB::table('empresas')->where('clasificacion', '=', $valor);
        }
        $view->with('empresas',$empresas);
    }

}
