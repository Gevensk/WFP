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
            ['dinein' => 1, 'metode_payment' => 'qris', 'customers_id'=>1, 'status' => 'proses'],
            ['dinein' => 0, 'metode_payment' => 'qris', 'customers_id'=>1, 'status' => 'proses'],
            ['dinein' => 0, 'metode_payment' => 'kredit', 'customers_id'=>1, 'status' => 'proses'],
            ['dinein' => 1, 'metode_payment' => 'qris', 'customers_id'=>1, 'status' => 'selesai'],
            ['dinein' => 1, 'metode_payment' => 'qris', 'customers_id'=>1, 'status' => 'proses'],
            ['dinein' => 0, 'metode_payment' => 'qris', 'customers_id'=>1, 'status' => 'selesai'],
            ['dinein' => 1, 'metode_payment' => 'debit', 'customers_id'=>2, 'status' => 'selesai'],
            ['dinein' => 1, 'metode_payment' => 'qris', 'customers_id'=>2, 'status' => 'selesai'],
            ['dinein' => 0, 'metode_payment' => 'qris', 'customers_id'=>2, 'status' => 'proses'],
            ['dinein' => 0, 'metode_payment' => 'qris', 'customers_id'=>3, 'status' => 'proses'],
            ['dinein' => 0, 'metode_payment' => 'kredit', 'customers_id'=>4, 'status' => 'selesai'],
            ['dinein' => 1, 'metode_payment' => 'qris', 'customers_id'=>4, 'status' => 'selesai'],
            ['dinein' => 1, 'metode_payment' => 'debit', 'customers_id'=>4, 'status' => 'proses'],
            ['dinein' => 0, 'metode_payment' => 'qris', 'customers_id'=>4, 'status' => 'selesai'],
            ['dinein' => 0, 'metode_payment' => 'kredit', 'customers_id'=>4, 'status' => 'proses'],
            ['dinein' => 1, 'metode_payment' => 'qris', 'customers_id'=>4, 'status' => 'selesai'],
            ['dinein' => 0, 'metode_payment' => 'qris', 'customers_id'=>5, 'status' => 'proses'],
            ['dinein' => 1, 'metode_payment' => 'kredit', 'customers_id'=>5, 'status' => 'selesai'],
            ['dinein' => 0, 'metode_payment' => 'qris', 'customers_id'=>5, 'status' => 'selesai'],
            ['dinein' => 1, 'metode_payment' => 'qris', 'customers_id'=>6, 'status' => 'proses'],
            ['dinein' => 1, 'metode_payment' => 'debit', 'customers_id'=>6, 'status' => 'proses'],
            ['dinein' => 1, 'metode_payment' => 'qris', 'customers_id'=>6, 'status' => 'selesai'],
            ['dinein' => 0, 'metode_payment' => 'kredit', 'customers_id'=>6, 'status' => 'selesai'],
            ['dinein' => 1, 'metode_payment' => 'qris', 'customers_id'=>6, 'status' => 'selesai'],
            ['dinein' => 1, 'metode_payment' => 'debit', 'customers_id'=>7, 'status' => 'proses'],
        ];

        DB::table('orders')->insert($order);
    }
}
