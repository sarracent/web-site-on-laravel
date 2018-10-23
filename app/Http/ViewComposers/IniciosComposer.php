<?php

namespace App\Http\ViewComposers;

use \Illuminate\Contracts\View\View;

class IniciosComposer {

    public function compose(View $view) {
        
    $view->with('inicios',  \DB::table('inicios')->get());  
 }

}
