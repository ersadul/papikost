<?php

use App\Fasilitas;
use Illuminate\Database\Seeder;

class TipeFasilitasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fasilitas = [
            'Free Wifi',
            'Tempat Tidur Bersih',
            'Perlengkapan Mandi',
            'Air Minum Gratis',
            'TV',
            'AC',
            'Waterheater'
        ];

        if(Fasilitas::all()->isEmpty()){
            foreach ($fasilitas as $i => $f) {
                Fasilitas::create([
                    'id' => $i + 1,
                    'jenis_fasilitas' => $f,
                ]);
            }
        }
    }
}
