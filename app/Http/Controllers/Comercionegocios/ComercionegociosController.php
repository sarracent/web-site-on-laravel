<?php

namespace App\Http\Controllers\Comercionegocios;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Comercionegocio;
use Illuminate\Http\Request;
use Session;

class ComercionegociosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 7;

        if (!empty($keyword)) {
            $comercionegocios = Comercionegocio::where('objetivos', 'LIKE', "%$keyword%")
				->orWhere('foto', 'LIKE', "%$keyword%")
                    ->orWhere('titulo', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $comercionegocios = Comercionegocio::paginate($perPage);
        }

        return view('comercionegocios.comercionegocios.index', compact('comercionegocios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('comercionegocios.comercionegocios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        $rules = array(
         'titulo' => 'required|min:7|max:60',
            'objetivos' => 'required|min:1118|max:2325',
            'fotonegocio' => 'required|image|max:4096',
           
        );
        $v = \Validator::make($requestData, $rules);
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors())->withInput($request->all());
        }
        
        Comercionegocio::create($requestData);

        Session::flash('flash_message', 'Comercionegocio added!');

        return redirect('comercionegocios/comercionegocios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $comercionegocio = Comercionegocio::findOrFail($id);

        return view('comercionegocios.comercionegocios.show', compact('comercionegocio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $comercionegocio = Comercionegocio::findOrFail($id);

        return view('comercionegocios.comercionegocios.edit', compact('comercionegocio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $comercionegocio = Comercionegocio::findOrFail($id);
        $comercionegocio->update($requestData);

        Session::flash('flash_message', 'Comercionegocio updated!');

        return redirect('comercionegocios/comercionegocios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        
         if (\Storage::disk('local')->exists(\DB::table('comercionegocios')->where('id', '=', $id)->pluck('foto')[0])) {
            \Storage::disk('local')->delete(\DB::table('comercionegocios')->where('id', '=', $id)->pluck('foto')[0]);
            Comercionegocio::destroy($id);
            Session::flash('flash_message', 'Comercionegocio deleted!');
            return redirect('comercionegocios/comercionegocios');
        }
    }
}
