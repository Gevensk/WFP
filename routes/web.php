<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
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

Route::view('/', 'home');

Route::resource('foods',FoodController::class)->middleware('role:Manager,Employee');
Route::resource('categories',CategoryController::class)->middleware('role:Manager,Employee');
Route::resource('orders', OrderController::class)->middleware('role:Manager,Employee');

Route::get('/totalFoods', [CategoryController::class, "totalFoods"])->name('totalfood')->middleware('role:Manager');
Route::get('/activeCustomer',[OrderController::class,"activeMember"])->name('activecustomer')->middleware('role:Manager');
Route::get('/terlaris',[OrderController::class,"terlaris"])->name('terlaris')->middleware('role:Manager');
Route::get('/paymentreport',[OrderController::class,"payment"])->name('paymentreport')->middleware('role:Manager');
Route::get('/sudahselesai',[OrderController::class,"sudahSelesai"])->name('sudahselesai')->middleware('role:Manager');

Route::post("/order/showactiveuser",[OrderController::class, 'showActiveUser'])->name("order.showactiveuser");
Route::post("/order/showterlaris",[OrderController::class, 'showTerlaris'])->name("order.showterlaris");

Route::post('/ajax/food/getEditForm',[FoodController::class,'getEditForm'])->name('food.getEditForm');
Route::post('/ajax/category/getEditForm',[CategoryController::class,'getEditForm'])->name('category.getEditForm');
Auth::routes();

Route::get('/', [FrontendController::class, 'home'])->name('home');

// home page
Route::get('/', [FrontEndController::class, "home"]);
// see menu details
Route::get('/detail/{food}', [FrontEndController::class, "detail"])->name('detailmenu');
// view all pending reports and a form to submit them
Route::get('/cart', [FrontEndController::class, "cart"])->name('cart');
// add or edit a report for a particular menu 
Route::post('/goto-cart/{food}', [FrontEndController::class, "putCart"])->name("putCart");
// remove a report for a particular menu
Route::delete('/goto-cart/{food}', [FrontEndController::class, "deleteCart"])->name('deleteCart');
// submit all pending reports
Route::post('/submit', [FrontEndController::class, "checkout"])->name('checkout')->middleware('auth');
// order history page
Route::get('/history',[FrontendController::class, "history"])->name('history');