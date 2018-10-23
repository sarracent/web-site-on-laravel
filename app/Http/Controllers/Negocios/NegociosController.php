<?php

namespace App\Http\Controllers\Negocios;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Negocio;
use Illuminate\Http\Request;
use Session;

class NegociosController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request) {
        $keyword = $request->get('search');
        $perPage = 7;

        if (!empty($keyword)) {
            $negocios = Negocio::where('clasificacion', 'LIKE', "%$keyword%")
                    ->orWhere('titulo', 'LIKE', "%$keyword%")
                    ->orWhere('cuerpo', 'LIKE', "%$keyword%")
                    ->orWhere('foto', 'LIKE', "%$keyword%")
                    ->orWhere('foto2', 'LIKE', "%$keyword%")
                    ->orWhere('foto3', 'LIKE', "%$keyword%")
                    ->orWhere('foto4', 'LIKE', "%$keyword%")
                    ->orWhere('foto5', 'LIKE', "%$keyword%")
                    ->paginate($perPage);
        } else {
            $negocios = Negocio::paginate($perPage);
        }

        return view('negocios.negocios.index', compact('negocios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('negocios.negocios.create');
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
        $valor = \DB::table('negocios')->select('id')->where('clasificacion', '!=', '' . \DB::table('clasifnegocios')->select('clasificacion')->get())->get()->toArray();
        $va = '';
        foreach ($valor as $vlor) {

            $va .= ',id,' . $vlor->id;
        }
        // dd(\DB::table('negocios')->where('clasificacion','=',$request->get("clasificacion"))->count()==1);
        if ($request->get("clasificacion") != \DB::table('clasifnegocios')->pluck("clasificacion")[0] && \DB::table('negocios')->where('clasificacion', '=', $request->get("clasificacion"))->count() == 1) {
    
            Session::flash('flash_message', 'No se pudo crear la clasificación porque ya existe');
             return redirect('negocios/negocios');
             
        } else {
            $rules = array(
                'clasificacion' => 'required:negocios,clasificacion,NULL,id' . $va,
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
            Negocio::create($requestData);

            Session::flash('flash_message', 'Negocio added!');

            return redirect('negocios/negocios');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id) {
        $negocio = Negocio::findOrFail($id);

        return view('negocios.negocios.show', compact('negocio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $negocio = Negocio::findOrFail($id);

        return view('negocios.negocios.edit', compact('negocio'));
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

         $fot= Negocio::find($id);
         
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
        $negocio = Negocio::findOrFail($id);
        $negocio->update($requestData);

        Session::flash('flash_message', 'Negocio updated!');

        return redirect('negocios/negocios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id) {
        $error = \DB::table('negocios')->where('clasificacion', '=', \DB::table('clasifnegocios')->pluck("clasificacion")[0])->count();
        if (\DB::table('negocios')->where('id', '=', $id)->pluck("clasificacion")[0] == \DB::table('clasifnegocios')->pluck("clasificacion")[0] && $error > 1) {
            if (\Storage::disk('local')->exists(\DB::table('negocios')->where('id', '=', $id)->pluck('foto')[0])) {
                \Storage::disk('local')->delete(\DB::table('negocios')->where('id', '=', $id)->pluck('foto')[0]);
                \Storage::disk('local')->delete(\DB::table('negocios')->where('id', '=', $id)->pluck('foto2')[0]);
                \Storage::disk('local')->delete(\DB::table('negocios')->where('id', '=', $id)->pluck('foto3')[0]);
                \Storage::disk('local')->delete(\DB::table('negocios')->where('id', '=', $id)->pluck('foto4')[0]);
                \Storage::disk('local')->delete(\DB::table('negocios')->where('id', '=', $id)->pluck('foto5')[0]);

                Negocio::destroy($id);
                Session::flash('flash_message', 'Negocio deleted!');
                return redirect('negocios/negocios');
            }
        } if (\DB::table('negocios')->where('id', '=', $id)->pluck("clasificacion")[0] != \DB::table('clasifnegocios')->pluck("clasificacion")[0]) {
            if (\Storage::disk('local')->exists(\DB::table('negocios')->where('id', '=', $id)->pluck('foto')[0])) {
                \Storage::disk('local')->delete(\DB::table('negocios')->where('id', '=', $id)->pluck('foto')[0]);
                \Storage::disk('local')->delete(\DB::table('negocios')->where('id', '=', $id)->pluck('foto2')[0]);
                \Storage::disk('local')->delete(\DB::table('negocios')->where('id', '=', $id)->pluck('foto3')[0]);
                \Storage::disk('local')->delete(\DB::table('negocios')->where('id', '=', $id)->pluck('foto4')[0]);
                \Storage::disk('local')->delete(\DB::table('negocios')->where('id', '=', $id)->pluck('foto5')[0]);
                Negocio::destroy($id);
                Session::flash('flash_message', 'Negocio deleted!');
                return redirect('negocios/negocios');
            }
        } else {
            Session::flash('flash_message', 'No se pudo eliminar la clasificación!');

            return redirect('negocios/negocios');
        }
    }

}
