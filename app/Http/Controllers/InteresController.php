<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InteresController extends Controller
{
   function cuerponoticiasid() {
        $request = \Request::get("id");
        $noticia = \DB::table('interes')->find($request);
        return view('subvistas.otros.noticiasinteres')->with('interes',$noticia);
    }
    
    function menuinteres() {    
        return view('subvistas.otros.interesnoticias')->with('interes',  \DB::table('interes')->get());
    }
}
