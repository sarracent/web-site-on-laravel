<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller {

    public function crearnoticia(Request $request) {
        \App\Noticias::create($request->all());
        $noticias = \App\Noticias::all();
        return view('/admin.crearnoticia')->with('noticias', $noticias);
    }

    public function actualizarnoticia(Request $request) {

        $noticias = \App\Noticias::all()->find($request->id);
        $noticias->fill($request->all());
        $noticias->save();
        $noticias = \App\Noticias::all();
        return view('/admin/listarnoticia', ['noticias' => $noticias]);
    }

    function listarnoticia() {
        $noticias = \App\Noticias::all();
        return view('/admin.listarnoticia')->with('noticias', $noticias);
    }

    public function mostrarcampoeditar(Request $request) {
        $noticias = \App\Noticias::all()->find($request->get('id'));
        return view('/admin.editarnoticia', ['noticias' => $noticias]);
    }

    public function eliminarnoticia(Request $request) {
        \App\Noticias::destroy($request->get('id'));
        $noticias = \App\Noticias::all();

        return view('/admin.listarnoticia', ['noticias' => $noticias]);
    }

    function crearnot() {
        return view('admin.crearnoticia');
    }

    
    //gestion empresas
    public function crearempresa(Request $request) {
        \App\Empresas::create($request->all());
        $empresas = \App\Empresas::all();
        return view('/admin.crearempresa');
    }

    public function actualizarempresa(Request $request) {

        $empresas = \App\Empresas::all()->find($request->id);
        $empresas->fill($request->all());
        $empresas->save();
        $empresas = \App\Empresas::all();
        return view('/admin/listarempresa', ['empresas' => $empresas]);
    }

    function listarempresa() {
        $empresas = \App\Empresas::all();
        return view('/admin.listarempresa')->with('empresas', $empresas);
    }

    public function mostrarcampoeditarempresa(Request $request) {
        $empresas = \App\Empresas::all()->find($request->get('id'));
        return view('/admin.editarempresa', ['empresas' => $empresas]);
    }

    public function eliminarempresa(Request $request) {
        \App\Empresas::destroy($request->get('id'));
        $empresas = \App\Empresas::all();

        return view('/admin.listarempresa', ['empresas' => $empresas]);
    }

    function crearemp() {
        return view('admin.crearempresa');
    }

    
    //gestion Estructura
    
     public function crearestructura(Request $request) {
         \App\Estructuras::create($request->all());
        $estructura = \App\Estructuras::all();
        return view('/admin.crearestructura')->with('estructuras', $estructura);
    }

    public function actualizarestructura(Request $request) {

        $estructura = \App\Estructuras::all()->find($request->id);
        $estructura->fill($request->all());
        $estructura->save();
        $estructura = \App\Estructuras::all();
        return view('/admin/listarestructura', ['estructuras' => $estructura]);
    }

    function listarestructura() {
        $estructura = \App\Estructuras::all();
        return view('/admin.listarestructura')->with('estructuras', $estructura);
    }

    public function mostrarcampoeditarestructura(Request $request) {
        $estructura = \App\Estructuras::all()->find($request->get('id'));
        return view('/admin.editarestructura', ['estructuras' => $estructura]);
    }

    public function eliminarestructura(Request $request) {
        \App\Estructuras::destroy($request->get('id'));
        $estructura = \App\Estructuras::all();

        return view('/admin.listarestructura', ['estructuras' => $estructura]);
    }

    function crearestru() {
        return view('admin.crearestructura');
    }
    
    
    //gestion Negocio
    
     public function crearnegocio(Request $request) {
         \App\Negocios::create($request->all());
        $negocio = \App\Negocios::all();
       $clasifnegocio = \App\ClasifNegocio::all();
        return view('/admin.crearnegocio')->with('neg', $clasifnegocio)->with('negocios', $negocio);
    }

    public function actualizarnegocio(Request $request) {

        $negocio = \App\Negocios::all()->find($request->id);
         $clasifnegocio = \App\ClasifNegocio::all();
        $negocio->fill($request->all());
        $negocio->save();
        $negocio = \App\Negocios::all();
        return view('/admin/listarnegocio', ['negocios' => $negocio])->with('neg', $clasifnegocio);
    }

    function listarnegocio() {
        $negocio = \App\Negocios::all();
        $clasifnegocio = \App\ClasifNegocio::all();
        return view('/admin.listarnegocio')->with('negocios', $negocio)->with('neg', $clasifnegocio);
    }

    public function mostrarcampoeditarnegocio(Request $request) {
        $negocio = \App\Negocios::all()->find($request->get('id'));
        $clasifnegocio = \App\ClasifNegocio::all();
        return view('/admin.editarnegocio', ['negocios' => $negocio])->with('neg', $clasifnegocio);
    }

    public function eliminarnegocio(Request $request) {
        \App\Negocios::destroy($request->get('id'));
        $negocio = \App\Negocios::all();
$clasifnegocio = \App\ClasifNegocio::all();
        return view('/admin.listarnegocio', ['negocios' => $negocio])->with('neg', $clasifnegocio);
    }

    public function crearneg() {
         $clasifnegocio = \App\ClasifNegocio::all('clasificacion');
        return view('admin.crearnegocio')->with('neg', $clasifnegocio);
    }
    
    
     
    //gestion comercionegocio
    
     public function crearcomercionegocio(Request $request) {
         \App\ComercioNegocios::create($request->all());
        $comercionegocio = \App\ComercioNegocios::all();
        return view('/admin.crearcomercionegocio')->with('comercionegocios', $comercionegocio);
    }

    public function actualizarcomercionegocio(Request $request) {

        $comercionegocio = \App\ComercioNegocios::all()->find($request->id);
        $comercionegocio->fill($request->all());
        $comercionegocio->save();
        $comercionegocio = \App\ComercioNegocios::all();
        return view('/admin/listarcomercionegocio', ['comercionegocios' => $comercionegocio]);
    }

    function listarcomercionegocio() {
        $comercionegocio = \App\ComercioNegocios::all();
        return view('/admin.listarcomercionegocio')->with('comercionegocios', $comercionegocio);
    }

    public function mostrarcampoeditarcomercionegocio(Request $request) {
        $comercionegocio = \App\ComercioNegocios::all()->find($request->get('id'));
        return view('/admin.editarcomercionegocio', ['comercionegocios' => $comercionegocio]);
    }

    public function eliminarcomercionegocio(Request $request) {
        \App\ComercioNegocios::destroy($request->get('id'));
        $comercionegocio = \App\ComercioNegocios::all();
        return view('/admin.listarcomercionegocio', ['comercionegocios' => $comercionegocio]);
    }

    function crearcomneg() {
      
        return view('admin.crearcomercionegocio');
    }
    
    
    
    //clasif negocio
     public function crearclasifnegocio(Request $request) {
         \App\ClasifNegocio::create($request->all());
       
    }

    public function actualizarclasifnegocio(Request $request) {

        $clasifnegocio = \App\ClasifNegocio::all()->find($request->id);
        $clasifnegocio->fill($request->all());
        $clasifnegocio->save();
        $clasifnegocio = \App\ClasifNegocio::all();
        return view('/admin/listarclasifnegocio', ['clasifnegocios' => $clasifnegocio]);
    }

    function listarclasifnegocio() {
        $clasifnegocio = \App\ClasifNegocio::all();
        return view('/admin.listarclasifnegocio')->with('clasifnegocios', $clasifnegocio);
    }

    public function mostrarcampoeditarclasifnegocio(Request $request) {
        $clasifnegocio = \App\ClasifNegocio::all()->find($request->get('id'));
        return view('/admin.editarclasifnegocio', ['clasifnegocios' => $clasifnegocio]);
    }

    public function eliminarclasifnegocio(Request $request) {
        \App\ClasifNegocio::destroy($request->get('id'));
        $clasifnegocio = \App\ClasifNegocio::all();

        return view('/admin.listarclasifnegocio', ['clasifnegocios' => $clasifnegocio]);
    }

    function crearclasifneg() {
          $clasif=\App\ClasifNegocio::all('clasificacion');
        return view('admin.crearclasifnegocio')->with('clasificacion',$clasif);
    }
    
}
