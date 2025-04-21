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
            ->join('customer as c', 'c.id', '=', 'o.customer_id')
            ->select("c.nama", DB::raw("count(o.id) as jumlah_pesan"))
            ->groupBy("c.nama")
            ->orderBy("jumlah_pesan", "desc")
            ->get();

        return view("reports.totalfood", compact('report'));
    }

    public function index()
    {
        //left join ambil yg null (No Item)
        // $orders = Order::with(['customer', 'keranjangs.food'])->get();
        // return view('order.index', compact('orders'));

        //inner join ambil yg nd null
        $orders = Order::with(['customer', 'keranjangs.food'])
            ->whereHas('keranjangs', function ($query) {
                $query->whereHas('food');
            })
            ->get();

        return view('order.index', compact('orders'));
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
