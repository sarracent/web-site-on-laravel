<?php

namespace App\Http\Controllers\Clasifnegocios;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Clasifnegocio;
use Illuminate\Http\Request;
use Session;

class ClasifnegociosController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request) {
        $keyword = $request->get('search');
        $perPage = 7;

        if (!empty($keyword)) {
            $clasifnegocios = Clasifnegocio::where('clasificacion', 'LIKE', "%$keyword%")
                    ->orWhere('foto', 'LIKE', "%$keyword%")
                    ->orWhere('foto', 'LIKE', "%$keyword%")
                    ->orWhere('foto2', 'LIKE', "%$keyword%")
                    ->orWhere('foto3', 'LIKE', "%$keyword%")
                    ->orWhere('foto4', 'LIKE', "%$keyword%")
                    ->orWhere('foto5', 'LIKE', "%$keyword%")
                    ->paginate($perPage);
        } else {
            $clasifnegocios = Clasifnegocio::paginate($perPage);
        }

        return view('clasifnegocios.clasifnegocios.index', compact('clasifnegocios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('clasifnegocios.clasifnegocios.create');
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
        Clasifnegocio::create($requestData);
        Session::flash('flash_message', 'Clasifnegocio added!');
        return redirect('clasifnegocios/clasifnegocios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id) {
        $clasifnegocio = Clasifnegocio::findOrFail($id);

        return view('clasifnegocios.clasifnegocios.show', compact('clasifnegocio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $clasifnegocio = Clasifnegocio::findOrFail($id);

        return view('clasifnegocios.clasifnegocios.edit', compact('clasifnegocio'));
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
 $fot= Clasifnegocio::find($id);
         
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
        $clasifnegocio = Clasifnegocio::findOrFail($id);
        $clasifnegocio->update($requestData);

        Session::flash('flash_message', 'Clasifnegocio updated!');

        return redirect('clasifnegocios/clasifnegocios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id) {

        if (\Storage::disk('local')->exists(\DB::table('clasifnegocios')->where('id', '=', $id)->pluck('foto')[0])) {
            \Storage::disk('local')->delete(\DB::table('clasifnegocios')->where('id', '=', $id)->pluck('foto')[0]);
            \Storage::disk('local')->delete(\DB::table('empresas')->where('id', '=', $id)->pluck('foto2')[0]);
            \Storage::disk('local')->delete(\DB::table('empresas')->where('id', '=', $id)->pluck('foto3')[0]);
            \Storage::disk('local')->delete(\DB::table('empresas')->where('id', '=', $id)->pluck('foto4')[0]);
            \Storage::disk('local')->delete(\DB::table('empresas')->where('id', '=', $id)->pluck('foto5')[0]);
            Clasifnegocio::destroy($id);
            Session::flash('flash_message', 'Clasifnegocio deleted!');

            return redirect('clasifnegocios/clasifnegocios');
        }
    }

}
