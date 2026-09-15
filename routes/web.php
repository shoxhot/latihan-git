<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//rute baru yh
Route::get('/artikel-tesdulu', function () {
    return view('haloo haloo');
});
