<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\KatalogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/katalog', function () {
    return view('admin.katalog');
})->middleware(['auth', 'verified'])->name('katalog');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('katalog', KatalogController::class);
});



require __DIR__.'/auth.php';
