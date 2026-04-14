<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\GoogleAuthController;

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();
Route::get('/auth/google', [GoogleAuthController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleAuthController::class, 'handleGoogleCallback']);
Route::get('/otp', [GoogleAuthController::class, 'showOtp'])->name('otp.index');
Route::post('/otp/verify', [GoogleAuthController::class, 'verifyOtp'])->name('otp.verify');

Route::middleware(['auth', 'check.session'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('kategori', KategoriController::class);
    Route::resource('buku', BukuController::class);
    Route::get('/pdf/sertifikat', [App\Http\Controllers\PdfController::class, 'sertifikat'])->name('pdf.sertifikat');
    Route::get('/pdf/undangan', [App\Http\Controllers\PdfController::class, 'undangan'])->name('pdf.undangan');
});
