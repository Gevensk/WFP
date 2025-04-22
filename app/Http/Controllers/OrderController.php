<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function activeMember()
    {
        $report = DB::table('orders as o')
            ->join('customers as c', 'c.id', '=', 'o.customers_id')
            ->select("c.nama", DB::raw("count(o.id) as jumlah_pesan"))
            ->where("o.status", "=", "selesai")
            ->groupBy("c.nama")
            ->orderBy("jumlah_pesan", "desc")
            ->get();

        return view("reports.activecustomer", compact('report'));
    }

    public function terlaris()
    {
        $data = DB::table('foods as f')
            ->join('keranjangs as k', 'f.id', '=', 'k.food_id')
            ->join('orders as o', 'k.order_id', '=', 'o.id')
            ->where('o.status', 'selesai')
            ->select('f.nama', DB::raw('COUNT(o.id) as total'))
            ->groupBy('f.id', 'f.nama')
            ->get();
        return view("reports.terlaris", compact('data'));
    }

    public function payment()
    {
        $data = DB::table('orders as o')
            ->join('keranjangs as k', 'o.id', '=', 'k.order_id')
            ->join('foods as f', 'k.food_id', '=', 'f.id')
            ->where('o.status', 'selesai')
            ->select(
                'o.metode_payment',
                DB::raw('SUM(k.quantity * f.harga) as total_pendapatan'),
                DB::raw('COUNT(DISTINCT o.id) as jumlah_transaksi')
            )
            ->groupBy('o.metode_payment')
            ->get();


        return view("reports.paymentreport", compact('data'));
    }

    public function belumSelesai()
    {
        $data = DB::table('orders as o')
            ->join('customers as c', 'o.customers_id', '=', 'c.id')
            ->join('keranjangs as k', 'o.id', '=', 'k.order_id')
            ->join('foods as f', 'k.food_id', '=', 'f.id')
            ->where('o.status', '!=', 'selesai')
            ->select('o.id as order_id', 'c.nama as customer', 'f.nama as food', 'k.quantity', 'o.status')
            ->orderByDesc('o.id')
            ->get();
        return view("reports.belumselesai", compact('data'));
    }

    public function index()
    {
        //left join ambil yg null (No Item)
        // $orders = Order::with(['customer', 'keranjangs.food'])->get();
        // return view('order.index', compact('orders'));

        //Eloquent Model

        $orders = Order::with(['customer', 'keranjangs.food'])
            ->whereHas('keranjangs') // hanya ambil order yang memiliki keranjang
            ->get();

        return view('order.index', ["orders" => $orders]);



        // $orders = DB::table('orders as o')
        //     ->join('customers as c', 'o.customers_id', '=', 'c.id')
        //     ->join('keranjangs as k', 'o.id', '=', 'k.order_id')
        //     ->join('foods as f', 'k.food_id', '=', 'f.id')
        //     ->select(
        //         'o.id as order_id',
        //         'c.nama as customer_name',
        //         'f.nama as food_name',
        //         DB::raw('SUM(k.quantity) as total_quantity'),
        //         'o.created_at as order_date',
        //         'o.dinein',
        //         'o.metode_payment',
        //         'o.status'
        //     )
        //     ->groupBy(
        //         'o.id',
        //         'c.nama',
        //         'f.nama',
        //         'o.created_at',
        //         'o.dinein',
        //         'o.metode_payment',
        //         'o.status'
        //     )
        //     ->get();
        // return view('order.index', ["orders" => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
