<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationshipToKamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kamar', function (Blueprint $table) {
            if (!Schema::hasColumn('kamar', 'tipe_kamar_id')) {
                $table->integer('tipe_kamar_id')->unsigned()->nullable();
                $table->foreign('tipe_kamar_id')->references('id')->on('tipe_kamar')->onDelete('cascade');
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
        Schema::table('kamar', function (Blueprint $table) {
            // 
        });
    }
}
