<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\KatalogController;
use App\Http\Controllers\Frontend\KatalogController as UserKatalogController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\Admin\PesananController as PesananAdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\PaymentController;

Route::get('/', fn() => view('home.index'));
Route::get('/aboutUs', fn() => view('home.aboutUs'));
Route::get('/contact', fn() => view('home.contact'));
Route::get('/katalog', [UserKatalogController::class, 'index'])->name('katalog.index');

// ✅ Admin area
Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // Katalog
    Route::resource('katalog', KatalogController::class);

    // Pesanan
    Route::get('/pesanan', [PesananAdminController::class, 'index'])->name('pesanan.index');
    Route::put('/pesanan/{id}/status', [PesananAdminController::class, 'updateStatus'])->name('pesanan.updateStatus');
    Route::get('/pesanan/export', [PesananAdminController::class, 'exportCsv'])->name('pesanan.export');
});

// ✅ Pesanan (Frontend)
Route::get('/pesanan/create', [PesananController::class, 'create'])->name('pesanan.create');
Route::post('/pesanan/store', [PesananController::class, 'store'])->name('pesanan.store');

// ✅ Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/export-katalog', function () {
    $data = \App\Models\Katalog::all();

    file_put_contents(
        base_path('database/seeders/katalog.json'),
        $data->toJson(JSON_PRETTY_PRINT)
    );

    return "Data katalog berhasil diexport!";
});


Route::post('/checkout', [PaymentController::class, 'checkout'])->name('checkout');




require __DIR__.'/auth.php';
