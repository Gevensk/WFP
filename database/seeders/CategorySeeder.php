<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ["nama" => "Appetizer"],
            ["nama" => "Main Course"],
            ["nama" => "Snacks"],
            ["nama" => "Dessert"],
            ["nama" => "Coffee"],
            ["nama" => "Non-Coffee"],
            ["nama" => "Healthy Juice"]
        ]);
    }
}
