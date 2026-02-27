<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

// Halaman utama langsung redirect ke index siswa
Route::get('/', function () {
    return redirect()->route('siswa.index');
});

// Resource route CRUD siswa
Route::resource('siswa', SiswaController::class);