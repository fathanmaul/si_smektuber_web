<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\SekolahController;
use App\Models\About;
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
Route::get('/konsultasi', function () {
    return view('konsultasi');
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
        Route::get('/visi-misi', [SekolahController::class, 'visiMisi'])->name('sekolah.visi-misi');
        Route::get('/kepala-sekolah', [SekolahController::class, 'kepalaSekolah'])->name('sekolah.kepala-sekolah');
    });
    Route::group(['prefix' => 'jurusan', 'as' => 'jurusan.'], function () {
        Route::get('/', [JurusanController::class, 'index'])->name('index');
        Route::post('/store', function (Request $request) {
            $text = $request->textarea1;
            $text = strip_tags($text, '<b><strong><ul><li><em><s><pre><br>');
            // $text = preg_replace('/[^A-Za-z0-9\-]/', '', $text);
            $text = preg_replace('<script>', '', $text);
            $text = preg_replace('</script>', '', $text);
            return $text;
        })->name('store');
        Route::get('/nama', [JurusanController::class, 'create'])->name('jurusan.create');
    });
    Route::group(['prefix' => 'prestasi'], function () {
        Route::get('/', [PrestasiController::class, 'index'])->name('prestasi.index');
        Route::get('/tambah', [PrestasiController::class, 'create'])->name('prestasi.create');
        Route::post('/store', [PrestasiController::class, 'store'])->name('prestasi.store');
        Route::get('/{id}/edit', [PrestasiController::class, 'edit'])->name('prestasi.edit');
        Route::post('/{id}/edit', [PrestasiController::class, 'put'])->name('prestasi.put');
        Route::delete('/{id}', [PrestasiController::class, 'destroy'])->name('prestasi.destroy');

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