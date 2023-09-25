<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\KasusController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KasusDiagnosaController;

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

Route::resource('user', UserController::class)->middleware('admin');
Route::resource('kasus', KasusController::class)->middleware('auth');
Route::resource('gejala', GejalaController::class)->middleware('auth');
Route::resource('penyakit', PenyakitController::class)->middleware('auth');
Route::resource('dashboard', DashboardController::class)->middleware('auth');
Route::resource('diagnosa', KasusDiagnosaController::class)->middleware('auth');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [LoginController::class, 'register'])->name('register')->middleware('guest');
Route::post('auth/register', [LoginController::class, 'registerPost'])->name('register.post')->middleware('guest');
Route::get('home', [LoginController::class, 'index'])->name('home')->middleware('guest');
Route::post('auth/login', [LoginController::class, 'loginPost'])->name('login.post')->middleware('guest');

Route::get('/',[DiagnosaController::class, 'index'])->middleware('guest');
Route::get('informasi', [DiagnosaController::class, 'informasi'])->name('informasi')->middleware('guest');
Route::get('konsultasi', [DiagnosaController::class, 'konsultasi'])->name('konsultasi')->middleware('guest');
Route::post('diagnosa', [DiagnosaController::class, 'konsultasiPost'])->name('diagnosa.post')->middleware('guest');

Route::get('list-gejala/{id}',[KasusController::class, 'listGejala'])->name('list_gejala')->middleware('auth');
Route::get('list-selected-gejala/{id}',[KasusController::class, 'listSelectedGejala'])->name('list_selected_gejala')->middleware('auth');
Route::delete('delete-all-gejala/{kode}',[KasusController::class, 'destroyAll'])->name('deleted_kasus_all')->middleware('auth');

Route::get('/welcome', function () {
    return view('welcome');
});
