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
            ],
            [
                'nama' => 'Spring Roll',
                'deskripsi' => 'Spring roll dengan isian sayuran segar, disajikan dengan saus kacang yang lezat.',
                'harga' => 20000,
                'porsi' => 'kecil',
                'berat' => 120,
                'category_id' => 1, // Appetizer
                'image' => 'spring_roll.jpg',
            ],
            [
                'nama' => 'Caesar Salad',
                'deskripsi' => 'Salad segar dengan potongan ayam panggang, selada, keju parmesan, dan saus caesar.',
                'harga' => 25000,
                'porsi' => 'sedang',
                'berat' => 150,
                'category_id' => 1, // Appetizer
                'image' => 'caesar_salad.jpg',
            ],
            [
                'nama' => 'Grilled Salmon with Avocado Salsa',
                'deskripsi' => 'Salmon panggang dengan salsa alpukat segar, disajikan dengan nasi putih atau kentang panggang.',
                'harga' => 55000,
                'porsi' => 'sedang',
                'berat' => 180,
                'category_id' => 2, // Main Course
                'image' => 'grilled_salmon.jpg',
            ],
            [
                'nama' => 'Granola Bar',
                'deskripsi' => 'Bar granola sehat dengan campuran kacang-kacangan, biji-bijian, dan madu.',
                'harga' => 15000,
                'porsi' => 'kecil',
                'berat' => 50,
                'category_id' => 3, // Snacks
                'image' => 'granola_bar.jpg',
            ],
            [
                'nama' => 'Chia Pudding',
                'deskripsi' => 'Pudding chia dengan topping buah segar, sempurna sebagai camilan sehat.',
                'harga' => 20000,
                'porsi' => 'sedang',
                'berat' => 120,
                'category_id' => 3, // Snacks
                'image' => 'chia_pudding.jpg',
            ],
            [
                'nama' => 'Mango Sticky Rice',
                'deskripsi' => 'Ketan manis dengan potongan mangga segar, disajikan dengan santan kental.',
                'harga' => 30000,
                'porsi' => 'sedang',
                'berat' => 200,
                'category_id' => 4, // Dessert
                'image' => 'mango_sticky_rice.jpg',
            ],
            [
                'nama' => 'Avocado Chocolate Mousse',
                'deskripsi' => 'Mousse cokelat lezat dengan campuran alpukat, memberikan rasa creamy yang sehat.',
                'harga' => 35000,
                'porsi' => 'sedang',
                'berat' => 150,
                'category_id' => 4, // Dessert
                'image' => 'avocado_chocolate_mousse.jpg',
            ],
            [
                'nama' => 'Espresso',
                'deskripsi' => 'Kopi hitam pekat dengan rasa yang kuat dan khas.',
                'harga' => 20000,
                'porsi' => 'kecil',
                'berat' => 50,
                'category_id' => 5, // Coffee
                'image' => 'espresso.jpg',
            ],
            [
                'nama' => 'Cappuccino',
                'deskripsi' => 'Kopi espresso dengan busa susu yang lembut, cocok untuk peminum kopi.',
                'harga' => 25000,
                'porsi' => 'sedang',
                'berat' => 150,
                'category_id' => 5, // Coffee
                'image' => 'cappuccino.jpg',
            ],
            [
                'nama' => 'Hot Chocolate',
                'deskripsi' => 'Minuman cokelat hangat yang manis dan lembut, cocok untuk teman santai.',
                'harga' => 25000,
                'porsi' => 'sedang',
                'berat' => 180,
                'category_id' => 6, // Non-Coffee
                'image' => 'hot_chocolate.jpg',
            ],
            [
                'nama' => 'Iced Lemon Tea',
                'deskripsi' => 'Teh lemon dingin yang menyegarkan, cocok untuk cuaca panas.',
                'harga' => 15000,
                'porsi' => 'sedang',
                'berat' => 200,
                'category_id' => 6, // Non-Coffee
                'image' => 'iced_lemon_tea.jpg',
            ],
            [
                'nama' => 'Green Detox Juice',
                'deskripsi' => 'Juice hijau yang terbuat dari campuran sayuran segar seperti bayam, kale, timun, dan seledri, memberikan detox alami bagi tubuh.',
                'harga' => 25000,
                'porsi' => 'sedang',
                'berat' => 300,
                'category_id' => 7, // Healthy Juice
                'image' => 'green_detox_juice.jpg',
            ],
            [
                'nama' => 'Mango Banana Smoothie',
                'deskripsi' => 'Smoothie lezat dengan kombinasi mangga manis dan pisang yang kaya potasium, memberikan energi yang menyegarkan.',
                'harga' => 30000,
                'porsi' => 'sedang',
                'berat' => 250,
                'category_id' => 7, // Healthy Juice
                'image' => 'mango_banana_smoothie.jpg',
            ],
            [
                'nama' => 'Avocado Smoothie',
                'deskripsi' => 'Smoothie creamy dengan alpukat, susu almond, dan sedikit madu, memberikan rasa lezat dan manfaat kesehatan bagi tubuh.',
                'harga' => 35000,
                'porsi' => 'sedang',
                'berat' => 200,
                'category_id' => 7, // Healthy Juice
                'image' => 'avocado_smoothie.jpg',
            ],
        ]);
    }
}
