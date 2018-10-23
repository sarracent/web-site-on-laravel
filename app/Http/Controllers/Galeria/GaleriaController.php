<?php

namespace App\Http\Controllers\Galeria;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Galerium;
use Illuminate\Http\Request;
use Session;

class GaleriaController extends Controller
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
            $galeria = Galerium::where('foto', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $galeria = Galerium::paginate($perPage);
        }

        return view('galeria.galeria.index', compact('galeria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('galeria.galeria.create');
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
            
            'foto' => 'required|image|max:4096',
          
        );
        $v = \Validator::make($requestData, $rules);
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors())->withInput($request->all());
        }
        Galerium::create($requestData);
        
        

        Session::flash('flash_message', 'Galerium added!');

        return redirect('galeria/galeria');
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
        $galerium = Galerium::findOrFail($id);

        return view('galeria.galeria.show', compact('galerium'));
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
        $galerium = Galerium::findOrFail($id);

        return view('galeria.galeria.edit', compact('galerium'));
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
        
        $galerium = Galerium::findOrFail($id);
        $galerium->update($requestData);

        Session::flash('flash_message', 'Galerium updated!');

        return redirect('galeria/galeria');
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
         if(\Storage::disk('local')->exists(\DB::table('galerias')->where('id','=',$id)->pluck('foto')[0])){
            \Storage::disk('local')->delete(\DB::table('galerias')->where('id','=',$id)->pluck('foto')[0]);
   
        Galerium::destroy($id);

        Session::flash('flash_message', 'Galerium deleted!');

        return redirect('galeria/galeria');
    }
    }
}
