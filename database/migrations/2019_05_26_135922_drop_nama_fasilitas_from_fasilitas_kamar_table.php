<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropNamaFasilitasFromFasilitasKamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fasilitas_kamar', function (Blueprint $table) {
            $table->dropColumn('nama_fasilitas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fasilitas_kamar', function (Blueprint $table) {
            $table->string('nama_fasilitas');
        });
    }
}
