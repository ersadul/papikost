<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationshipToReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('review', function (Blueprint $table) {
            //
        });
        Schema::table('review', function (Blueprint $table) {
            if (!Schema::hasColumn('review', 'kamar_id')) {
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
        Schema::table('review', function (Blueprint $table) {
            //
        });
    }
}
