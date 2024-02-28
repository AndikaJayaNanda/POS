<?php

use App\Http\Controllers\BHController;
use App\Http\Controllers\BKController;
use App\Http\Controllers\FBController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HCController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('home')
    ->with('user',' Andika Jaya Nanda');
});
Route::get('/user/{id}/name/{user}', function($id,$user){
    return view('user')
    ->with ('user',$user)
    ->with ('id',$id);
});

Route::get('/penjualan', function() {
    return view('penjualan');
});

Route::get('/produk', function() {
    return view('produk');
});

Route::prefix('category')->group(function() {
    Route::get('/food-beverage',[FoodController::class,'food']);
    Route::get('/beauty-health',[FoodController::class,'beauty']);
    Route::get('/home-care',[FoodController::class,'home']);
    Route::get('/baby-kid',[FoodController::class,'baby']);
});