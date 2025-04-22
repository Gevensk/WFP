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

        $orders = Order::with(['customer', 'foods'])
            ->whereHas('keranjangs')
            ->get();

        return view('order.index', ["orders" => $orders]);

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

    public function showActiveUser()
    {
        $highest = DB::table('orders as o')
            ->join('customers as c', 'c.id', '=', 'o.customers_id')
            ->select("c.nama", DB::raw("count(o.id) as jumlah_pesan"))
            ->where("o.status", "=", "selesai")
            ->groupBy("c.nama")
            ->orderBy("jumlah_pesan", "desc")
            ->first();

        return response()->json(array(
            'status' => 'oke',
            'msg' => "<div class='alert alert-info'>
                        Customer ter-aktif adalah <b>".$highest->nama."</b></div>"
        ), 200);
    }

    public function showTerlaris()
    {
        $terlaris = DB::table('foods as f')
            ->join('keranjangs as k', 'f.id', '=', 'k.food_id')
            ->join('orders as o', 'k.order_id', '=', 'o.id')
            ->where('o.status', 'selesai')
            ->select('f.nama', DB::raw('COUNT(o.id) as total'))
            ->groupBy('f.id', 'f.nama')
            ->first();

        return response()->json(array(
            'status' => 'oke',
            'msg' => "<div class='alert alert-info'>
                        Menu terlaris adalah <b>".$terlaris->nama."</b></div>"
        ),200); 
    }
}
