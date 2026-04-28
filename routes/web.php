<?php

use Illuminate\Support\Facades\Route;

// 1. Ini pintu masuk ke halaman utama (Yang ada tulisan Halo Cantik)
Route::get('/', function () {
    return view('welcome');
});

// 2. Ini pintu masuk ke halaman kejutan bunga
Route::get('/kejutan', function () {
    return view('bunga');
});