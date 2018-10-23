<?php

namespace App\Http\Controllers\Footer;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Footer;
use Illuminate\Http\Request;
use Session;

class FooterController extends Controller
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
            $footer = Footer::where('grupo', 'LIKE', "%$keyword%")
				->orWhere('direccion', 'LIKE', "%$keyword%")
				->orWhere('telefonos', 'LIKE', "%$keyword%")
				->orWhere('imagen', 'LIKE', "%$keyword%")
				->
                paginate($perPage);
        } else {
            $footer = Footer::paginate($perPage);
        }

        return view('footer.footer.index', compact('footer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('footer.footer.create');
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
			'grupo' => 'required',
			'direccion' => 'required',
			'telefonos' => 'required'
		]);
        $requestData = $request->all();
        
        Footer::create($requestData);

        Session::flash('flash_message', 'Footer added!');

        return redirect('footer/footer');
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
        $footer = Footer::findOrFail($id);

        return view('footer.footer.show', compact('footer'));
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
        $footer = Footer::findOrFail($id);

        return view('footer.footer.edit', compact('footer'));
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
			'grupo' => 'required',
			'direccion' => 'required',
			'telefonos' => 'required'
		]);
        $requestData = $request->all();
        
        $footer = Footer::findOrFail($id);
        $footer->update($requestData);

        Session::flash('flash_message', 'Footer updated!');

        return redirect('footer/footer');
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
        Footer::destroy($id);

        Session::flash('flash_message', 'Footer deleted!');

        return redirect('footer/footer');
    }
}
