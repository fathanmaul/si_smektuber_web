<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SekolahController;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
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
})->name('landing.index');
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


Route::redirect('/login', '/auth/login');
Route::redirect('/dashboard', '/admin/dashboard');
Route::group(['middleware' => 'guest'], function () {
    Route::get('/auth/login', [LoginController::class, 'create'])->name('login');
    Route::post('/auth/login', [LoginController::class, 'store'])->name('login.store');
});
Route::post('/auth/logout', [LoginController::class, 'destroy'])->name('logout');



Route::prefix('admin')->middleware(['middleware' => 'auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::group(['prefix' => 'sekolah'], function () {
        Route::redirect('/', '/admin/dashboard')->name('sekolah');
        Route::get('/sejarah', [SekolahController::class, 'sejarah'])->name('sekolah.sejarah');
        Route::get('/nama', [SekolahController::class, 'namaShow'])->name('sekolah.nama');
    });
    Route::group(['prefix' => 'jurusan', 'as' => 'jurusan.'], function () {
        Route::get('/', [JurusanController::class, 'index'])->name('index');
        Route::post('/store', function(Request $request){
            $text = $request->textarea1;
            $text = strip_tags($text, '<b><strong><ul><li><em><s><pre><br>');
            // $text = preg_replace('/[^A-Za-z0-9\-]/', '', $text);
            $text = preg_replace('<script>', '', $text);
            $text = preg_replace('</script>', '', $text);
            return $text;
        })->name('store');
        Route::get('/nama', [JurusanController::class, 'create'])->name('jurusan.create');
    });
});

// Route::prefix('admin')->middleware(['middleware' => 'auth'])->group(function(){
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// });




/**
 * 
 * 
 * END ADMIN ROUTES
 * 
 */
