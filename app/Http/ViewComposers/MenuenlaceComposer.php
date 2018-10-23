<?php

namespace App\Http\ViewComposers;

use \Illuminate\Contracts\View\View;

class MenuenlaceComposer {

    public function compose(View $view) {
        
    $view->with('menuinteres',  \DB::table('menuenlaces')->get());  
 }

}
