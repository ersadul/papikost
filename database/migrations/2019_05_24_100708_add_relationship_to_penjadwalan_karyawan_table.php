<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationshipToPenjadwalanKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penjadwalan_karyawan', function (Blueprint $table) {
            if (!Schema::hasColumn('penjadwalan_karyawan', 'karyawan_id')) {
                $table->integer('karyawan_id')->unsigned()->nullable();
                $table->foreign('karyawan_id')->references('id')->on('karyawan')->onDelete('cascade');
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
        Schema::table('penjadwalan_karyawan', function (Blueprint $table) {
            //
        });
    }
}
