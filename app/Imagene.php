<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagene extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'imagenes';

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
    protected $fillable = ['img1', 'img2', 'img3', 'imgfidciencia', 'imgenlace'];

    public function setImg1Attribute($img1) {
        $this->attributes['img1'] = "img1.jpg";
        \Storage::disk('local')->put("img1.jpg", \File::get($img1));
    }

    public function setImg2Attribute($img2) {
        $this->attributes['img2'] = "img2.jpg";
        \Storage::disk('local')->put("img2.jpg", \File::get($img2));
    }

    public function setImg3Attribute($img3) {
        $this->attributes['img3'] = "img3.jpg";
        \Storage::disk('local')->put("img3.jpg", \File::get($img3));
    }

    public function setImgfidcienciaAttribute($imgfidciencia) {
        $this->attributes['imgfidciencia'] = "imgfidciencia.jpg";
        \Storage::disk('local')->put("imgfidciencia.jpg", \File::get($imgfidciencia));
    }

    public function setImgenlaceAttribute($imgenlace) {
        $this->attributes['imgenlace'] = "imgenlace.jpg";
        \Storage::disk('local')->put("imgenlace.jpg", \File::get($imgenlace));
    }

}
