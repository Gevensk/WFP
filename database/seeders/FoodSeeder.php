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
                "nama" => "Nasi Merah dengan Ayam Panggang Kecap",
                "deskripsi" => "Nikmati hidangan sehat dan lezat dengan Nasi Merah yang kaya serat, dipadukan dengan Ayam Panggang Kecap yang manis gurih dan Tumis Kangkung yang segar. Kombinasi sempurna untuk santapan yang mengenyangkan dan bergizi.",
                "harga" => 35000,
                "porsi"=> "sedang",
                "berat"=>90,
                "category_id" => 1,
                "image" => "nasimerahayampanggangkecap.jpg"
            ],
            [
                "nama" => "Strawberry Smoothie Bowl",
                "deskripsi" => "Nikmati hidangan sehat dan lezat dengan Nasi Merah yang kaya serat, dipadukan dengan Ayam Panggang Kecap yang manis gurih dan Tumis Kangkung yang segar. Kombinasi sempurna untuk santapan yang mengenyangkan dan bergizi.",
                "harga" => 32000,
                "porsi"=> "sedang",
                "berat"=>80,
                "category_id" => 4,
                "image" => "sbsmoothiebowl.jpg"
            ]
        ]);
    }
}
