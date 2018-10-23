<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'footers';

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
    protected $fillable = ['grupo', 'direccion', 'telefonos','imagen'];
    
 public function setImagenAttribute($imagen) {
        $this->attributes['imagen'] = 'footer.jpg';
        \Storage::disk('local')->put('footer.jpg', \File::get($imagen));
    }
    
}
