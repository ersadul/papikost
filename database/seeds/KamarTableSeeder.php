<?php

use App\Kamar;
use Illuminate\Database\Seeder;

class KamarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 1;
        if(Kamar::all()->isEmpty()){
            for ($i; $i <= 17 ; $i++) { 
                Kamar::create([
                    'id' => $i,
                    'nama_kamar' => 'Standart - '.$i,
                    'deskripsi' => '-',
                    'harga' => 155000,
                    'tipe_kamar_id' => 1
                ]);
            }
    
            Kamar::create([
                'id' => $i,
                'nama_kamar' => 'Family Rooms - 1',
                'deskripsi' => '-',
                'harga' => 300000,
                'tipe_kamar_id' => 2
            ]);
        }
    }
}
