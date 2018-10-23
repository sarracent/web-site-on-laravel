<?php

namespace App\Http\Controllers\Empresas;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Empresa;
use Illuminate\Http\Request;
use Session;

class EmpresasController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request) {
        $keyword = $request->get('search');
        $perPage = 7;

        if (!empty($keyword)) {
            $empresas = Empresa::where('titulo', 'LIKE', "%$keyword%")
                    ->orWhere('descripcion', 'LIKE', "%$keyword%")
                    ->orWhere('clasificacion', 'LIKE', "%$keyword%")
                    ->orWhere('cuerpo', 'LIKE', "%$keyword%")
                    ->orWhere('foto', 'LIKE', "%$keyword%")
                    ->orWhere('foto2', 'LIKE', "%$keyword%")
                    ->orWhere('foto3', 'LIKE', "%$keyword%")
                    ->orWhere('foto4', 'LIKE', "%$keyword%")
                    ->orWhere('foto5', 'LIKE', "%$keyword%")
                    ->paginate($perPage);
        } else {
            $empresas = Empresa::paginate($perPage);
        }

        return view('empresas.empresas.index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('empresas.empresas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request) {

        $requestData = $request->all();
        $rules = array(
            'titulo' => 'required',
            'descripcion' => 'required',
            'clasificacion' => 'required',
            'cuerpo' => 'required',
            'foto' => 'required|image|max:4096',
            'foto2' => 'image|max:4096',
            'foto3' => 'image|max:4096',
            'foto4' => 'image|max:4096',
            'foto5' => 'image|max:4096'
        );
        $v = \Validator::make($requestData, $rules);
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors())->withInput($request->all());
        }


        Empresa::create($requestData);

        Session::flash('flash_message', 'Empresa added!');

        return redirect('empresas/empresas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id) {
        $empresa = Empresa::findOrFail($id);

        return view('empresas.empresas.show', compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $empresa = Empresa::findOrFail($id);
        //$requestData = $request->all();
       
       
        return view('empresas.empresas.edit', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request) {

        $requestData = $request->all();

         $fot=  Empresa::find($id);
         
        if(!$request->exists('foto')){  
        $fot->foto='null';      
        } 
        if(!$request->exists('foto2')){
        $fot->foto2='null';
        }
        if(!$request->exists('foto3')){
        $fot->foto3='null';
        }
        if(!$request->exists('foto4')){
        $fot->foto4='null';
        }
        if(!$request->exists('foto5')){
        $fot->foto5='null';
        }
        $fot->save(); 
        
        $empresa = Empresa::findOrFail($id);
        $empresa->update($requestData);

        Session::flash('flash_message', 'Empresa updated!');

        return redirect('empresas/empresas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id) {

        if (\Storage::disk('local')->exists(\DB::table('empresas')->where('id', '=', $id)->pluck('foto')[0])) {
            \Storage::disk('local')->delete(\DB::table('empresas')->where('id', '=', $id)->pluck('foto')[0]);
            \Storage::disk('local')->delete(\DB::table('empresas')->where('id', '=', $id)->pluck('foto2')[0]);
            \Storage::disk('local')->delete(\DB::table('empresas')->where('id', '=', $id)->pluck('foto3')[0]);
            \Storage::disk('local')->delete(\DB::table('empresas')->where('id', '=', $id)->pluck('foto4')[0]);
            \Storage::disk('local')->delete(\DB::table('empresas')->where('id', '=', $id)->pluck('foto5')[0]);
            Empresa::destroy($id);
            Session::flash('flash_message', 'Empresa deleted!');
            return redirect('empresas/empresas');
        }
    }

}
