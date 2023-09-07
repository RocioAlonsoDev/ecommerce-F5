<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            //Admin
            [
                'name' => 'Admin',
                'surname'=> 'Test',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('123456'),
                'role'=>'admin',
                'status'=>'active'
            ],
            [
                'name' => 'User',
                'surname'=> 'Test',
                'email'=>'user@gmail.com',
                'password'=>Hash::make('456123'),
                'role'=>'user',
                'status'=>'active'
            ],
        ]);
    }
}
