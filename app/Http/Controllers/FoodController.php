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
        $foods = Food::with('category')->get();
        $category = Category::all();

        return view('food.index', compact('foods', 'category'));
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
        $food->category_id = $request->get('category');
        $food->image = $request->get('image');
        $food->nutrition_facts = $request->get('nutrition_facts');
        $food->ingredients = $request->get('ingredients');
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
    public function update(Request $request, Food $food)
    {
        $food->updated_at = now();
        $food->nama = $request->nama;
        $food->deskripsi = $request->deskripsi;
        $food->harga = $request->harga;
        $food->porsi = $request->porsi;
        $food->category_id = $request->category_id;
        $food->image = $request->image;
        $food->save();

        return redirect()->route("foods.index")->with("status", "Update data food berhasil");
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

    public function getEditForm(Request $request)
    {
        $id = $request->id;
        $data = Food::find($id);
        $category = Category::all();
        return response()->json([
            'status' => 'oke',
            'msg' => view('food.getEditForm', compact('data', 'category'))->render()
        ], 200);
    }

    // public function saveDataUpdate(Request $request)
    // {
    //     $id = $request->id;
    //     $data = Food::find($id);
    //     $data->nama = $request->name;
    //     $data->save();
    //     return response()->json(array('status' => 'oke', 'msg' => 'type data is up-to-date !'), 200);
    // }
}
