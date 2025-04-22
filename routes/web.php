<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\OrderController;

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

// Route::get('/', function () {n
//     return view('welcome');
// });

Route::get('/', [FoodController::class, 'index']);

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
Route::resource('orders', OrderController::class);

Route::get('/totalFoods', [CategoryController::class, "totalFoods"])->name('totalfood');
Route::get('/activeCustomer',[OrderController::class,"activeMember"])->name('activecustomer');
Route::get('/terlaris',[OrderController::class,"terlaris"])->name('terlaris');
Route::get('/paymentreport',[OrderController::class,"payment"])->name('paymentreport');
Route::get('/belumselesai',[OrderController::class,"belumSelesai"])->name('belumselesai');

Route::view('index2', 'index2') ->name("home");

Route::post("/order/showactiveuser",[OrderController::class, 'showActiveUser'])->name("order.showactiveuser");
Route::post("/order/showterlaris",[OrderController::class, 'showTerlaris'])->name("order.showterlaris");