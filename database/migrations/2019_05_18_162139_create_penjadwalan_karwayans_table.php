<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjadwalanKarwayansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjadwalan_karyawan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tanggal_jadwal');
            $table->integer('jam_jadwal');
            $table->integer('shift');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjadwalan_karyawan');
    }
}
