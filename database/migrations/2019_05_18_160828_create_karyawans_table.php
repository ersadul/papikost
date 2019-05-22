<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('phone_number');
            $table->string('job_role');
            $table->string('email');
            $table->string('tempat_tanggal_lahir');
            $table->string('alamat_tinggal');
            $table->string('jenis_kelamin');
            $table->string('status_perkawinan');
            $table->string('agama');
            $table->string('sd');
            $table->string('smp');
            $table->string('sma');
            $table->string('perguruan_tinggi');
            $table->string('pengalaman_kerja');
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
        Schema::dropIfExists('karyawan');
    }
}
