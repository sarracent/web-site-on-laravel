<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menubaner extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'menubaners';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['menuinicio', 'menuempresa', 'menuotros', 'banner','menuenlace'];

     public function setMenuinicioAttribute($menuinicio) {
        $this->attributes['menuinicio'] = "menuinicio.jpg";
        \Storage::disk('local')->put("menuinicio.jpg", \File::get($menuinicio));
    }
    
     public function setMenuempresaAttribute($menuempresa) {
        $this->attributes['menuempresa'] = "menuempresa.jpg";
        \Storage::disk('local')->put("menuempresa.jpg", \File::get($menuempresa));
    }
    

     public function setMenuotrosAttribute($menuotros) {
        $this->attributes['menuotros'] = "menuotros.jpg";
        \Storage::disk('local')->put("menuotros.jpg", \File::get($menuotros));
    }
    
   
    
    
    
}
