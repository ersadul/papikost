<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_invoice', function (Blueprint $table) {
            $table->unsignedInteger('invoice_id');
            $table->integer('tipe_payment');
            $table->integer('flag_payment');
            $table->string('nomor_transaksi')->nullable();
            $table->string('bukti_pembayaran_file')->nullable();
            $table->timestamps();
            $table->foreign('invoice_id')->references('id')->on('invoice')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_invoice');
    }
}
