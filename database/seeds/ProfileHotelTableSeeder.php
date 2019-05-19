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
                'nama' => 'safa_hotel',
                'alamat' => 'jl. alamat safa_hotel',
                'provinsi' => 'provinsi safa_hotel',
                'negara' => 'negara safa_hotel',
                'panduan_lokasi' => 'lokasi safa_hotel',
                'bank' => 'bank safa_hotel',
                'bank_cabang' => 'bank cabang safa_hotel',
                'nomor_rekening' => 'nomor rekening safa_hotel',
                'nama_penerima' => 'nama penerima safa_hotel',
                'logo_hotel_file' => 'logo safa_hotel.jpg'
            ]);
        }
    }
}
