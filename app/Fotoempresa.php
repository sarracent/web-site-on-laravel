<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fotoempresa extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fotoempresas';

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
        $this->attributes['foto'] = 'fotoempresa.jpg';
        \Storage::disk('local')->put('fotoempresa.jpg', \File::get($foto));
    }
    
}
