<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\KatalogController;
use App\Http\Controllers\Frontend\KatalogController as UserKatalogController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\Admin\PesananController as PesananAdminController;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/katalog', function () {
    return view('home.katalog');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/pesanan', function () {
    return view('admin.pesanan');
})->middleware(['auth', 'verified'])->name('pesanan');


// ✅ Group route admin
Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {

    Route::resource('katalog', KatalogController::class);

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/katalog', [UserKatalogController::class, 'index'])->name('katalog.index');


Route::get('/pesanan/create', [PesananController::class, 'create'])->name('pesanan.create');
Route::post('/pesanan/store', [PesananController::class, 'store'])->name('pesanan.store');


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/pesanan', [PesananAdminController::class, 'index'])->name('pesanan.index');
    Route::put('/pesanan/{id}/status', [PesananAdminController::class, 'updateStatus'])->name('pesanan.updateStatus');
});




require __DIR__.'/auth.php';
