<?php

namespace App\Http\Controllers\Menuenlace;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Menuenlace;
use Illuminate\Http\Request;
use Session;

class MenuenlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $menuenlace = Menuenlace::where('menuenlace', 'LIKE', "%$keyword%")
			
                ->paginate($perPage);
        } else {
            $menuenlace = Menuenlace::paginate($perPage);
        }

        return view('menuenlace.menuenlace.index', compact('menuenlace'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('menuenlace.menuenlace.create');
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
			'menuenlace' => 'required'
		]);
        $requestData = $request->all();
        
        Menuenlace::create($requestData);

        Session::flash('flash_message', 'Menuenlace added!');

        return redirect('menuenlace/menuenlace');
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
        $menuenlace = Menuenlace::findOrFail($id);

        return view('menuenlace.menuenlace.show', compact('menuenlace'));
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
        $menuenlace = Menuenlace::findOrFail($id);

        return view('menuenlace.menuenlace.edit', compact('menuenlace'));
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
			'menuenlace' => 'required'
		]);
        $requestData = $request->all();
        
        $menuenlace = Menuenlace::findOrFail($id);
        $menuenlace->update($requestData);

        Session::flash('flash_message', 'Menuenlace updated!');

        return redirect('menuenlace/menuenlace');
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
        Menuenlace::destroy($id);

        Session::flash('flash_message', 'Menuenlace deleted!');

        return redirect('menuenlace/menuenlace');
    }
}
