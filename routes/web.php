<?php

use App\Http\Controllers\pelangganUmumController;
use App\Http\Controllers\pelangganBpjsController;
use App\Http\Controllers\loginController;
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

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::resource('pelangganumum', pelangganUmumController::class);
Route::resource('pelangganbpjs', pelangganBpjsController::class);
Route::resource('login', loginController::class);

