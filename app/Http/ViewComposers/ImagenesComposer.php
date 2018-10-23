<?php

namespace App\Http\ViewComposers;

use \Illuminate\Contracts\View\View;

class ImagenesComposer {

    public function compose(View $view) {
        
    $view->with('imagenes',  \DB::table('imagenes')->get());  
 }

}
