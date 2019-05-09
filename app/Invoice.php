<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoice';

    public function kamar(){
        return $this->hasOne('App\Kamar', 'id', 'kamar_id');
    }

    public function tipeKamar()
    {
        return $this->hasMany('App\Kamar');
    }
}
