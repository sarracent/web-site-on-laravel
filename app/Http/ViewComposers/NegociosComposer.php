<?php

namespace App\Http\ViewComposers;

use \Illuminate\Contracts\View\View;

class NegociosComposer {

     public function compose(View $view) {

  $negocios= \DB::table('negocios')->select('clasificacion')->distinct()->get();
        $view->with('negocios',$negocios);   
    }

}
