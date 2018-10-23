<?php

namespace App\Http\Controllers\Interes;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Intere;
use Illuminate\Http\Request;
use Session;

class InteresController extends Controller
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
            $interes = Intere::where('titulo', 'LIKE', "%$keyword%")
				->orWhere('contenido', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $interes = Intere::paginate($perPage);
        }

        return view('interes.interes.index', compact('interes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('interes.interes.create');
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
        Intere::create($requestData);

        Session::flash('flash_message', 'Intere added!');

        return redirect('interes/interes');
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
        $intere = Intere::findOrFail($id);

        return view('interes.interes.show', compact('intere'));
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
        $intere = Intere::findOrFail($id);

        return view('interes.interes.edit', compact('intere'));
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
        
        $intere = Intere::findOrFail($id);
        $intere->update($requestData);

        Session::flash('flash_message', 'Intere updated!');

        return redirect('interes/interes');
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
        Intere::destroy($id);

        Session::flash('flash_message', 'Intere deleted!');

        return redirect('interes/interes');
    }
}
