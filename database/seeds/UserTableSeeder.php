<?php

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(User::all()->isEmpty()){
            User::create([
                'user_role' => 'admin',
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456')
            ]);
        }
    }
}
