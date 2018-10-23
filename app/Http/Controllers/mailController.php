<?php

namespace App\Http\Controllers;

class mailController extends Controller
{
     function sendemail() {
         
        \Mail::to('damians@aica.cu')->send(new \App\Mail\UserMail(\Request::get('contenido'),\Request::get('name'),\Request::get('correo')));
    }
       public function ejecutar(){
        exec('notepad');
    }
}
