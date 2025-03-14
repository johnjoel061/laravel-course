<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});  

//Route::view('/about', 'about')->name('about');
// Route::controller(CarController::class)->group(function(){
//     Route::get('/car', 'index');
//     Route::get('/my-cars','myCars');
// });

Route::get('/car', [CarController::class, 'index']);
Route::get('/car/invokable', CarController::class);

Route::resource('/products', ProductController::class)->except(['destroy']);