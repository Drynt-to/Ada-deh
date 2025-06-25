<?php

use Illuminate\Support\Facades\Route;

// Rute untuk halaman utama (Portfolio Desain)
Route::get('/', function () {
    return view('design');
});

// Rute untuk halaman fotografi
Route::get('/photography', function () {
    return view('photography');
});
