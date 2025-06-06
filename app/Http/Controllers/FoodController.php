<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Category;
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
        $category = Category::all();
        return view('food.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $food = new Food();
        $food->nama = $request->get('nama');
        $food->deskripsi = $request->get('deskripsi');
        $food->harga = $request->get('harga');
        $food->porsi = $request->get('porsi');
        $food->berat = $request->get('berat');
        $food->category_id = $request->get('category');
        $food->image = $request->get('image');
        $food->save();

        return redirect() -> route('foods.index') -> with('status', 'Penambahan data food berhasil');
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
    public function destroy(Food $food)
    {
        try{
            $food->delete();
            return redirect()->route('foods.index')->with('status', 'Hapus data berhasil');
        }
        catch (\PDOException $ex){
            $msg = "Pastikan tidak ada data Nutrition Facts atau Ingredients yang berelasi sebelum menghapus. Hubungi admin untuk informasi lebih lanjut";

            return redirect()->route('foods.index')->with('status', $msg);
        }
    }
}
