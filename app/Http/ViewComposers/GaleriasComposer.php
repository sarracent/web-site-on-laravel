<?php

namespace App\Http\ViewComposers;

use \Illuminate\Contracts\View\View;

class GaleriasComposer {

    public function compose(View $view) {
        
    $view->with('galerias',  \DB::table('galerias')->get());  
 }

}
