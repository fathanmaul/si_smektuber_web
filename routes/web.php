<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LandingHomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\PrestasiEkstrakurikulerController;
use App\Http\Controllers\PrestasiJurusanController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\TahunAjaranController;
use App\Models\About;
use Database\Seeders\PpdbRegistration;
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

// Route::get('/', function () {
//     return view('landing.index');
// })->name('landing.index');

// Route::get('/about', function () {
//     return view('landing.about');
// });
// Route::get('/ppdb', function () {
//     return view('landing.ppdb');
// });

// Route::get('/article', function () {
//     return view('landing.article');
// });
// Route::get('/konsultasi', function () {
//     return view('landing.konsultasi');
// });
Route::get('/jurusan', function () {
    return view('landing.detail.jurusan');
});

Route::get('/ekstra', function () {
    return view('landing.detail.ekstra');
});

Route::get('/blog', function () {
    return view('landing.detail.blog');
});

// Route::redirect('/', '/landing');

// Route::group(['prefix' => '/landing', 'as' => 'landing.'], function(){
//     Route::get('/', [LandingHomeController::class, 'index'])->name('index');
//     Route::get('/about', [LandingHomeController::class, 'showAbout'])->name('about');
//     Route::get('/ppdb',[LandingHomeController::class, 'showPpdb'])->name('ppdb');
//     Route::get('/article',[LandingHomeController::class, 'showArticle'])->name('article');
//     Route::get('/konsultasi', [LandingHomeController::class, 'showKonsultasi'])->name('konsultasi');
// });

Route::get('/', [LandingHomeController::class, 'index'])->name('landing.index');
Route::get('/about', [LandingHomeController::class, 'showAbout'])->name('landing.about');
Route::get('/ppdb', [LandingHomeController::class, 'showPpdb'])->name('landing.ppdb');
Route::get('/article', [LandingHomeController::class, 'showArticle'])->name('landing.article');
Route::get('/konsultasi', [LandingHomeController::class, 'showKonsultasi'])->name('landing.konsultasi');
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
    // Route::get('/auth/logout', [LoginController::class, 'moveToDashboard']);
    Route::post('/auth/logout', [LoginController::class, 'destroy'])->name('logout');
});

Route::prefix('admin')->middleware(['middleware' => 'auth'])->middleware(['middleware' => 'admin'])->group(function () {
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
        Route::group(['prefix' => 'tahun-ajaran', 'as' => 'tahun_ajaran.'], function () {
            Route::get('/', [TahunAjaranController::class, 'index'])->name('index');
            Route::get('/tambah', [TahunAjaranController::class, 'create'])->name('create');
            Route::post('/tambah', [TahunAjaranController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [TahunAjaranController::class, 'edit'])->name('edit');
            Route::post('/{id}/edit', [TahunAjaranController::class, 'put'])->name('put');
            Route::delete('/{id}', [TahunAjaranController::class, 'destroy'])->name('destroy');
        });
        Route::group(['prefix' => 'daftar', 'as' => 'daftar.'], function () {
            Route::get('/', [PpdbController::class, 'index'])->name('index');
            Route::get('/tambah', [PpdbController::class, 'create'])->name('create');
            Route::post('/store', [PpdbController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [PpdbController::class, 'edit'])->name('edit');
            Route::put('/{id}/edit', [PpdbController::class, 'put'])->name('put');
            Route::delete('/{id}', [PpdbController::class, 'destroy'])->name('destroy');
            Route::put('/{id}/status', [PpdbController::class, 'status'])->name('status');
            Route::put('/{id}/status/false', [PpdbController::class, 'statusFalse'])->name('status.false');
        });
        Route::group(['prefix' => 'pendaftar', 'as' => 'pendaftar.'], function () {
            Route::get('/', [PendaftarController::class, 'index'])->name('index');
            Route::get('/{id}', [PendaftarController::class, 'show'])->name('show');
            Route::put('/{id}/accept', [PendaftarController::class, 'acceptStatus'])->name('accept-status');
        });
    });

    Route::group(['prefix' => 'artikel', 'as' => 'artikel.'], function () {
        Route::get('/', [ArtikelController::class, 'index'])->name('index');
        Route::get('/{slug}/show', [ArtikelController::class, 'show'])->name('show');
        Route::get('/tambah', [ArtikelController::class, 'create'])->name('create');
        Route::post('/tambah', [ArtikelController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [ArtikelController::class, 'edit'])->name('edit');
        Route::put('/{id}/edit', [ArtikelController::class, 'put'])->name('put');
        Route::delete('/{id}', [ArtikelController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => 'loker', 'as' => 'loker.'], function () {
        Route::get('/', [LokerController::class, 'index'])->name('index');
        Route::get('/tambah', [LokerController::class, 'create'])->name('create');
        Route::post('/tambah', [LokerController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [LokerController::class, 'edit'])->name('edit');
        Route::put('/{id}/edit', [LokerController::class, 'put'])->name('put');
        Route::delete('/{id}', [LokerController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => 'list', 'as' => 'admin.', 'middleware' => 'developer'], function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::get('/tambah', [AdminController::class, 'create'])->name('create');
        Route::post('/tambah', [AdminController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [AdminController::class, 'edit'])->name('edit');
        Route::put('/{id}/edit', [AdminController::class, 'put'])->name('put');
        Route::delete('/{id}', [AdminController::class, 'destroy'])->name('destroy');
    });
});




/**
 * 
 * 
 * END ADMIN ROUTES
 * 
 */
