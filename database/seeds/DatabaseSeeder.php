<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\user_data_model;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         
    DB::table('user_data')->insert([
            'name' => Str::random(10),
            'uname' => Str::random(10),
            'password' => Hash::make('password'),
        ]);
    }
}
