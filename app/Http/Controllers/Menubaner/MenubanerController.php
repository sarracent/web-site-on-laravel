<?php

namespace App\Http\Controllers\Menubaner;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Menubaner;
use Illuminate\Http\Request;
use Session;

class MenubanerController extends Controller
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
            $menubaner = Menubaner::where('menuinicio', 'LIKE', "%$keyword%")
				->orWhere('menuempresa', 'LIKE', "%$keyword%")
				->orWhere('menuotros', 'LIKE', "%$keyword%")
				->orWhere('banner', 'LIKE', "%$keyword%")
                    ->orWhere('menuenlace', 'LIKE', "%$keyword%")
				->
                paginate($perPage);
        } else {
            $menubaner = Menubaner::paginate($perPage);
        }

        return view('menubaner.menubaner.index', compact('menubaner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('menubaner.menubaner.create');
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
			'menuinicio' => 'required',	
			'menuempresa' => 'required',
			'menuotros' => 'required'
		]);
        $requestData = $request->all();
        
        Menubaner::create($requestData);

        Session::flash('flash_message', 'Menubaner added!');

        return redirect('menubaner/menubaner');
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
        $menubaner = Menubaner::findOrFail($id);

        return view('menubaner.menubaner.show', compact('menubaner'));
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
        $menubaner = Menubaner::findOrFail($id);

        return view('menubaner.menubaner.edit', compact('menubaner'));
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
			'menuinicio' => 'image|max:4096',
			'menuempresa' => 'image|max:4096',
			'menuotros' => 'image|max:4096'
            
		]);
        $requestData = $request->all();
        
        $menubaner = Menubaner::findOrFail($id);
        $menubaner->update($requestData);

        Session::flash('flash_message', 'Menubaner updated!');

        return redirect('menubaner/menubaner');
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
        Menubaner::destroy($id);

        Session::flash('flash_message', 'Menubaner deleted!');

        return redirect('menubaner/menubaner');
    }
}
