<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'review';

    protected $fillable = ['tanggal_masuk_menginap', 'tanggal_keluar_menginap', 'review'];
}
