<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;


class DishesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('dishes')->insert([
            //Admin
            [
                'name' => 'Patatas Bravas',
                'price'=> '5.5',
                'description'=>'Salsa brava casera con pimiento choricero y avellanas',
                'image'=>file_get_contents('public/images/1693559872.png'),
                'category_id'=>'1'
            ]
        ]);
    }
} 