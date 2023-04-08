<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SekolahController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
// Route::get('/sekolah', [SekolahController::class, 'index']);

Route::group(['prefix' => 'sekolah'], function () {
    Route::get('/', [SekolahController::class, 'index']);
    Route::get('/nama', [SekolahController::class, 'namaShow']);
});