<?php

namespace App\Http\Controllers\Fotocomercionegocio;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Fotocomercionegocio;
use Illuminate\Http\Request;
use Session;

class FotocomercionegocioController extends Controller
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
            $fotocomercionegocio = Fotocomercionegocio::where('foto', 'LIKE', "%$keyword%")
				->
               paginate($perPage);
        } else {
            $fotocomercionegocio = Fotocomercionegocio::paginate($perPage);
        }

        return view('fotocomercionegocio.fotocomercionegocio.index', compact('fotocomercionegocio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('fotocomercionegocio.fotocomercionegocio.create');
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
        
        Fotocomercionegocio::create($requestData);

        Session::flash('flash_message', 'Fotocomercionegocio added!');

        return redirect('fotocomercionegocio/fotocomercionegocio');
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
        $fotocomercionegocio = Fotocomercionegocio::findOrFail($id);

        return view('fotocomercionegocio.fotocomercionegocio.show', compact('fotocomercionegocio'));
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
        $fotocomercionegocio = Fotocomercionegocio::findOrFail($id);

        return view('fotocomercionegocio.fotocomercionegocio.edit', compact('fotocomercionegocio'));
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
        
        $fotocomercionegocio = Fotocomercionegocio::findOrFail($id);
        $fotocomercionegocio->update($requestData);

        Session::flash('flash_message', 'Fotocomercionegocio updated!');

        return redirect('fotocomercionegocio/fotocomercionegocio');
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
        Fotocomercionegocio::destroy($id);

        Session::flash('flash_message', 'Fotocomercionegocio deleted!');

        return redirect('fotocomercionegocio/fotocomercionegocio');
    }
}
