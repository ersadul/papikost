<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ProfileHotelTableSeeder::class);
        $this->call(TipeKamarTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(KaryawanTableSeeder::class);
        $this->call(KamarTableSeeder::class);
        $this->call(TipeFasilitasKamarTableSeeder::class);
    }
}
