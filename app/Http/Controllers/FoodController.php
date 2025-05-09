<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use Illuminate\Support\Facades\DB;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // //RAW
        // $foods = DB::select("select * from foods");
        // print_r($foods);exit;

        //Query Builder
        $foods = DB::table("foods")->get();
        $foods = $foods->sortBy('harga');

        //Eloquent Model
        $foods = Food::with(['category', 'ingredients', 'nutritions'])->get();

        // return view('food.index', compact('foods'));

        return view('food.index', ['foods' => $foods]);
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
    public function show($food)
    {
        $current_food = Food::find($food); //mengambil data food sesuai id
        return view("food.show", compact("current_food"));
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
