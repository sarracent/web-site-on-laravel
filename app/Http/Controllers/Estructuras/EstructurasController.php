<?php

namespace App\Http\Controllers\Estructuras;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Estructura;
use Illuminate\Http\Request;
use Session;

class EstructurasController extends Controller
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
            $estructuras = Estructura::where('direccion', 'LIKE', "%$keyword%")
				->orWhere('director', 'LIKE', "%$keyword%")
				//->orWhere('mision', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $estructuras = Estructura::paginate($perPage);
        }

        return view('estructuras.estructuras.index', compact('estructuras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('estructuras.estructuras.create');
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
            'direccion' => 'required',
            'director' => 'required',
            //'mision' => 'required|min:100|max:2325',
           
           
        );
        $v = \Validator::make($requestData, $rules);
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors())->withInput($request->all());
        }
        
        Estructura::create($requestData);

        Session::flash('flash_message', 'Estructura added!');

        return redirect('estructuras/estructuras');
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
        $estructura = Estructura::findOrFail($id);

        return view('estructuras.estructuras.show', compact('estructura'));
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
        $estructura = Estructura::findOrFail($id);

        return view('estructuras.estructuras.edit', compact('estructura'));
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
        
        $estructura = Estructura::findOrFail($id);
        $estructura->update($requestData);

        Session::flash('flash_message', 'Estructura updated!');

        return redirect('estructuras/estructuras');
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
        Estructura::destroy($id);

        Session::flash('flash_message', 'Estructura deleted!');

        return redirect('estructuras/estructuras');
    }
}
