<?php

namespace App\Http\Controllers;

class NoticiasController extends Controller {

    function buscar() {
        $valor = \Request::get('nombre');
        $titulo = NULL;
        $menutitulo = "";
        if ($valor == NULL) {
            $valor = '';
  
            $titulo = \DB::table('noticias')->orderBy('id', 'desc')->get();
        } else {     
            $titulo = \DB::table('noticias')->where('titulo', 'LIKE', '%' . $valor . '%')->orWhere('cuerpo', 'LIKE', '%' . $valor . '%')->get();
       
        }
        return view('subvistas.noticias.menunoticias')->with('titulo',$titulo);
    }
    
    function cuerponoticiasid() {
        $request = \Request::get("id");
        $noticia = \App\Noticia::all()->find($request);
        return view('subvistas.noticias.noticias')->with('noticia', $noticia);
    }
    
     function cuerponoticiasidbuscar() {
        $request = \Request::get("id");
        $noticia = \DB::table('noticias')->where('id', '=', $request)->get();
        return view('Busqueda')->with('noticia', $noticia);
    }


}
