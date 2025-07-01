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
            ['id' => 1,  'dinein' => 0, 'metode_payment' => 'tunai', 'users_id' => 4, 'status' => 'selesai', 'total_order' => 50000],
            ['id' => 2,  'dinein' => 1, 'metode_payment' => 'qris',  'users_id' => 4, 'status' => 'selesai', 'total_order' => 67000],
            ['id' => 3,  'dinein' => 1, 'metode_payment' => 'debit', 'users_id' => 4, 'status' => 'proses',  'total_order' => 30000],
            ['id' => 4,  'dinein' => 0, 'metode_payment' => 'qris',  'users_id' => 4, 'status' => 'selesai', 'total_order' => 42000],
            ['id' => 5,  'dinein' => 0, 'metode_payment' => 'tunai', 'users_id' => 4, 'status' => 'proses',  'total_order' => 35000],
            ['id' => 6,  'dinein' => 1, 'metode_payment' => 'qris',  'users_id' => 4, 'status' => 'selesai', 'total_order' => 78000],
            ['id' => 7,  'dinein' => 0, 'metode_payment' => 'qris',  'users_id' => 5, 'status' => 'proses',  'total_order' => 41000],
            ['id' => 8,  'dinein' => 1, 'metode_payment' => 'tunai', 'users_id' => 5, 'status' => 'selesai', 'total_order' => 55000],
            ['id' => 9,  'dinein' => 0, 'metode_payment' => 'qris',  'users_id' => 5, 'status' => 'selesai', 'total_order' => 69000],
            ['id' => 10, 'dinein' => 1, 'metode_payment' => 'qris',  'users_id' => 6, 'status' => 'proses',  'total_order' => 32000],
            ['id' => 11, 'dinein' => 1, 'metode_payment' => 'debit', 'users_id' => 6, 'status' => 'proses',  'total_order' => 48000],
            ['id' => 12, 'dinein' => 1, 'metode_payment' => 'qris',  'users_id' => 6, 'status' => 'selesai', 'total_order' => 85000],
            ['id' => 13, 'dinein' => 0, 'metode_payment' => 'tunai', 'users_id' => 6, 'status' => 'selesai', 'total_order' => 37000],
            ['id' => 14, 'dinein' => 1, 'metode_payment' => 'qris',  'users_id' => 6, 'status' => 'selesai', 'total_order' => 90000],
            ['id' => 15, 'dinein' => 1, 'metode_payment' => 'debit', 'users_id' => 7, 'status' => 'proses',  'total_order' => 27000],
            ['id' => 16, 'dinein' => 0, 'metode_payment' => 'qris',  'users_id' => 5, 'status' => 'selesai', 'total_order' => 62000],
            ['id' => 17, 'dinein' => 0, 'metode_payment' => 'tunai', 'users_id' => 5, 'status' => 'proses',  'total_order' => 39000],
            ['id' => 18, 'dinein' => 1, 'metode_payment' => 'qris',  'users_id' => 6, 'status' => 'proses',  'total_order' => 41000],
            ['id' => 19, 'dinein' => 1, 'metode_payment' => 'tunai', 'users_id' => 4, 'status' => 'selesai', 'total_order' => 51000],
            ['id' => 20, 'dinein' => 0, 'metode_payment' => 'debit', 'users_id' => 4, 'status' => 'selesai', 'total_order' => 73000],
            ['id' => 21, 'dinein' => 1, 'metode_payment' => 'qris',  'users_id' => 4, 'status' => 'proses',  'total_order' => 46000],
            ['id' => 22, 'dinein' => 0, 'metode_payment' => 'tunai', 'users_id' => 4, 'status' => 'proses',  'total_order' => 58000],
            ['id' => 23, 'dinein' => 1, 'metode_payment' => 'debit', 'users_id' => 5, 'status' => 'selesai', 'total_order' => 67000],
            ['id' => 24, 'dinein' => 0, 'metode_payment' => 'qris',  'users_id' => 6, 'status' => 'selesai', 'total_order' => 72000],
            ['id' => 25, 'dinein' => 1, 'metode_payment' => 'tunai', 'users_id' => 7, 'status' => 'selesai', 'total_order' => 64000],
        ];

        DB::table('orders')->insert($order);
    }
}
