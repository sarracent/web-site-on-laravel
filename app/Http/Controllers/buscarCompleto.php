<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class buscarCompleto extends Controller {

   function buscar() {
        $valor = \Request::get('query');
        $encabezado="";
        if ($valor == NULL) {
            $encabezado = "No hay resultados";
            $titulo = '';
            $titulo1 = '';
            $titulo2 = '';
            
         
        } else {
            
            $titulo = \DB::table('noticias')->where('titulo', 'LIKE', '%' . htmlspecialchars($valor) . '%')->orWhere('cuerpo', 'LIKE', '%' . htmlspecialchars($valor) . '%')->get();
            $titulo1 = \DB::table('negocios')->where('titulo', 'LIKE', '%' . htmlspecialchars($valor) . '%')->orWhere('cuerpo', 'LIKE', '%' . htmlspecialchars($valor) . '%')->get();
            $titulo2 = \DB::table('empresas')->where('titulo', 'LIKE', '%' . htmlspecialchars($valor) . '%')->orWhere('cuerpo', 'LIKE', '%' . htmlspecialchars($valor) . '%')->get();
             $encabezado = "resultado búsqueda";
             if($titulo->count()==0&&$titulo1->count()==0&&$titulo2->count()==0){
                $encabezado = "No hay resultados"; 

             }
          
        }
             
        return view('BusquedaCompleta')->with('titulo', $titulo)->with('titulo1', $titulo1)->with('titulo2', $titulo2)->with('encabezado', $encabezado)->with('valor', htmlspecialchars($valor));
    }



    function buscartodo() {
        $valor = \Request::get('nombre');
        $encabezado = "";
        if ($valor == NULL) {
            $encabezado = "No hay resultados";
            $titulo = '';
            $titulo1 = '';
            $titulo2 = '';
          
        } else {
            
            $encabezado = "resultado busqueda";
            $titulo = \DB::table('noticias')->where('titulo', '=',htmlspecialchars($valor))->orWhere('cuerpo', '=', htmlspecialchars($valor) )->get();
            $titulo1 = \DB::table('negocios')->where('titulo', '=', htmlspecialchars($valor))->orWhere('cuerpo', '=', htmlspecialchars($valor) )->get();
            $titulo2 = \DB::table('empresas')->where('titulo', '=',  htmlspecialchars($valor))->orWhere('cuerpo', '=', htmlspecialchars($valor))->get();
        
            if($titulo->count()==0&&$titulo1->count()==0&&$titulo2->count()==0){
                $encabezado = "No hay resultados"; 
             }
            
            
        }
        return \Redirect::to('Noticias')->with('titulo', $titulo)->with('titulo1', $titulo1)->with('titulo2', $titulo2)->with('encabezado', $encabezado);
    }


}
