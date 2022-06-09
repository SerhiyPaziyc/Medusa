<?php

use Illuminate\Support\Facades\Route;



//Route::get('/ipad', function () {return view('iPad');})->name('ipad');
//
//Route::get('/applewatch', function () {return view('AppleWatch');})->name('applewatch');
//
//Route::get('/accessory', function () {return view('accessory');})->name('accessory');
//
//Route::get('/appleby', function () {return view('Appleby');})->name('byiphone');

Route::get('/categories/{slug}', [\App\Http\Controllers\CategoryController::class, 'show'])->name('category');

Route::get('/', function () {return view('index');})->name('homepage');

Route::get('/repair', function () {return view('repair');})->name('repair');

Route::get('/buygood', function () {return view('buy_good');})->name('buygood');

Route::get('/buy', function () {return view('buy');})->name('buy');

Route::post('/buy/submit', [\App\Http\Controllers\PurchaseController::class, 'submit'])->name('buy_submit');
Route::post('/repair/submit', [\App\Http\Controllers\ReparationController::class, 'submit', 'checkbox'])->name('repair_submit');
