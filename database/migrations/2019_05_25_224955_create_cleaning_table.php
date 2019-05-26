<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCleaningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cleaning', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vacant'); // 1 = vacant_clean, 2 = vacant_dirty  
            $table->integer('snack'); // 1 = ada permintaan, 2 = tidak ada permintaan
            $table->integer('bersih_ringan'); // 1 = ada permintaan, 2 = tidak ada permintaan
            $table->integer('bed'); // 1 = ada permintaan, 2 = tidak ada permintaan
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
        Schema::dropIfExists('cleaning');
    }
}
