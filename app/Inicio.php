<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inicio extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inicios';

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
    protected $fillable = ['titulo', 'grupoind1', 'grupoind2', 'mis','valcomp','valcomp2','valcomp3','valcomp4','valcomp5','valcomp6','valcomp7'];
  
}
