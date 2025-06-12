<?php

use App\Http\Controllers\TamuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

// ✅ Route untuk hapus hanya pesan
Route::patch('/tamu/hapus-pesan/{id}', [TamuController::class, 'hapusPesan'])->name('tamu.hapusPesan');

// ✅ Route utama resource tamu
Route::resource('tamu', TamuController::class);