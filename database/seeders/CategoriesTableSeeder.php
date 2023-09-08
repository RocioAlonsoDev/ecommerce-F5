<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class CategoriesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            //Admin
            [
                'name' => 'Sin lactosa',
                'description'=>'No contiene lactosa',
            ],
            [
                'name' => 'Sin gluten',
                'description'=>'No contiene gluten',
            ],
            [
                'name' => 'Picante',
                'description'=>'Puede ser picante',
            ],
            [
                'name' => 'Vegetariano',
                'description'=>'No contiene ni carne ni pescado, puede contener huevos y lacteos',
            ],
            [
                'name' => 'Vegano',
                'description'=>'No contiene ningún producto derivado de animal',
            ],
        ]);
    }
} 
