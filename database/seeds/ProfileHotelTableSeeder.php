<?php

use App\ProfileHotel;
use Illuminate\Database\Seeder;

class ProfileHotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(ProfileHotel::all()->isEmpty()){
            ProfileHotel::create([
                'nama' => 'Safa Hotel',
                'alamat' => 'Jalan Danau Tondano Raya Blok F4 No. A14, Sawojajar, Kota Malang. 65139.',
                'provinsi' => 'Jawa Timur',
                'negara' => 'Indonesia',
                'panduan_lokasi' => '-',
                'bank' => '-',
                'bank_cabang' => '-',
                'nomor_rekening' => '-',
                'nama_penerima' => '-',
                'logo_hotel_file' => ''
            ]);
        }
    }
}
