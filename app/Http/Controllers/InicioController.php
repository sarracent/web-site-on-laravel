<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller {

    function noticia($id) {
       
      //  $request = \Request::get("id");
        $ultnoticia = \App\Noticia::all()->find($id);
        $paginar = $ultnoticia->cuerpo;
        $espacio = 0;
        $subcadena = array('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');  $palabra=1;
        $cantpalabras=180;

   for($i=0;$i<strlen($paginar);$i++){
           $subcadena[$espacio].=$paginar[$i];
           //var_dump($par[$i]);
           if(ctype_space($paginar[$i])){
               $palabra++;
               if($palabra>$cantpalabras){
            $espacio++;  
            $cantpalabras+=180;
             }
           }
       
        }
        $next = (int) \Request::get('ultnoticianext') + 1;
        $back = (int) \Request::get('ultnoticianext') - 1;

        if ($next >= $espacio) {
            $next = $espacio;
        }
        if ($back < 0) {
            $back = 0;
        }

      
            return view('Noticias')->with('ultimanoticia', $ultnoticia)->with('ultsubcadena', $subcadena[$next-1])->with('ultespacio', $espacio)->with('ultnext', $next)->with('ultback', $back)->with('id',$id); 

    }

    

}
