<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemenuhanController;
use App\Http\Controllers\ReformController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes for "I. PEMENUHAN"
    Route::prefix('pemenuhan')->group(function () {
        Route::get('/manajemen-perubahan', [PemenuhanController::class, 'manajemenPerubahan'])->name('pemenuhan.manajemen-perubahan');
        Route::get('/penataan-tatalaksana', [PemenuhanController::class, 'penataanTatalaksana'])->name('pemenuhan.penataan-tatalaksana');
        Route::get('/penataan-sdm', [PemenuhanController::class, 'penataanSdm'])->name('pemenuhan.penataan-sdm');
        Route::get('/penguatan-akuntabilitas', [PemenuhanController::class, 'penguatanAkuntabilitas'])->name('pemenuhan.penguatan-akuntabilitas');
        Route::get('/penguatan-pengawasan', [PemenuhanController::class, 'penguatanPengawasan'])->name('pemenuhan.penguatan-pengawasan');
        Route::get('/peningkatan-kualitas-pelayanan', [PemenuhanController::class, 'peningkatanPelayanan'])->name('pemenuhan.peningkatan-pelayanan');
    });

    // Routes for "II. REFORM"
    Route::prefix('reform')->group(function () {
        Route::get('/manajemen-perubahan', [ReformController::class, 'manajemenPerubahan'])->name('reform.manajemen-perubahan');
        Route::get('/penataan-tatalaksana', [ReformController::class, 'penataanTatalaksana'])->name('reform.penataan-tatalaksana');
        Route::get('/penataan-sdm', [ReformController::class, 'penataanSdm'])->name('reform.penataan-sdm');
        Route::get('/penguatan-akuntabilitas', [ReformController::class, 'penguatanAkuntabilitas'])->name('reform.penguatan-akuntabilitas');
        Route::get('/penguatan-pengawasan', [ReformController::class, 'penguatanPengawasan'])->name('reform.penguatan-pengawasan');
        Route::get('/peningkatan-kualitas-pelayanan', [ReformController::class, 'peningkatanPelayanan'])->name('reform.peningkatan-pelayanan');
    });
});



require __DIR__.'/auth.php';

