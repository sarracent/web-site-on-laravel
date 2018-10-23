<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FidelcienciaController extends Controller
{
    
    function cuerponoticiasid() {
        $request = \Request::get("id");
        $noticia = \DB::table('fidelciencias')->find($request);
        return view('subvistas.otros.fidelnoticias')->with('noticias',$noticia);
    }
    
    function menufidel() {    
        return view('Other')->with('fidelciencia',  \DB::table('fidelciencias')->get());
    }
    
   
}
