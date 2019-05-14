<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->increments('id');
            $table->string('invoice_code');
            $table->string('nama');
            $table->string('email');
            $table->string('phone');
            $table->string('permintaan_khusus')->nullable();
            $table->date('check_in');
            $table->integer('lama_menginap');
            $table->integer('status_menginap');
            $table->integer('final_harga');
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
        Schema::dropIfExists('invoice');
    }
}
