<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\KategoriController;
use Filament\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('home');
})->name('home.view');

Route::get('/internal', function () {
    return view('internal');
})->name('internal.view');


Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');

// Route::match(['get', 'post'], 'admin/login', 'AdminController@login');

// Route::post('/submit-report', [ReportController::class, 'store'])->name('report.store');


