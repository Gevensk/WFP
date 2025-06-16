<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order = [
            ['id' => 1, 'dinein' => 1, 'metode_payment' => 'qris', 'users_id' => 1, 'status' => 'proses'],
            ['id' => 2, 'dinein' => 0, 'metode_payment' => 'qris', 'users_id' => 1, 'status' => 'proses'],
            ['id' => 3, 'dinein' => 0, 'metode_payment' => 'kredit', 'users_id' => 1, 'status' => 'proses'],
            ['id' => 4, 'dinein' => 1, 'metode_payment' => 'qris', 'users_id' => 1, 'status' => 'selesai'],
            ['id' => 5, 'dinein' => 1, 'metode_payment' => 'qris', 'users_id' => 1, 'status' => 'proses'],
            ['id' => 6, 'dinein' => 0, 'metode_payment' => 'qris', 'users_id' => 1, 'status' => 'selesai'],
            ['id' => 7, 'dinein' => 1, 'metode_payment' => 'debit', 'users_id' => 2, 'status' => 'selesai'],
            ['id' => 8, 'dinein' => 1, 'metode_payment' => 'qris', 'users_id' => 2, 'status' => 'selesai'],
            ['id' => 9, 'dinein' => 0, 'metode_payment' => 'qris', 'users_id' => 2, 'status' => 'proses'],
            ['id' => 10, 'dinein' => 0, 'metode_payment' => 'qris', 'users_id' => 3, 'status' => 'proses'],
            ['id' => 11, 'dinein' => 0, 'metode_payment' => 'kredit', 'users_id' => 4, 'status' => 'selesai'],
            ['id' => 12, 'dinein' => 1, 'metode_payment' => 'qris', 'users_id' => 4, 'status' => 'selesai'],
            ['id' => 13, 'dinein' => 1, 'metode_payment' => 'debit', 'users_id' => 4, 'status' => 'proses'],
            ['id' => 14, 'dinein' => 0, 'metode_payment' => 'qris', 'users_id' => 4, 'status' => 'selesai'],
            ['id' => 15, 'dinein' => 0, 'metode_payment' => 'kredit', 'users_id' => 4, 'status' => 'proses'],
            ['id' => 16, 'dinein' => 1, 'metode_payment' => 'qris', 'users_id' => 4, 'status' => 'selesai'],
            ['id' => 17, 'dinein' => 0, 'metode_payment' => 'qris', 'users_id' => 5, 'status' => 'proses'],
            ['id' => 18, 'dinein' => 1, 'metode_payment' => 'kredit', 'users_id' => 5, 'status' => 'selesai'],
            ['id' => 19, 'dinein' => 0, 'metode_payment' => 'qris', 'users_id' => 5, 'status' => 'selesai'],
            ['id' => 20, 'dinein' => 1, 'metode_payment' => 'qris', 'users_id' => 6, 'status' => 'proses'],
            ['id' => 21, 'dinein' => 1, 'metode_payment' => 'debit', 'users_id' => 6, 'status' => 'proses'],
            ['id' => 22, 'dinein' => 1, 'metode_payment' => 'qris', 'users_id' => 6, 'status' => 'selesai'],
            ['id' => 23, 'dinein' => 0, 'metode_payment' => 'kredit', 'users_id' => 6, 'status' => 'selesai'],
            ['id' => 24, 'dinein' => 1, 'metode_payment' => 'qris', 'users_id' => 6, 'status' => 'selesai'],
            ['id' => 25, 'dinein' => 1, 'metode_payment' => 'debit', 'users_id' => 7, 'status' => 'proses']
        ];

        DB::table('orders')->insert($order);
    }
}
