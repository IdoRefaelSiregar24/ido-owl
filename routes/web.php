<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatakuliahController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('login');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});


Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: '.$param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
});

Route::get('mahasiswa/{param1}', [MahasiswaController::class, 'show'])->name('user.show');

Route::get('mahasiswa/detail/{param1}', [MahasiswaController::class, 'show'])->name('detail.show');


Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('mata-kuliah', [MatakuliahController::class, 'index'])->name('mata-kuliah.index');

Route::get('matakuliah/show/{param1?}', [MatakuliahController::class, 'show'])->name('mata-kuliah.show');
