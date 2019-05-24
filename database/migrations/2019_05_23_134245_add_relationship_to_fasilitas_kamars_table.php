<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationshipToFasilitasKamarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fasilitas_kamar', function (Blueprint $table) {
            if (!Schema::hasColumn('fasilitas_kamar', 'tipe_fasilitas_id')) {
                $table->integer('tipe_fasilitas_id')->unsigned()->nullable();
                $table->foreign('tipe_fasilitas_id')->references('id')->on('tipe_fasilitas')->onDelete('cascade');
            }
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
            //
        });
    }
}
