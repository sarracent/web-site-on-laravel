<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
   /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'catalogos';

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
    protected $fillable = ['documento'];

    public function setDocumentoAttribute($documento) {
        $this->attributes['documento'] =$documento->getClientOriginalName() ;
        \Storage::disk('local')->put($documento->getClientOriginalName(), \File::get($documento));
    }
}
