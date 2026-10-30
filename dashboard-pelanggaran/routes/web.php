<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/profil', [DashboardController::class, 'profil'])->name('profil');

Route::get('/profil-kabupaten', [DashboardController::class, 'profilKabupaten'])->name('profil.kabupaten');

Route::get('/profil-satpol', [DashboardController::class, 'profilSatpol'])->name('profil.satpol');

Route::get('/berita/{id}', [DashboardController::class, 'beritaDetail'])->name('berita.detail');

Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/statistik', [DashboardController::class, 'statistik'])->name('statistik');

Route::get('/peta', [DashboardController::class, 'peta'])->name('peta');

Route::get('/data', [DashboardController::class, 'data'])->name('data');

Route::post('/upload-logo', [DashboardController::class, 'uploadLogo'])->name('upload.logo');
