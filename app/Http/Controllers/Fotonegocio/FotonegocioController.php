<?php

namespace App\Http\Controllers\Fotonegocio;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Fotonegocio;
use Illuminate\Http\Request;
use Session;

class FotonegocioController extends Controller
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
            $fotonegocio = Fotonegocio::where('foto', 'LIKE', "%$keyword%")
				->
              paginate($perPage);
        } else {
            $fotonegocio = Fotonegocio::paginate($perPage);
        }

        return view('fotonegocio.fotonegocio.index', compact('fotonegocio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('fotonegocio.fotonegocio.create');
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
        
        Fotonegocio::create($requestData);

        Session::flash('flash_message', 'Fotonegocio added!');

        return redirect('fotonegocio/fotonegocio');
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
        $fotonegocio = Fotonegocio::findOrFail($id);

        return view('fotonegocio.fotonegocio.show', compact('fotonegocio'));
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
        $fotonegocio = Fotonegocio::findOrFail($id);

        return view('fotonegocio.fotonegocio.edit', compact('fotonegocio'));
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
        
        $fotonegocio = Fotonegocio::findOrFail($id);
        $fotonegocio->update($requestData);

        Session::flash('flash_message', 'Fotonegocio updated!');

        return redirect('fotonegocio/fotonegocio');
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
        Fotonegocio::destroy($id);

        Session::flash('flash_message', 'Fotonegocio deleted!');

        return redirect('fotonegocio/fotonegocio');
    }
}
