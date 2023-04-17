<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SekolahController;
use GuzzleHttp\Middleware;
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


/**
 * 
 * 
 * LANDING ROUTES
 * 
 */

Route::get('/', function () {
    return view('home');
    // return view('dashboard/new/index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/ppdb', function () {
    return view('ppdb');
});

Route::get('/article', function () {

    return view('article');
});



/**
 * 
 * 
 * END LANDING ROUTES
 * 
 */


/**
 * 
 * 
 * ADMIN ROUTES
 * 
 */


Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});



Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::group(['prefix' => 'sekolah'], function () {
        Route::get('/', [SekolahController::class, 'index']);
        Route::get('/nama', [SekolahController::class, 'namaShow']);
    });
    Route::group(['prefix' => 'jurusan', 'as' => 'jurusan.'], function () {
        Route::get('/', [JurusanController::class, 'index'])->name('index');
        Route::get('/nama', [JurusanController::class, 'create']);
    });
});




/**
 * 
 * 
 * END ADMIN ROUTES
 * 
 */
