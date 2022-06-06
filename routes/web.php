<?php

use Illuminate\Support\Facades\Route;



//Route::get('/ipad', function () {
//    return view('iPad');
//});
//
//Route::get('/applewatch', function () {
//    return view('AppleWatch');
//});
//
//Route::get('/accessory', function () {
//    return view('accessory');
//});
//
//Route::get('/appleby', function () {
//    return view('Appleby');
//});
///

Route::get('/categories/{slug}', [\App\Http\Controllers\CategoryController::class, 'show'])->name('category');

Route::get('/', function () {
    return view('index');
})->name('homepage');

Route::get('/repair', function () {
    return view('repair');
})->name('repair');

Route::get('/buygood', function () {
    return view('buy_good');
})->name('buygood');

Route::get('/buy', function () {
    return view('buy');
})->name('buy');

Route::post('/buy/submit', [\App\Http\Controllers\PurchaseController::class, 'submit'])->name('buy_submit');
