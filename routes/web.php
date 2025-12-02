<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\MultipleuploadsController;


// Route::get('/', function () {
//     return view('welcome');
// });

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

// Route::get('mata-kuliah', [MatakuliahController::class, 'index'])->name('mata-kuliah.index');
// Route::get('matakuliah/show/{param1?}', [MatakuliahController::class, 'show'])->name('mata-kuliah.show');

//Route untuk admin
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('question/store', [QuestionController::class, 'store'])
    ->name('question.store');




//Route untuk mata register
Route::get('register', [AuthController::class, 'showRegister'])->name('register.show');
Route::post('register', [AuthController::class, 'register'])->name('auth.register');


//Route untuk admin
Route::resource('auth', AuthController::class);
Route::post('login', [AuthController::class, 'login'])->name('auth.login');

//Route untuk register
Route::get('register', [AuthController::class, 'showRegister'])->name('register.show');
// Route::post('register', [AuthController::class, 'register'])->name('auth.register');

//Route Untuk Pelanggan Controller
Route::resource('pelanggan', PelangganController::class);
Route::get('pelanggan/detail/{id}', [PelangganController::class, 'detail'])
    ->name('pelanggan.detail');

// Route Untuk MultipleuploadsController
Route::get('/multipleuploads', [MultipleuploadsController::class, 'index'])->name('uploads');
Route::post('/save', [MultipleuploadsController::class, 'store'])->name('uploads.store');
Route::delete('/uploads/{id}', [MultipleuploadsController::class, 'destroy'])->name('uploads.destroy');



//Route Untuk User Controller
Route::resource('user', UserController::class);

//Route Untuk User Profile
Route::resource('profile', ProfileController::class);
