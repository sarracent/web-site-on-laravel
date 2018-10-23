<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fotonegocio extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fotonegocios';

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
        $this->attributes['foto'] = 'fotonegocio.jpg';
        \Storage::disk('local')->put('fotonegocio.jpg', \File::get($foto));
    }
    
}
