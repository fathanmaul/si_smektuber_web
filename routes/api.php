<?php

use App\Http\Controllers\Api\Response;
use App\Models\About;
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

// define('NAMESPACE_API', 'App\\Http\\Controllers\\Api\\');

// Route::prefix('/auth')->group(function () {
//     Route::post('/register', NAMESPACE_API . 'AuthController@register')->name('register');
//     Route::post('/login', NAMESPACE_API . 'AuthController@login')->name('login');

//     Route::middleware('api.auth')->group(function () {
//         Route::post('/logout', NAMESPACE_API . 'AuthController@logout')->name('logout');
//         Route::post('/refresh', NAMESPACE_API . 'AuthController@refresh')->name('refresh');
//         Route::put('/update-password', NAMESPACE_API . 'AuthController@updatePassword')->name('reset-password');
//     });

//     Route::post('/forgot-password', NAMESPACE_API . 'AuthController@forgotPassword')->name('forgot-password');
//     Route::post('/otp', NAMESPACE_API . 'AuthController@otp')->name('otp');
// });

// Route::prefix('/article')->middleware('api.auth')->group(function () {
//     Route::get('/', NAMESPACE_API . 'ArticleController@index')->name('article.index');
//     Route::get('/{id}', NAMESPACE_API . 'ArticleController@show')->name('article.show');
// });

// Route::prefix('/user')->middleware('api.auth')->group(function () {
//     Route::get('/detail', NAMESPACE_API . 'UserController@show')->name('user.show');
//     Route::put('/update', NAMESPACE_API . 'UserController@update')->name('user.update');
//     Route::post('/avatar', NAMESPACE_API . 'UserController@updateAvatar')->name('user.update.avatar');
// });

// // Route::get('/about', fn () => Response::success(About::first()))->middleware('api.auth')->name('about');