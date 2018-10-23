<?php

namespace App\Http\ViewComposers;

use \Illuminate\Contracts\View\View;

class NoticiasComposer {

    public function compose(View $view) {
        $noticia = \DB::table('noticias')->orderBy('id', 'desc')->get();
        $view->with('noticia', $noticia);
    }

}
