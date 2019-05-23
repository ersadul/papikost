<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'kamar';

    public function fasilitasKamar(){
        return $this->hasMany('App\FasilitasKamar', 'kamar_id', 'id');
    }
}
