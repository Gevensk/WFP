<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NutritionFactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nutrition_facts')->insert([
            ['food_id' => 1, 'nutrition_id' => 1, 'jumlah' => 350],
            ['food_id' => 1, 'nutrition_id' => 2, 'jumlah' => 25],
            ['food_id' => 1, 'nutrition_id' => 3, 'jumlah' => 8],
            ['food_id' => 1, 'nutrition_id' => 11, 'jumlah' => 45],
            ['food_id' => 1, 'nutrition_id' => 4, 'jumlah' => 6],
            ['food_id' => 1, 'nutrition_id' => 5, 'jumlah' => 60],
            ['food_id' => 1, 'nutrition_id' => 6, 'jumlah' => 500],
            ['food_id' => 1, 'nutrition_id' => 7, 'jumlah' => 400],

            ['food_id' => 2, 'nutrition_id' => 1, 'jumlah' => 180],
            ['food_id' => 2, 'nutrition_id' => 10, 'jumlah' => 18],
            ['food_id' => 2, 'nutrition_id' => 11, 'jumlah' => 25],
            ['food_id' => 2, 'nutrition_id' => 12, 'jumlah' => 60],
            ['food_id' => 2, 'nutrition_id' => 13, 'jumlah' => 150],
            ['food_id' => 2, 'nutrition_id' => 3, 'jumlah' => 7],
            ['food_id' => 2, 'nutrition_id' => 4, 'jumlah' => 5],
            ['food_id' => 2, 'nutrition_id' => 14, 'jumlah' => 800]
        ]);
    }
}
