<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [LaporanController::class, 'form'])
    ->name('lapor.form');

Route::post('/lapor', [LaporanController::class, 'simpan'])
    ->name('lapor.store');

Route::get('/konfirmasi', function () {
    return redirect()->route('lapor.form');
});

Route::get('/laporan', [LaporanController::class, 'laporan'])
    ->name('laporan.index');
