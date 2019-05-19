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
                'nama_tipe' => 'Family',
                'maksimal' => 3
            ]);
            TipeKamar::create([
                'nama_tipe' => 'Standard',
                'maksimal' => 2
            ]);
        }
    }
}
