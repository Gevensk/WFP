<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("foods")->insert([
            [
                "name" => "Nasi Merah dengan Ayam Panggang Kecap",
                "description" => "Nikmati hidangan sehat dan lezat dengan Nasi Merah yang kaya serat, dipadukan dengan Ayam Panggang Kecap yang manis gurih dan Tumis Kangkung yang segar. Kombinasi sempurna untuk santapan yang mengenyangkan dan bergizi.",
                "price" => 35000,
                "nutrition_fact" => "Kalori: 400-550 kkal
		                            Protein: 30-40 gram
		                            Lemak: 15-25 gram
		                            Karbohidrat: 50-70 gram
		                            Serat: 5-8 gram",
                "category_id" => 1
            ]
        ]);
    }
}
