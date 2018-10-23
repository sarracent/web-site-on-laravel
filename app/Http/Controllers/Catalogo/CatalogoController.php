<?php

namespace App\Http\Controllers\Catalogo;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Catalogo;
use Illuminate\Http\Request;
use Session;

class CatalogoController extends Controller
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
            $catalogo = Catalogo::where('documento', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $catalogo = Catalogo::paginate($perPage);
        }

        return view('catalogo.catalogo.index', compact('catalogo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('catalogo.catalogo.create');
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
			'documento' => 'required'
		]);
        $requestData = $request->all();
        
        Catalogo::create($requestData);

        Session::flash('flash_message', 'Catalogo added!');

        return redirect('catalogo/catalogo');
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
        $catalogo = Catalogo::findOrFail($id);

        return view('catalogo.catalogo.show', compact('catalogo'));
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
        $catalogo = Catalogo::findOrFail($id);

        return view('catalogo.catalogo.edit', compact('catalogo'));
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
             \Storage::disk('local')->delete(\DB::table('catalogos')->where('id','=',$id)->pluck('documento')[0]);
       
        $this->validate($request, [
			'documento' => 'required'
		]);
        $requestData = $request->all();
        
        $catalogo = Catalogo::findOrFail($id);
        $catalogo->update($requestData);

        Session::flash('flash_message', 'Catalogo updated!');

        return redirect('catalogo/catalogo');
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
        
              
        if(\Storage::disk('local')->exists(\DB::table('catalogos')->where('id','=',$id)->pluck('documento')[0])){
            \Storage::disk('local')->delete(\DB::table('catalogos')->where('id','=',$id)->pluck('documento')[0]);
        Catalogo::destroy($id);
    
        Session::flash('flash_message', 'Catalogo deleted!');

        return redirect('catalogo/catalogo');   
        }
        return redirect('catalogo/catalogo'); 
    }
}
