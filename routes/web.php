<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/repair', function () {
    return view('repair');
});

Route::get('/ipad', function () {
    return view('iPad');
});

Route::get('/buygood', function () {
    return view('buy_good');
});

Route::get('/buy', function () {
    return view('Buy');
});

Route::get('/applewatch', function () {
    return view('AppleWatch');
});

Route::get('/accessory', function () {
    return view('accessory');
});

Route::get('/appleby', function () {
    return view('Appleby');
});
