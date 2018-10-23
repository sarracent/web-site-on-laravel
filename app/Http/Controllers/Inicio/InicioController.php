<?php

namespace App\Http\Controllers\Inicio;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Inicio;
use Illuminate\Http\Request;
use Session;

class InicioController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request) {
        $keyword = $request->get('search');
        $perPage = 7;

        if (!empty($keyword)) {
            $inicio = Inicio::where('titulo', 'LIKE', "%$keyword%")
                    ->orWhere('grupoind1', 'LIKE', "%$keyword%")
                    ->orWhere('grupoind2', 'LIKE', "%$keyword%")
                    ->orWhere('mis', 'LIKE', "%$keyword%")
                    ->orWhere('valcomp', 'LIKE', "%$keyword%")
                    ->orWhere('valcomp2', 'LIKE', "%$keyword%")
                    ->orWhere('valcomp3', 'LIKE', "%$keyword%")
                    ->orWhere('valcomp4', 'LIKE', "%$keyword%")
                    ->orWhere('valcomp5', 'LIKE', "%$keyword%")
                    ->orWhere('valcomp6', 'LIKE', "%$keyword%")
                    ->orWhere('valcomp7', 'LIKE', "%$keyword%")
  
                    ->paginate($perPage);
        } else {
            $inicio = Inicio::paginate($perPage);
        }

        return view('inicio.inicio.index', compact('inicio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('inicio.inicio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request) {
        $this->validate($request, [
            'titulo' => 'required',
            'grupoind1' => 'required',
            'grupoind2' => 'required',
            'mis' => 'required',
          
        ]);
        $requestData = $request->all();

        Inicio::create($requestData);

        Session::flash('flash_message', 'Inicio added!');

        return redirect('inicio/inicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id) {
        $inicio = Inicio::findOrFail($id);

        return view('inicio.inicio.show', compact('inicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $inicio = Inicio::findOrFail($id);
        return view('inicio.inicio.edit', compact('inicio'));
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
        $this->validate($request, [
            'titulo' => 'required',
            'grupoind1' => 'required',
            'grupoind2' => 'required',
            'mis' => 'required'
        ]);
        $requestData = $request->all();

        $inicio = Inicio::findOrFail($id);
        $inicio->update($requestData);

        Session::flash('flash_message', 'Inicio updated!');

        return redirect('inicio/inicio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id) {
        Inicio::destroy($id);

        Session::flash('flash_message', 'Inicio deleted!');

        return redirect('inicio/inicio');
    }

}
