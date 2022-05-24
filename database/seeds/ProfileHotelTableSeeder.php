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
                'nama' => 'YourSpace',
                'alamat' => 'Jalan Istana Bunga Dewandaru Kavling 1A',
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
