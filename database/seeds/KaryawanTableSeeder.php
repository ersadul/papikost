<?php

use App\Karyawan;
use Illuminate\Database\Seeder;

class KaryawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Karyawan::create([
            'nama' => 'karyawan', 
            'phone_number' => 0,
            'job_role' => 'pelayan',
            'email' => 'karyawan@gmail.com',
            'tempat_tanggal_lahir' => 'malang, 1 januari 2000', 
            'alamat_tinggal' => 'malang',
            'jenis_kelamin' => 'pria',
            'status_perkawinan' => 'menikah',
            'agama' => 'islam',
            'sd' => 'sd islam',
            'smp' => 'smp islam',
            'sma' => 'sma islam',
            'perguruan_tinggi' => 'kuliah islam',
            'pengalaman_kerja' => '1',
            
        ]);
    }
}
