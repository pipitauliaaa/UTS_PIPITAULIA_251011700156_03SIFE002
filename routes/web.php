<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BikeController;

Route::get('/', function () {
    return view('page.home');
});

Route::get('/kontak', function () {
    return view('page.kontak');
})->name('kontak');

Route::get('/about', function () {
    return view('page.about');
});

// Ubah '/bike' menjadi '/bikes'
Route::get('/bike', [BikeController::class, 'index'])->name('bike.index');
Route::get('/bike/{id}', [BikeController::class, 'show'])->name('bike.show');