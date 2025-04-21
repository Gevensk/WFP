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
        DB::table('nutritions')->insert([
            ['nama' => 'Energi', 'satuan' => 'kcal'],
            ['nama' => 'Protein', 'satuan' => 'gram'],
            ['nama' => 'Lemak', 'satuan' => 'gram'],
            ['nama' => 'Serat pangan', 'satuan' => 'gram'],
            ['nama' => 'Kolesterol', 'satuan' => 'mg'],
            ['nama' => 'Natrium (Sodium)', 'satuan' => 'mg'],
            ['nama' => 'Kalium', 'satuan' => 'mg'],
            ['nama' => 'Zat besi', 'satuan' => 'mg'],
            ['nama' => 'Vitamin B6', 'satuan' => 'mg'],
            ['nama' => 'Gula', 'satuan' => 'gram'],
            ['nama' => 'Karbohidrat', 'satuan' => 'gram'],
            ['nama' => 'Vitamin C', 'satuan' => 'mg'],
            ['nama' => 'Kalsium', 'satuan' => 'mg'],
            ['nama' => 'Vitamin A', 'satuan' => 'IU'],
            ['nama' => 'Magnesium', 'satuan' => 'mg'],
            ['nama' => 'Antioksidan (antocyanin)', 'satuan' => 'mg']
        ]);
    }
}
