<?php

namespace App\Http\ViewComposers;

use \Illuminate\Contracts\View\View;

class InteresComposer {

    public function compose(View $view) {
        
    $view->with('interes',  \DB::table('interes')->get());  
 }

}
