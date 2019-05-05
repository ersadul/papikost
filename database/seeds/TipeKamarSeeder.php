<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipeKamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipe_kamar')->insert(
            ['nama_tipe' => 'Standard','maksimal' => 2]
        );
        DB::table('tipe_kamar')->insert(
            ['nama_tipe' => 'Family','maksimal' => 3]
        );
    }
}
