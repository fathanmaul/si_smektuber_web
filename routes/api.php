<?php

use App\Http\Controllers\Api\Response;
use App\Models\About;
use App\Models\Registration;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('/auth')->group(function () {
    Route::post('/register', 'AuthController@register')->name('api.auth.register');
    Route::post('/login', 'AuthController@login')->name('api.auth.login');

    Route::middleware('api.auth')->group(function () {
        Route::post('/logout', 'AuthController@logout')->name('api.auth.logout');
        Route::post('/refresh', 'AuthController@refresh')->name('api.auth.refresh');
        Route::put('/update-password', 'AuthController@updatePassword')->name('api.auth.reset-password');
    });

    Route::post('/forgot-password', 'AuthController@forgotPassword')->name('api.auth.forgot-password');
    Route::post('/otp', 'AuthController@validateOtp')->name('api.auth.otp');
});

Route::prefix('/article')->middleware('api.auth')->group(function () {
    Route::get('/', 'ArticleController@index')->name('api.article.list');
    Route::get('/{id}', 'ArticleController@show')->name('api.article.detail');
});

Route::prefix('/user')->middleware('api.auth')->group(function () {
    Route::get('/detail', 'UserController@show')->name('api.user.detail');
    Route::put('/update', 'UserController@update')->name('api.user.update');
    Route::post('/avatar', 'UserController@updateAvatar')->name('api.user.update-avatar');
});

// Route::get('/about', fn () => Response::success(About::first()))->middleware('api.auth')->name('api.about');
Route::get('/about','AboutSchoolController@show')->middleware('api.auth')->name('api.about');

Route::prefix('/major')->middleware('api.auth')->group(function () {
    Route::get('/', 'MajorController@getListMajor')->name('api.major.list');
    Route::get('/{id}', 'MajorController@show')->name('api.major.detail');
});

Route::prefix('/jobs')->middleware('api.auth')->group(function () {
    Route::get('/', 'JobController@index')->name('api.job.list');
    Route::get('/{id}', 'JobController@show')->name('api.job.detail');
});

Route::prefix('/extracurricular')->middleware('api.auth')->group(function () {
    Route::get('/', 'ExtraController@index')->name('api.extracurricular.list');
    Route::get('/{id}', 'ExtraController@show')->name('api.extra-urricular.detail');
});

// Route::get('/ppdb', fn () => Response::success(Registration::first()))->middleware('api.auth')->name('ppdb');
Route::get('/ppdb', 'PPDBController@show')->middleware('api.auth')->name('ppdb');
Route::post('/ppdb', 'PPDBController@create')->middleware('api.auth')->name('ppdb.create');
