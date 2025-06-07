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
            "category_id" => 1,
            "image" => "https://www.bongscorner.com/wp-content/uploads/2015/02/nasimerah.jpg",
            "ingredients" => "Nasi merah\nAyam fillet\nKecap manis\nBawang putih\nKangkung",
            "nutrition_facts" => "Kalori: 450 kcal\nProtein: 25 g\nLemak: 10 g\nKarbohidrat: 60 g"
        ],
        [
            "nama" => "Strawberry Smoothie Bowl",
            "deskripsi" => "Smoothie bowl menyegarkan berbahan dasar stroberi segar, topping granola, dan biji chia.",
            "harga" => 32000,
            "porsi"=> "sedang",
            "category_id" => 4,
            "image" => "https://foodsharingvegan.com/wp-content/uploads/2022/08/Strawberry-Smoothie-Bowl-Plant-Based-on-a-Budget-1-2.jpg",
            "ingredients" => "Stroberi\nPisang\nGranola\nBiji chia\nYogurt",
            "nutrition_facts" => "Kalori: 300 kcal\nProtein: 8 g\nLemak: 6 g\nKarbohidrat: 50 g"
        ],
        [
            'nama' => 'Spring Roll',
            'deskripsi' => 'Spring roll dengan isian sayuran segar, disajikan dengan saus kacang yang lezat.',
            'harga' => 20000,
            'porsi' => 'kecil',
            'category_id' => 1,
            'image' => 'https://kitchenatics.com/wp-content/uploads/2021/07/Vietnamese-Spring-Rolls-1.jpg',
            "ingredients" => "Kulit lumpia\nWortel\nTimun\nTauge\nSaus kacang",
            "nutrition_facts" => "Kalori: 180 kcal\nProtein: 4 g\nLemak: 7 g\nKarbohidrat: 25 g"
        ],
        [
            'nama' => 'Caesar Salad',
            'deskripsi' => 'Salad segar dengan potongan ayam panggang, selada, keju parmesan, dan saus caesar.',
            'harga' => 25000,
            'porsi' => 'sedang',
            'category_id' => 1,
            'image' => 'https://www.allrecipes.com/thmb/mXZ0Tulwn3x9_YB_ZbkiTveDYFE=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/229063-Classic-Restaurant-Caesar-Salad-ddmfs-4x3-231-89bafa5e54dd4a8c933cf2a5f9f12a6f.jpg',
            "ingredients" => "Selada\nAyam panggang\nCrouton\nKeju parmesan\nSaus caesar",
            "nutrition_facts" => "Kalori: 320 kcal\nProtein: 20 g\nLemak: 18 g\nKarbohidrat: 15 g"
        ],
        [
            'nama' => 'Grilled Salmon with Avocado Salsa',
            'deskripsi' => 'Salmon panggang dengan salsa alpukat segar, disajikan dengan nasi putih atau kentang panggang.',
            'harga' => 55000,
            'porsi' => 'sedang',
            'category_id' => 2,
            'image' => 'https://gimmedelicious.com/wp-content/uploads/2021/09/Grilled-Salmon-with-avocado-Salsa-sq.jpg',
            "ingredients" => "Ikan salmon\nAlpukat\nTomat\nJeruk nipis\nKentang",
            "nutrition_facts" => "Kalori: 480 kcal\nProtein: 30 g\nLemak: 22 g\nKarbohidrat: 30 g"
        ],
        [
            'nama' => 'Granola Bar',
            'deskripsi' => 'Bar granola sehat dengan campuran kacang-kacangan, biji-bijian, dan madu.',
            'harga' => 15000,
            'porsi' => 'kecil',
            'category_id' => 3,
            'image' => 'https://www.eatingbirdfood.com/wp-content/uploads/2024/07/granola-bars-hero.jpg',
            "ingredients" => "Havermut\nKacang almond\nMadu\nBiji bunga matahari\nKismis",
            "nutrition_facts" => "Kalori: 220 kcal\nProtein: 5 g\nLemak: 9 g\nKarbohidrat: 30 g"
        ],
        [
            'nama' => 'Chia Pudding',
            'deskripsi' => 'Pudding chia dengan topping buah segar, sempurna sebagai camilan sehat.',
            'harga' => 20000,
            'porsi' => 'sedang',
            'category_id' => 3,
            'image' => 'https://beginwithbalance.com/wp-content/uploads/2024/04/Protein-Chia-Pudding-134.jpg',
            "ingredients" => "Biji chia\nSusu almond\nMadu\nBuah beri\nVanila",
            "nutrition_facts" => "Kalori: 250 kcal\nProtein: 6 g\nLemak: 10 g\nKarbohidrat: 30 g"
        ],
        [
            'nama' => 'Mango Sticky Rice',
            'deskripsi' => 'Ketan manis dengan potongan mangga segar, disajikan dengan santan kental.',
            'harga' => 30000,
            'porsi' => 'sedang',
            'category_id' => 4,
            'image' => 'https://images.tokopedia.net/img/KRMmCm/2023/10/3/28cac63e-e520-484a-bb6b-bcb6cfe35f8e.jpg',
            "ingredients" => "Beras ketan\nSantan\nGula\nGaram\nMangga",
            "nutrition_facts" => "Kalori: 400 kcal\nProtein: 5 g\nLemak: 15 g\nKarbohidrat: 60 g"
        ],
        [
            'nama' => 'Avocado Chocolate Mousse',
            'deskripsi' => 'Mousse cokelat lezat dengan campuran alpukat, memberikan rasa creamy yang sehat.',
            'harga' => 35000,
            'porsi' => 'sedang',
            'category_id' => 4,
            'image' => 'https://www.wellplated.com/wp-content/uploads/2016/02/Avocado-Chocolate-Mousse-Vegan-and-Low-Carb.jpg',
            "ingredients" => "Alpukat\nCokelat bubuk\nMadu\nVanila\nSusu almond",
            "nutrition_facts" => "Kalori: 350 kcal\nProtein: 6 g\nLemak: 20 g\nKarbohidrat: 30 g"
        ],
        [
            'nama' => 'Espresso',
            'deskripsi' => 'Kopi hitam pekat dengan rasa yang kuat dan khas.',
            'harga' => 20000,
            'porsi' => 'kecil',
            'category_id' => 5,
            'image' => 'https://sumatocoffee.com/cdn/shop/articles/espresso.png?v=1718370919&width=640',
            "ingredients" => "Biji kopi arabika\nAir panas",
            "nutrition_facts" => "Kalori: 5 kcal\nProtein: 0 g\nLemak: 0 g\nKarbohidrat: 1 g"
        ],
        [
            'nama' => 'Cappuccino',
            'deskripsi' => 'Kopi espresso dengan busa susu yang lembut, cocok untuk peminum kopi.',
            'harga' => 25000,
            'porsi' => 'sedang',
            'category_id' => 5,
            'image' => 'https://lorcoffee.com/cdn/shop/articles/Cappuccino-exc.jpg?v=1684870907',
            "ingredients" => "Espresso\nSusu\nBusa susu",
            "nutrition_facts" => "Kalori: 80 kcal\nProtein: 4 g\nLemak: 4 g\nKarbohidrat: 8 g"
        ],
        [
            'nama' => 'Hot Chocolate',
            'deskripsi' => 'Minuman cokelat hangat yang manis dan lembut, cocok untuk teman santai.',
            'harga' => 25000,
            'porsi' => 'sedang',
            'category_id' => 6,
            'image' => 'https://bakerbynature.com/wp-content/uploads/2024/01/Hot-Chocolate-3.jpg',
            "ingredients" => "Cokelat bubuk\nSusu\nGula\nVanila",
            "nutrition_facts" => "Kalori: 150 kcal\nProtein: 5 g\nLemak: 6 g\nKarbohidrat: 20 g"
        ],
        [
            'nama' => 'Iced Lemon Tea',
            'deskripsi' => 'Teh lemon dingin yang menyegarkan, cocok untuk cuaca panas.',
            'harga' => 15000,
            'porsi' => 'sedang',
            'category_id' => 6,
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8yzBdDyaEjdSWplpOmTnzmyU8cZj44F-03A&s',
            "ingredients" => "Teh hitam\nAir\nLemon\nGula\nEs batu",
            "nutrition_facts" => "Kalori: 90 kcal\nProtein: 0 g\nLemak: 0 g\nKarbohidrat: 22 g"
        ],
        [
            'nama' => 'Green Detox Juice',
            'deskripsi' => 'Juice hijau yang terbuat dari campuran sayuran segar seperti bayam, kale, timun, dan seledri, memberikan detox alami bagi tubuh.',
            'harga' => 25000,
            'porsi' => 'sedang',
            'category_id' => 7,
            'image' => 'https://www.acouplecooks.com/wp-content/uploads/2023/01/Detox-Smoothie-007.jpg',
            "ingredients" => "Bayam\nKale\nSeledri\nTimun\nAir lemon",
            "nutrition_facts" => "Kalori: 100 kcal\nProtein: 3 g\nLemak: 1 g\nKarbohidrat: 18 g"
        ],
        [
            'nama' => 'Mango Banana Smoothie',
            'deskripsi' => 'Smoothie lezat dengan kombinasi mangga manis dan pisang yang kaya potasium, memberikan energi yang menyegarkan.',
            'harga' => 30000,
            'porsi' => 'sedang',
            'category_id' => 7,
            'image' => 'https://www.windingcreekranch.org/wp-content/uploads/2023/06/virgin-strawberry-mojito-recipe-in-glasses-1-of-1-1.jpg',
            "ingredients" => "Mangga\nPisang\nSusu\nMadu\nEs batu",
            "nutrition_facts" => "Kalori: 280 kcal\nProtein: 6 g\nLemak: 4 g\nKarbohidrat: 50 g"
        ],
        [
            'nama' => 'Avocado Smoothie',
            'deskripsi' => 'Smoothie creamy dengan alpukat, susu almond, dan sedikit madu, memberikan rasa lezat dan manfaat kesehatan bagi tubuh.',
            'harga' => 35000,
            'porsi' => 'sedang',
            'category_id' => 7,
            'image' => 'https://joyfoodsunshine.com/wp-content/uploads/2022/05/banana-avocado-smoothie-recipe-5.jpg',
            "ingredients" => "Alpukat\nSusu almond\nMadu\nEs batu",
            "nutrition_facts" => "Kalori: 300 kcal\nProtein: 4 g\nLemak: 18 g\nKarbohidrat: 25 g"
        ],]);
    }
}
