<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fotocomercionegocio extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fotocomercionegocios';

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
    protected $fillable = ['foto'];
 public function setFotoAttribute($foto) {
        $this->attributes['foto'] ='fotonegcom.jpg';
        \Storage::disk('local')->put('fotonegcom.jpg', \File::get($foto));
    }
    
}
