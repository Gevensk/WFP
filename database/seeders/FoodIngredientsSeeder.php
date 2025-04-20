<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodIngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients = [
            ['food_id' => 1, 'ingredient_id'=>1],
            ['food_id' => 1, 'ingredient_id'=>2],
            ['food_id' => 1, 'ingredient_id'=>3],
            ['food_id' => 1, 'ingredient_id'=>4],
            ['food_id' => 1, 'ingredient_id'=>5],
            ['food_id' => 1, 'ingredient_id'=>6],
            ['food_id' => 1, 'ingredient_id'=>7],
            ['food_id' => 1, 'ingredient_id'=>8],
            ['food_id' => 1, 'ingredient_id'=>9],
            ['food_id' => 1, 'ingredient_id'=>10],
            ['food_id' => 1, 'ingredient_id'=>11]
        ];

        DB::table('food_ingredients')->insert($ingredients);
    }
}
