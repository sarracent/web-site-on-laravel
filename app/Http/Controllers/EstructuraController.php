<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class EstructuraController extends Controller {

    function buscar() {
        $valor = \Request::get('nombre');
        $titulo = NULL;
        $menutitulo = "";
        if ($valor == NULL) {
            $valor = '';
            $menutitulo = 'noticias recientes';
            $titulo = \DB::table('empresas')->get();
        } else {     
            $titulo = \DB::table('empresas')->where('titulo', 'LIKE', '%' . $valor . '%')->orWhere('cuerpo', 'LIKE', '%' . $valor . '%')->orWhere('clasificacion', 'LIKE', '%' . $valor . '%')->get();
            $menutitulo = 'resultado busqueda';
        }
        return view('subvistas.empresa.menuempresasbusqueda')->with('titulo',$titulo);
    }
   

    public function contactosDireccion() {
        $request = \Request::get("id");
        $estructura = $noticia = \App\Estructura::all()->find($request);
        return view('subvistas.empresa.contactos')->with('contactos', $estructura);
    }

    public function clasificacionEmpresas() {
        $request = \Request::get("clasificacion");
        if($request==''){
               $empresas = \DB::table('empresas')->orderBy('titulo', 'asc')->paginate(100);
        return view('subvistas.empresa.menuempresas', compact('empresas'))->with('clasif', $request);
     
        }
        $empresas = \DB::table('empresas')->orderBy('titulo', 'asc')->where('clasificacion', '=', $request)->paginate(100);
        return view('subvistas.empresa.menuempresas', compact('empresas'))->with('clasif', $request);
    }
    
     public function todasEmpresas() {
        $empresas= \DB::table('empresas')->distinct('titulo')->orderBy('titulo', 'asc')->paginate(100);
       return view('subvistas.empresa.menuempresas', compact('empresas'));
    }
    
  
    function infoEmpresas() {
        $request = \Request::get("id");
        $noticia = \App\Empresa::all()->find($request);
        return view('subvistas.empresa.infoempresas')->with('noticia', $noticia);
    }
    
     function infoEmpresasbuscar() {
        $request = \Request::get("id");
        $noticia = \DB::table('empresas')->where('id', '=', $request)->get();
        return view('Busqueda')->with('noticia', $noticia);
    }

}
