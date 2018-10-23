<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    function fotos(){
     return \App\Galerium::all();     
    }
}
