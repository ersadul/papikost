<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationshipToCleaningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cleaning', function (Blueprint $table) {
            if (!Schema::hasColumn('cleaning', 'invoice_id')) {
                $table->integer('invoice_id')->unsigned()->nullable();
                $table->foreign('invoice_id')->references('id')->on('invoice')->onDelete('cascade');
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
        Schema::table('cleaning', function (Blueprint $table) {
            //
        });
    }
}
