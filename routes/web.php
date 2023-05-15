<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\PrestasiEkstrakurikulerController;
use App\Http\Controllers\PrestasiJurusanController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\TahunAjaranController;
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
    return view('landing.index');
})->name('landing.index');

Route::get('/about', function () {
    return view('landing.about');
});
Route::get('/ppdb', function () {
    return view('landing.ppdb');
});

Route::get('/article', function () {
    return view('landing.article');
});
Route::get('/konsultasi', function () {
    return view('landing.konsultasi');
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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/auth/logout', [LoginController::class, 'moveToDashboard']);
    Route::post('/auth/logout', [LoginController::class, 'destroy'])->name('logout');
});

Route::prefix('admin')->middleware(['middleware' => 'auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::group(['prefix' => 'sekolah'], function () {
        Route::redirect('/', '/admin/dashboard')->name('sekolah');
        Route::group(['prefix' => 'umum'], function () {
            Route::get('/', [SekolahController::class, 'index'])->name('sekolah.umum');
            Route::post('/', [SekolahController::class, 'store'])->name('sekolah.umum.put');
            Route::get('/kontak', [SekolahController::class, 'kontak'])->name('sekolah.kontak');
            Route::post('/kontak', [SekolahController::class, 'kontakPut'])->name('sekolah.kontak.put');
        });
        Route::group(['prefix' => 'visi-misi'], function () {
            Route::get('/', [SekolahController::class, 'visiMisi'])->name('sekolah.visi-misi');
            Route::post('/', [SekolahController::class, 'visiMisiPut'])->name('sekolah.visi-misi.put');
        });
        Route::group(['prefix' => 'kepala-sekolah'], function () {
            Route::get('/', [SekolahController::class, 'kepalaSekolah'])->name('sekolah.kepala-sekolah');
            Route::post('/', [SekolahController::class, 'kepalaSekolahPut'])->name('sekolah.kepala-sekolah.put');
        });
        // Route::get('/prestasi-sekolah', [SekolahController::class, 'prestasiSekolah'])->name('sekolah.prestasi');
        // Route::get('/ekstrakurikuler', [SekolahController::class, 'ekstrakurikuler'])->name('sekolah.ekstrakurikuler');
    });
    Route::group(['prefix' => 'jurusan', 'as' => 'jurusan.'], function () {
        Route::get('/', [JurusanController::class, 'index'])->name('index');
        Route::get('/tambah', [JurusanController::class, 'create'])->name('create');
        Route::post('/tambah', [JurusanController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [JurusanController::class, 'edit'])->name('edit');
        Route::post('/{id}/edit', [JurusanController::class, 'put'])->name('put');
        Route::delete('/{id}', [JurusanController::class, 'destroy'])->name('destroy');

        Route::group(['prefix' => 'prestasi', 'as' => 'prestasi.'], function () {
            Route::get('/', [PrestasiJurusanController::class, 'index'])->name('index');
        });
    });
    // Route::group(['prefix' => 'prestasi'], function () {
    //     Route::get('/', [PrestasiController::class, 'index'])->name('prestasi.index');
    //     Route::get('/tambah', [PrestasiController::class, 'create'])->name('prestasi.create');
    //     Route::post('/store', [PrestasiController::class, 'store'])->name('prestasi.store');
    //     Route::get('/{id}/edit', [PrestasiController::class, 'edit'])->name('prestasi.edit');
    //     Route::post('/{id}/edit', [PrestasiController::class, 'put'])->name('prestasi.put');
    //     Route::delete('/{id}', [PrestasiController::class, 'destroy'])->name('prestasi.destroy');

    // });
    Route::group(['prefix' => 'ekstrakurikuler', 'as' => 'ekstrakurikuler.'], function () {
        Route::get('/', [EkstrakurikulerController::class, 'index'])->name('index');
        Route::get('/tambah', [EkstrakurikulerController::class, 'create'])->name('create');
        Route::post('/tambah', [EkstrakurikulerController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [EkstrakurikulerController::class, 'edit'])->name('edit');
        Route::post('/{id}/edit', [EkstrakurikulerController::class, 'put'])->name('put');
        Route::delete('/{id}', [EkstrakurikulerController::class, 'destroy'])->name('destroy');

        Route::group(['prefix' => 'prestasi', 'as' => 'prestasi.'], function () {
            Route::get('/', [PrestasiEkstrakurikulerController::class, 'index'])->name('index');
        });
    });

    Route::group(['prefix' => 'ppdb', 'as' => 'ppdb.'], function () {
        Route::group(['prefix' => 'tahun-ajaran', 'as' => 'tahun_ajaran.'], function(){
            Route::get('/', [TahunAjaranController::class, 'index'])->name('index');
            Route::get('/tambah', [TahunAjaranController::class, 'create'])->name('create');
            Route::post('/tambah', [TahunAjaranController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [TahunAjaranController::class, 'edit'])->name('edit');
            Route::post('/{id}/edit', [TahunAjaranController::class, 'put'])->name('put');
            Route::delete('/{id}', [TahunAjaranController::class, 'destroy'])->name('destroy');
        });
        Route::group(['prefix' => 'daftar', 'as' => 'daftar.'], function(){
            Route::get('/', [PpdbController::class, 'index'])->name('index');
            Route::get('/tambah', [PpdbController::class, 'create'])->name('create');
        });
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