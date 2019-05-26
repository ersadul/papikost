<?php

use App\Fasilitas;
use Illuminate\Database\Seeder;

class TipeFasilitasKamarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Fasilitas::all()->isEmpty()){
            Fasilitas::create([
                'jenis_fasilitas' => 'ac',
            ]);
            Fasilitas::create([
                'jenis_fasilitas' => 'kulkas',
            ]);
            Fasilitas::create([
                'jenis_fasilitas' => 'lemari',
            ]);
            Fasilitas::create([
                'jenis_fasilitas' => 'kipas',
            ]);
        }
    }
}
