<?php

namespace App\Http\Controllers\Fotoempresa;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Fotoempresa;
use Illuminate\Http\Request;
use Session;

class FotoempresaController extends Controller
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
            $fotoempresa = Fotoempresa::where('foto', 'LIKE', "%$keyword%")
				->
               paginate($perPage);
        } else {
            $fotoempresa = Fotoempresa::paginate($perPage);
        }

        return view('fotoempresa.fotoempresa.index', compact('fotoempresa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('fotoempresa.fotoempresa.create');
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
        $this->validate($request, [
			'foto' => 'required'
		]);
        $requestData = $request->all();
        
        Fotoempresa::create($requestData);

        Session::flash('flash_message', 'Fotoempresa added!');

        return redirect('fotoempresa/fotoempresa');
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
        $fotoempresa = Fotoempresa::findOrFail($id);

        return view('fotoempresa.fotoempresa.show', compact('fotoempresa'));
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
        $fotoempresa = Fotoempresa::findOrFail($id);

        return view('fotoempresa.fotoempresa.edit', compact('fotoempresa'));
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
        $this->validate($request, [
			'foto' => 'required'
		]);
        $requestData = $request->all();
        
        $fotoempresa = Fotoempresa::findOrFail($id);
        $fotoempresa->update($requestData);

        Session::flash('flash_message', 'Fotoempresa updated!');

        return redirect('fotoempresa/fotoempresa');
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
        Fotoempresa::destroy($id);

        Session::flash('flash_message', 'Fotoempresa deleted!');

        return redirect('fotoempresa/fotoempresa');
    }
}
