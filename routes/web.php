<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $productUrl = route('product.view', ['lang'=> 'en', 'id' => 1]);
    dd($productUrl);
    return view('welcome');
});  

Route::view('/about-us', 'about')->name('about');


// Route::get('/product/{id}', function(string $id){
//     return "Works! $id";
// })->whereNumber('id');

// Route::get('/user/{username}', function(string $username){
//     // ...
// })->where('username', '[a-z]+');

Route::get('{lang}/product/{id}', function(string $lang, string $id){
    // ...
})->name("product.view");

Route::get('{lang}/product/{id}', function(string $lang, string $id){
    // ...
})->where(['lang' => '[a-z]{2}', 'id'=> '\d{4,}']);

// Route::get('/search/{search}', function(string $search){
//     return $search;
// })->where('search', '.+');

Route::get("/user/profile", function(){})->name('profile');
Route::get('/current-user', function(){
   // return redirect()->route('profile');
    return to_route('profile');
});
