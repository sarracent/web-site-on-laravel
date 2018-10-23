<?php

namespace App\Http\Controllers\Fidelciencias;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Fidelciencia;
use Illuminate\Http\Request;
use Session;

class FidelcienciasController extends Controller
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
            $fidelciencias = Fidelciencia::where('titulo', 'LIKE', "%$keyword%")
				->orWhere('contenido', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $fidelciencias = Fidelciencia::paginate($perPage);
        }

        return view('fidelciencias.fidelciencias.index', compact('fidelciencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('fidelciencias.fidelciencias.create');
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
            'titulo' => 'required',
           
            'contenido' => 'required',
           
           
        );
        $v = \Validator::make($requestData, $rules);
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors())->withInput($request->all());
        }
        Fidelciencia::create($requestData);

        Session::flash('flash_message', 'Fidelciencia added!');

        return redirect('fidelciencias/fidelciencias');
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
        $fidelciencia = Fidelciencia::findOrFail($id);

        return view('fidelciencias.fidelciencias.show', compact('fidelciencia'));
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
        $fidelciencia = Fidelciencia::findOrFail($id);

        return view('fidelciencias.fidelciencias.edit', compact('fidelciencia'));
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
        
        $fidelciencia = Fidelciencia::findOrFail($id);
        $fidelciencia->update($requestData);

        Session::flash('flash_message', 'Fidelciencia updated!');

        return redirect('fidelciencias/fidelciencias');
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
        Fidelciencia::destroy($id);

        Session::flash('flash_message', 'Fidelciencia deleted!');

        return redirect('fidelciencias/fidelciencias');
    }
}
