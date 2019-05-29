<?php

use App\Kamar;
use App\Fasilitas;
use App\FasilitasKamar;
use Illuminate\Database\Seeder;

class FasilitasKamarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (FasilitasKamar::all()->isEmpty()) {
            foreach (Kamar::all() as $i => $k) {
                foreach (Fasilitas::all() as $j => $f) {
                    FasilitasKamar::create([
                        'kamar_id' => $k->id,
                        'tipe_fasilitas_id' => $f->id
                    ]);
                }
            }
        }
    }
}
