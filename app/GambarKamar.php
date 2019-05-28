<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GambarKamar extends Model
{
    protected $table = 'gambar_kamar';

    protected $fillable = ['nama_gambar', 'gambar_file', 'kamar_id'];
}
