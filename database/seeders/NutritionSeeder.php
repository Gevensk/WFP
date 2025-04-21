<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NutritionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nutritions = [
            ['nama' => 'Kalori', 'satuan' => 'kcal'],
            ['nama' => 'Protein', 'satuan' => 'g'],
            ['nama' => 'Lemak', 'satuan' => 'g'],
            ['nama' => 'Serat', 'satuan' => 'g'],
            ['nama' => 'Gula', 'satuan' => 'g'],
        ];

        DB::table('nutritions')->insert($nutritions);
    }
}
