<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeranjangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Array yang berisi ID makanan dari tabel foods
        $foods = [1, 2];

        // Array yang berisi ID orders dari tabel orders
        $orders = [
            1,
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9,
            10,
            11,
            12,
            13,
            14,
            15,
            16,
            17,
            18,
            19,
            20,
            21,
            22,
            23,
            24,
            25
        ];

        // Menambahkan 20 data ke dalam keranjang
        for ($i = 0; $i < 20; $i++) {
            DB::table('keranjangs')->insert([
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'food_id' => $foods[array_rand($foods)],  
                'order_id' => $orders[array_rand($orders)], 
                'quantity' => rand(1, 5), 
                'note' => 'Catatan untuk pesanan',
            ]);
        }
    }
}
