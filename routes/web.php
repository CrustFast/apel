<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return view('home');
})->name('home.view');

Route::get('/internal', function () {
    return view('internal');
})->name('internal.view');

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');



