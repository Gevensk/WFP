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
            ['dinein' => 1, 'metode_payment' => 'qris', 'customers_id'=>1],
            ['dinein' => 0, 'metode_payment' => 'qris', 'customers_id'=>1],
            ['dinein' => 0, 'metode_payment' => 'kredit', 'customers_id'=>1],
            ['dinein' => 1, 'metode_payment' => 'qris', 'customers_id'=>1],
            ['dinein' => 1, 'metode_payment' => 'qris', 'customers_id'=>1],
            ['dinein' => 0, 'metode_payment' => 'qris', 'customers_id'=>1],
            ['dinein' => 1, 'metode_payment' => 'debit', 'customers_id'=>2],
            ['dinein' => 1, 'metode_payment' => 'qris', 'customers_id'=>2],
            ['dinein' => 0, 'metode_payment' => 'qris', 'customers_id'=>2],
            ['dinein' => 0, 'metode_payment' => 'qris', 'customers_id'=>3],
            ['dinein' => 0, 'metode_payment' => 'kredit', 'customers_id'=>4],
            ['dinein' => 1, 'metode_payment' => 'qris', 'customers_id'=>4],
            ['dinein' => 1, 'metode_payment' => 'debit', 'customers_id'=>4],
            ['dinein' => 0, 'metode_payment' => 'qris', 'customers_id'=>4],
            ['dinein' => 0, 'metode_payment' => 'kredit', 'customers_id'=>4],
            ['dinein' => 1, 'metode_payment' => 'qris', 'customers_id'=>4],
            ['dinein' => 0, 'metode_payment' => 'qris', 'customers_id'=>5],
            ['dinein' => 1, 'metode_payment' => 'kredit', 'customers_id'=>5],
            ['dinein' => 0, 'metode_payment' => 'qris', 'customers_id'=>5],
            ['dinein' => 1, 'metode_payment' => 'qris', 'customers_id'=>6],
            ['dinein' => 1, 'metode_payment' => 'debit', 'customers_id'=>6],
            ['dinein' => 1, 'metode_payment' => 'qris', 'customers_id'=>6],
            ['dinein' => 0, 'metode_payment' => 'kredit', 'customers_id'=>6],
            ['dinein' => 1, 'metode_payment' => 'qris', 'customers_id'=>6],
            ['dinein' => 1, 'metode_payment' => 'debit', 'customers_id'=>7],
        ];

        DB::table('orders')->insert($order);
    }
}
