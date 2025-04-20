<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients = [
            ['nama' => 'Nasi merah'],
            ['nama' => 'Dada ayam fillet'],
            ['nama' => 'Kecap manis'],
            ['nama' => 'Bawang putih'],
            ['nama' => 'Bawang merah'],
            ['nama' => 'Jahe'],
            ['nama' => 'Garam'],
            ['nama' => 'Merica'],
            ['nama' => 'Minyak goreng'],
            ['nama' => 'Air jeruk nipis'],
            ['nama' => 'Daun salam (opsional)'],
        ];

        DB::table('ingredients')->insert($ingredients);
    }
}
