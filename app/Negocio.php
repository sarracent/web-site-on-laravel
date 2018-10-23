<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Negocio extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'negocios';

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
    protected $fillable = ['clasificacion', 'titulo', 'cuerpo', 'foto', 'foto2', 'foto3', 'foto4', 'foto5'];
   public function setFotoAttribute($foto) {
        if ($foto == 'null') {
             /* if(!is_null(\DB::table('negocios')->find($this->id))){
            \Storage::disk('local')->delete(\DB::table('negocios')->find($this->id)->foto);
            } $this->attributes['foto'] = '';*/
        } else {
             if(!is_null(\DB::table('negocios')->find($this->id))){
            \Storage::disk('local')->delete(\DB::table('negocios')->find($this->id)->foto);
            }
            $this->attributes['foto'] = $foto->getClientOriginalName() . date('s');
            \Storage::disk('local')->put($foto->getClientOriginalName() . date('s'), \File::get($foto));
        }
    }

    public function setFoto2Attribute($foto2) {
        if ($foto2 == 'null') {
            /* if(!is_null(\DB::table('negocios')->find($this->id))){
            \Storage::disk('local')->delete(\DB::table('negocios')->find($this->id)->foto2);
            }
            $this->attributes['foto2'] = '';*/
        } else {
        if(!is_null(\DB::table('negocios')->find($this->id))){
            \Storage::disk('local')->delete(\DB::table('negocios')->find($this->id)->foto2);
            }
            $this->attributes['foto2'] = $foto2->getClientOriginalName() . date('s');
            \Storage::disk('local')->put($foto2->getClientOriginalName() . date('s'), \File::get($foto2));
        }
    }

    public function setFoto3Attribute($foto3) {
        if ($foto3 == 'null') {
            /*if(!is_null(\DB::table('negocios')->find($this->id))){
            \Storage::disk('local')->delete(\DB::table('negocios')->find($this->id)->foto3);
            }
            $this->attributes['foto3'] = '';*/
        } else {
            if(!is_null(\DB::table('negocios')->find($this->id))){
            \Storage::disk('local')->delete(\DB::table('negocios')->find($this->id)->foto3);
            } $this->attributes['foto3'] = $foto3->getClientOriginalName() . date('s');
            \Storage::disk('local')->put($foto3->getClientOriginalName() . date('s'), \File::get($foto3));
        }
    }

    public function setFoto4Attribute($foto4) {
        if ($foto4 == 'null') {
            /*if(!is_null(\DB::table('negocios')->find($this->id))){
            \Storage::disk('local')->delete(\DB::table('negocios')->find($this->id)->foto4);
            } $this->attributes['foto4'] = '';*/
        } else {
            if(!is_null(\DB::table('negocios')->find($this->id))){
            \Storage::disk('local')->delete(\DB::table('negocios')->find($this->id)->foto4);
            } $this->attributes['foto4'] = $foto4->getClientOriginalName() . date('s');
            \Storage::disk('local')->put($foto4->getClientOriginalName() . date('s'), \File::get($foto4));
        }
    }

    public function setFoto5Attribute($foto5) {
        if ($foto5 == 'null') {
            /*if(!is_null(\DB::table('negocios')->find($this->id))){
            \Storage::disk('local')->delete(\DB::table('negocios')->find($this->id)->foto5);
            }
            $this->attributes['foto5'] = '';*/
        } else {
           if(!is_null(\DB::table('negocios')->find($this->id))){
            \Storage::disk('local')->delete(\DB::table('negocios')->find($this->id)->foto5);
            }
            $this->attributes['foto5'] = $foto5->getClientOriginalName() . date('s');
            \Storage::disk('local')->put($foto5->getClientOriginalName() . date('s'), \File::get($foto5));
        }
    }
}
