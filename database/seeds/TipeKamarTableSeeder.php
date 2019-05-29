<?php

use App\TipeKamar;
use Illuminate\Database\Seeder;

class TipeKamarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(TipeKamar::all()->isEmpty()){
            TipeKamar::create([
                'id' => 1,
                'nama_tipe' => 'Standart',
                'maksimal' => 2
            ]);
            TipeKamar::create([
                'id' => 2,
                'nama_tipe' => 'Family Rooms',
                'maksimal' => 4
            ]);
        }
    }
}
