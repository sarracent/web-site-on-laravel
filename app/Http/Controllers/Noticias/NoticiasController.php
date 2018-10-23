<?php

namespace App\Http\Controllers\Noticias;

//use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Noticia;
use Illuminate\Http\Request;
use Session;

class NoticiasController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request) {

        $keyword = $request->get('search');
        $perPage = 7;


        if (!empty($keyword)) {
            $noticias = Noticia::where('titulo', 'LIKE', "%$keyword%")
                    ->orWhere('subtitulo', 'LIKE', "%$keyword%")
                    ->orWhere('cuerpo', 'LIKE', "%$keyword%")
                    ->orWhere('foto', 'LIKE', "%$keyword%")
                    ->orWhere('foto2', 'LIKE', "%$keyword%")
                    ->orWhere('foto3', 'LIKE', "%$keyword%")
                    ->orWhere('foto4', 'LIKE', "%$keyword%")
                    ->orWhere('foto5', 'LIKE', "%$keyword%")
                    ->paginate($perPage);
        } else {
            $noticias = Noticia::paginate($perPage);
        }

        return view('noticias.noticias.index', compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('noticias.noticias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request) {

        $requestData = $request->all();

        $rules = array(
            'titulo' => 'required|min:7|max:60',
            'subtitulo' => 'required|min:7|max:60',
            'cuerpo' => 'required',
            'foto' => 'required|image|max:4096',
            'foto2' => 'image|max:4096',
            'foto3' => 'image|max:4096',
            'foto4' => 'image|max:4096',
            'foto5' => 'image|max:4096'
        );
        $v = \Validator::make($requestData, $rules);
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors())->withInput($request->all());
        }

        Noticia::create($requestData);

        Session::flash('flash_message', 'Noticia added!');

        return redirect('noticias/noticias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id) {
        $noticia = Noticia::findOrFail($id);

        return view('noticias.noticias.show', compact('noticia'));
        
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $noticia = Noticia::findOrFail($id);

        return view('noticias.noticias.edit', compact('noticia'));
        
        
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request) {

        $requestData = $request->all();
        
         $fot=Noticia::find($id);
         
        if(!$request->exists('foto')){  
        $fot->foto='null';      
        } 
        if(!$request->exists('foto2')){
        $fot->foto2='null';
        }
        if(!$request->exists('foto3')){
        $fot->foto3='null';
        }
        if(!$request->exists('foto4')){
        $fot->foto4='null';
        }
        if(!$request->exists('foto5')){
        $fot->foto5='null';
        }
        $fot->save(); 
       // dd();
        $rules = array(
            'titulo' => 'required|min:7|max:60',
            'subtitulo' => 'required|min:7|max:60',
            'cuerpo' => 'required',
            'foto' => 'image|max:4096',
            'foto2' => 'image|max:4096',
            'foto3' => 'image|max:4096',
            'foto4' => 'image|max:4096',
            'foto5' => 'image|max:4096'
        );
        $v = \Validator::make($requestData, $rules);
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors())->withInput($request->all());
        }
        $noticia = Noticia::findOrFail($id);
        
        $noticia->update($requestData);
       
        Session::flash('flash_message', 'Noticia updated!');

        return redirect('noticias/noticias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id) {
         if (\Storage::disk('local')->exists(\DB::table('noticias')->where('id', '=', $id)->pluck('foto')[0])) {
            \Storage::disk('local')->delete(\DB::table('noticias')->where('id', '=', $id)->pluck('foto')[0]);
            \Storage::disk('local')->delete(\DB::table('noticias')->where('id', '=', $id)->pluck('foto2')[0]);
            \Storage::disk('local')->delete(\DB::table('noticias')->where('id', '=', $id)->pluck('foto3')[0]);
            \Storage::disk('local')->delete(\DB::table('noticias')->where('id', '=', $id)->pluck('foto4')[0]);
            \Storage::disk('local')->delete(\DB::table('noticias')->where('id', '=', $id)->pluck('foto5')[0]);
        Noticia::destroy($id);

        Session::flash('flash_message', 'Noticia deleted!');

        return redirect('noticias/noticias');
    }
    }

}
