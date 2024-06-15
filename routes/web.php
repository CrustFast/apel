<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return view('pages.home');
})->name('home.view');

Route::get('/internal', function () {
    return view('pages.internal');
})->name('internal.view');

Route::get('/external', function () {
    return view('pages.eksternal');
})->name('eksternal.view');

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');



