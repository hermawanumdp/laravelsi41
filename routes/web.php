<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;

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

// Route::get('/fakultas', function () {
//     $kampus ="Universitas Multi Data Palembang";
//     $fakultas= ["Fakultas Ilkom","Fakultas Ilmu Ekonomi"];

//     //return compact('fakultas','kampus');
//     return view('fakultas.index',compact('fakultas','kampus'));
// });

Route::get('/fakultas',[ProdiController::class,'index']);

Route::get('/mahasiswa/insert', [MahasiswaController::class,'insert']);
Route::get('/mahasiswa/update', [MahasiswaController::class,'update']);
Route::get('/mahasiswa/delete', [MahasiswaController::class,'delete']);
Route::get('/mahasiswa/select', [MahasiswaController::class,'select']);

Route::get('/mahasiswa/insert-qb', [MahasiswaController::class,'insertQb']);
Route::get('/mahasiswa/update-qb', [MahasiswaController::class,'updateQb']);
Route::get('/mahasiswa/delete-qb', [MahasiswaController::class,'deleteQb']);
Route::get('/mahasiswa/select-qb', [MahasiswaController::class,'selectQB']);
