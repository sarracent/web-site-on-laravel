<?php

namespace App\Http\ViewComposers;

use \Illuminate\Contracts\View\View;

class FooterComposer {

    public function compose(View $view) {
        
    $view->with('footers',  \DB::table('footers')->get());  
 }

}
