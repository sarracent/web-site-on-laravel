<?php

namespace App\Http\Controllers\Imagenes;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Imagene;
use Illuminate\Http\Request;
use Session;

class ImagenesController extends Controller
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
            $imagenes = Imagene::where('img1', 'LIKE', "%$keyword%")
				->orWhere('img2', 'LIKE', "%$keyword%")
				->orWhere('img3', 'LIKE', "%$keyword%")
				->orWhere('imgfidciencia', 'LIKE', "%$keyword%")
				->orWhere('imgenlace', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $imagenes = Imagene::paginate($perPage);
        }

        return view('imagenes.imagenes.index', compact('imagenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('imagenes.imagenes.create');
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
			'img1' => 'image|max:4096',
			'img2' => 'image|max:4096',
			'img3' => 'image|max:4096',
			'imgfidciencia' => 'image|max:4096',
			'imgenlace' => 'image|max:4096'
		]);
        $requestData = $request->all();
        
        Imagene::create($requestData);

        Session::flash('flash_message', 'Imagene added!');

        return redirect('imagenes/imagenes');
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
        $imagene = Imagene::findOrFail($id);

        return view('imagenes.imagenes.show', compact('imagene'));
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
        $imagene = Imagene::findOrFail($id);

        return view('imagenes.imagenes.edit', compact('imagene'));
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
			'img1' => 'image|max:4096',
			'img2' => 'image|max:4096',
			'img3' => 'image|max:4096',
			'imgfidciencia' => 'image|max:4096',
			'imgenlace' => 'image|max:4096'
		]);
        $requestData = $request->all();
        
        $imagene = Imagene::findOrFail($id);
        $imagene->update($requestData);

        Session::flash('flash_message', 'Imagene updated!');

        return redirect('imagenes/imagenes');
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
        Imagene::destroy($id);

        Session::flash('flash_message', 'Imagene deleted!');

        return redirect('imagenes/imagenes');
    }
}
