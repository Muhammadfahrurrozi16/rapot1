<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController; 
use App\Http\Controllers\gurucontrollers; 
use App\Http\Controllers\mapelcontrollers; 
use App\Http\Controllers\tahunajarancontrollers; 
use App\Http\Controllers\nilaicontrollers; 
use App\Http\Controllers\siswacontrollers; 
use App\Http\Controllers\kelascontrollers; 


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/signup', [LoginController::class, 'signup'])->middleware('guest'); 
Route::post('/signup', [LoginController::class, 'register']);
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authentikasi']);
Route::resource('dashboard',gurucontrollers::class);
Route::resource('mapel',mapelcontrollers::class);
Route::resource('tahunajaran',tahunajarancontrollers::class);
Route::resource('nilai',nilaicontrollers::class);
Route::resource('siswa',siswacontrollers::class);
Route::resource('kelas',kelascontrollers::class);
Route::get('/', function () {
    return view('welcome');
});
