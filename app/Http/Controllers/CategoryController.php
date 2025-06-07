<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Food;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function totalFoods()
    {
        $report = Category::withCount('foods')
                    ->with('foods')
                    ->orderByDesc('foods_count')
                    ->get();

        return view("reports.totalfood", compact('report'));
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::with('foods')->get();
        return view('category.index', compact('category'));
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
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/category', $filename);

        $category = new Category;
        $category->nama = $request->nama;
        $category->image = $filename;
        $category->save();

        return redirect()->route('categories.index')->with('status', 'Kategori berhasil ditambahkan');
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
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Jika ada file baru di-upload
        if ($request->hasFile('image')) {
            // Hapus file lama jika ada
            if ($category->image && Storage::exists('public/category/' . $category->image)) {
                Storage::delete('public/category/' . $category->image);
            }

            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/category', $filename);

            $category->image = $filename;
        }

        $category->nama = $request->nama;
        $category->save();

        return redirect()->route("categories.index")->with("status", "Update data kategori berhasil");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try{
            $category->delete();
            return redirect()->route('categories.index')->with('status', 'Hapus data berhasil');
        }
        catch (\PDOException $ex){
            $msg = "Pastikan tidak ada data foods yang berelasi sebelum menghapus. Hubungi admin untuk informasi lebih lanjut";

            return redirect()->route('categories.index')->with('status', $msg);
        }
    }

    public function getEditForm(Request $request)
    {
        $id = $request->id;
        $data = Category::find($id);
        return response()->json(array(
            'status' => 'oke',
            'msg' => view('category.getEditForm', compact('data'))->render()
            ),200);
    }

    // public function saveDataUpdate(Request $request)
    // {
    //     $request->validate([
    //         'id' => 'required|exists:categories,id',
    //         'nama' => 'required|string|max:255|unique:categories,nama,' . $request->id,
    //         'image' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
    //     ]);

    //     $data = Category::findOrFail($request->id);
    //     $data->nama = $request->nama;

    //     if ($request->hasFile('image')) {
    //         if ($data->image && Storage::exists('public/category/' . $data->image)) {
    //             Storage::delete('public/category/' . $data->image);
    //         }

    //         $slugNama = Str::slug($request->nama, '_');
    //         $extension = $request->file('image')->getClientOriginalExtension();
    //         $filename = $slugNama . '.' . $extension;

    //         $request->file('image')->storeAs('public/category', $filename);

    //         $data->image = $filename;
    //     }

    //     $data->save();

    //     return response()->json([
    //         'status' => 'oke',
    //         'msg' => 'Kategori berhasil diperbarui'
    //     ]);
    // }
}
