<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasilitasKamar extends Model
{
    protected $table = 'fasilitas_kamar';

    public function fasilitas(){
        return $this->hasOne('App\Fasilitas', 'id', 'tipe_fasilitas_id');
    }
}
