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
                'nama_tipe' => 'Kecil',
                'maksimal' => 5
            ]);
            TipeKamar::create([
                'id' => 2,
                'nama_tipe' => 'Sedang',
                'maksimal' => 8
            ]);
            TipeKamar::create([
                'id' => 3,
                'nama_tipe' => 'Besar',
                'maksimal' => 12
            ]);
        }
    }
}
