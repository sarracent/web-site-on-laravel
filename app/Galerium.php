<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galerium extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'galerias';

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
        $this->attributes['foto'] = $foto->getClientOriginalName();
        \Storage::disk('local')->put($foto->getClientOriginalName(), \File::get($foto));
    }

}
