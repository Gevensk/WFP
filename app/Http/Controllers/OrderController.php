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

    public function index()
    {
         //left join ambil yg null (No Item)
         // $orders = Order::with(['customer', 'keranjangs.food'])->get();
         // return view('order.index', compact('orders'));
 
         //Eloquent Model
        $orders = Order::with(['customer', 'foods'])->get();
 
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
}
