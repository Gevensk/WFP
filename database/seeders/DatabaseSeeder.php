<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\FoodIngredients;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::factory(10)->create();

        Customer::factory(10)->create();

        $this->call([
            CategorySeeder::class, //kategori ditulis duluan karena merupakan foreign key dari foods
            FoodSeeder::class,
            IngredientsSeeder::class,   
            FoodIngredientsSeeder::class,
            OrderSeeder::class,
            KeranjangSeeder::class,
            CustomerSeeder::class,
            NutritionSeeder::class,
            NutritionFactsSeeder::class,
        ]);
    }
}
