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
            ["nama" => "Appetizer", "image" => "appetizer.jpg"],
            ["nama" => "Main Course", "image" => "maincourse.jpg"],
            ["nama" => "Snacks", "image" => "snacks.jpg"],
            ["nama" => "Dessert", "image" => "dessert.jpg"],
            ["nama" => "Coffee", "image" => "coffee.jpg"],
            ["nama" => "Non-Coffee", "image" => "noncoffee.jpg"],
            ["nama" => "Healthy Juice", "image" => "healthyjuice.jpg"]
        ]);
    }
}
