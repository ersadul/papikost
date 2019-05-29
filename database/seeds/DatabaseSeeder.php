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
        $this->call([
            UserTableSeeder::class,
            TipeKamarTableSeeder::class,
            KamarTableSeeder::class,
            TipeFasilitasTableSeeder::class,
            FasilitasKamarTableSeeder::class,
            ProfileHotelTableSeeder::class
        ]);
    }
}