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
        Kamar::create([
            'nama_kamar' => 'Fams Room - 1',
            'deskripsi' => '-',
            'harga' => 1,
            'tipe_kamar_id' => 1
        ]);
        Kamar::create([
            'nama_kamar' => 'Trevo Room - 1',
            'deskripsi' => '-',
            'harga' => 1,
            'tipe_kamar_id' => 2
        ]);
    }
}
