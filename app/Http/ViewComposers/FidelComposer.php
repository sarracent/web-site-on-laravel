<?php

namespace App\Http\ViewComposers;

use \Illuminate\Contracts\View\View;

class FidelComposer {

    public function compose(View $view) {
        
    $view->with('fidelciencia',  \DB::table('fidelciencias')->get());  
 }

}
