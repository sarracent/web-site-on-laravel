<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NegociosController extends Controller {

    public function clasificacionNegocios() {
        $request = \Request::get("clasificacion");
        $negocio = \DB::table('negocios')->where('clasificacion', '=', $request)->get();
        $fotoclasif = \DB::table('clasifnegocios')->where('clasificacion', '=', $request)->get();
        return view('subvistas.negocios.menunegocios')->with('negociosdatos', $negocio)->with('clasif', $request)->with('fotoclasif', $fotoclasif);
    }

    function infoNegocios() {
        $request = \Request::get("id");
        $noticia = \DB::table('negocios')->where('id', '=', $request)->get();
        
        return view('subvistas.negocios.infonegocios')->with('noticia', $noticia);
    }
    
    public function info() {
        $request = \Request::get("clasificacion");
        $negocio = \DB::table('negocios')->where('clasificacion', '=', $request)->get();

        return view('subvistas.negocios.infoneg')->with('noticia', $negocio);
    }
    
    function infonNegocios() {
        $request = \Request::get("id");
        $noticia = \DB::table('negocios')->where('id', '=', $request)->get();
        
        return view('Busqueda')->with('noticia', $noticia);
    }

}
