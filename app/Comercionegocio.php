<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comercionegocio extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'comercionegocios';

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
    protected $fillable = ['objetivos', 'foto','titulo'];

    public function setFotoAttribute($foto) {
        $this->attributes['foto'] = 'imagenneg.jpg';
        \Storage::disk('local')->put('imagenneg.jpg', \File::get($foto));

    }
    
 
}
