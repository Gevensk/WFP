<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'index2'); //Route::view -> langsung return view

Route::get ('/coba', function(){
    return 'Hai GUYS!';
});

Route::get('user/{id}', function($id){ //parameter tidak boleh null
    return 'User ID'.$id;
});

Route::get('username/{name?}', function($name="John Doe"){
    return "My name is ".$name;
})->name('profile');

//cara pemanggilan : $url = route('routename', ['param1' => value1, 'param2' => value2])

Route::get("/nameRoute", function(){
    $url = route("profile", ["name => Vilen"]);
    return $url;
});

// Route::get('/', function(){
//     return view('welcome', ['name' => 'Vilen Alycia Holly', 
//                                         'nrp' => '160422173', 
//                                         'alamat' => 'Jl. Rungkut Mejoyo Utara V blok AF no 15-16']);
// });


//TUGAS

Route::get('/welcome', function(){
    return "Selamat Datang";
});

Route::get('/before_order', function(){
    return "Pilih Dine-In atau Takeaway";
});

Route::get('/menu/{opsi?}', function($opsi="Dine-in"){
    return "Daftar menu ".$opsi;
});

Route::get('/admin/{cat}', function($cat){
    $temp = "";
    if($cat == "categories"){
        $temp = "Daftar Kategori";
    }
    else if($cat == "order"){
        $temp = "Daftar Order";
    }
    else{
        $temp = "Daftar Member";
    }

    return "Portal Manajemen : ".$temp;
});

Route::resource('foods',FoodController::class);
Route::resource('categories',CategoryController::class);

Route::get('/totalFoods', [CategoryController::class, "totalFoods"])->name('totalfood');
Route::get('/activeCustomer',[CategoryController::class,"totalFoods"])->name('activecustomer');

Route::view('index2', 'index2') ->name("home");