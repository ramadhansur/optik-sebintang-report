<?php

use App\Http\Controllers\pelangganUmumController;
use App\Http\Controllers\pelangganBpjsController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;

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



//login
Route::get('/', [loginController::class, 'index'])->name('login');
Route::resource('login', loginController::class);
Route::post('/login/loginProses', [loginController::class, 'loginProses'])->name('loginProses');
Route::get('/logout', [loginController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {

    Route::resource('dashboard', dashboardController::class);

    Route::post('/user/update/{id}', [loginController::class, 'update']);

    Route::get('/pelangganumum/delete/{id}', [pelangganUmumController::class, 'destroy']);
    Route::post('/pelangganumum/update/{id}', [pelangganUmumController::class, 'update']);
    Route::resource('pelangganumum', pelangganUmumController::class);

    Route::get('/pelangganbpjs/delete/{id}', [pelangganBpjsController::class, 'destroy']);
    Route::post('/pelangganbpjs/update/{id}', [pelangganBpjsController::class, 'update']);
    Route::resource('pelangganbpjs', pelangganBpjsController::class);

    Route::resource('transaksi', transaksiController::class);

});

