<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Livewire\Eksternal\FormGratifikasi;

// login Page
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

// Main Page
Route::get('/', function () {
    return view('pages.home');
})->name('home.view');

Route::get('/internal', function () {
    return view('pages.internal');
})->name('internal.view');

Route::get('/benturan_kepentingan', function () {
    return view('pages.benturan-kepentingan');
})->name('benturan-kepentingan.view');

Route::get('/external', function () {
    return view('pages.eksternal');
})->name('eksternal.view');

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');

Route::get('/form-gratifikasi', FormGratifikasi::class);
