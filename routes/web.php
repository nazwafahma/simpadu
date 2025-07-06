<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;

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

//Route::get('/', function () {
//return view('dashboard');
//});

Route::get('/', [DashboardController::class, 'index']);
//Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
//Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
//Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('prodi', ProdiController::class);