<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [ 'name'=>'saurabh',
              'email'=>'talktoosaurabh@gmail.com',
             'password'=>Hash::make('saurabh123') ],

            [ 'name'=>'admin',
              'email'=>'admin@gmail.com',
              'password'=>Hash::make('admin') ]
        ]);
    }
}
