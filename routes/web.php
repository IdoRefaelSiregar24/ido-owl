<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
<<<<<<< HEAD
use App\Http\Controllers\MahasiswaController;
=======
use App\Http\Controllers\PelangganController;
>>>>>>> 55fbaca020afcbed2f914f060b77a59bb83d4d02
use App\Http\Controllers\MatakuliahController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});


Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: ' . $param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: ' . $param1;
});

Route::get('mahasiswa/{param1}', [MahasiswaController::class, 'show'])->name('user.show');
Route::get('mahasiswa/detail/{param1}', [MahasiswaController::class, 'show'])->name('detail.show');


Route::get('/about', function () {
    return view('halaman-about');
});


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('question/store', [QuestionController::class, 'store'])
    ->name('question.store');


// Route untuk login
Route::get('login', [AuthController::class, 'index'])->name('login.show');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');

//Route untuk register
Route::get('register', [AuthController::class, 'showRegister'])->name('register.show');
Route::post('register', [AuthController::class, 'register'])->name('auth.register');

//Route untuk admin
<<<<<<< HEAD
Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

//Route Untuk Pelanggan Controller
Route::resource('pelanggan', PelangganController::class);
=======
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
<<<<<<< HEAD


=======
>>>>>>> 805eeb781ecd533572d49bdc47da9584b04a2228
>>>>>>> 55fbaca020afcbed2f914f060b77a59bb83d4d02
