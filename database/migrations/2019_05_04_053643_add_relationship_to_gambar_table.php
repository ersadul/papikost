<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationshipToGambarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gambar_kamar', function (Blueprint $table) {
            if (!Schema::hasColumn('gambar_kamar', 'kamar_id')) {
                $table->integer('kamar_id')->unsigned()->nullable();
                $table->foreign('kamar_id')->references('id')->on('kamar')->onDelete('cascade');
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
        Schema::table('gambar_kamar', function (Blueprint $table) {
            //
        });
    }
}
