<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPanduanLokasiToProfileHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profile_hotel', function (Blueprint $table) {
            $table->string('panduan_lokasi')->after('negara')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profile_hotel', function (Blueprint $table) {
            $table->dropColumn('panduan_lokasi');
        });
    }
}
