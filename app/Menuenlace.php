<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menuenlace extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'menuenlaces';

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
    protected $fillable = ['menuenlace'];

    public function setMenuenlaceAttribute($menuenlace) {
        $this->attributes['menuenlace'] = "menuenlace.jpg";
        \Storage::disk('local')->put("menuenlace.jpg", \File::get($menuenlace));
    }
}
