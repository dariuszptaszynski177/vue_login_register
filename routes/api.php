<?php

use Illuminate\Http\Request;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/')->name('main-page');

Route::get('/users', 'App\Http\Controllers\UserController@users')->name('users-page');

Route::get('/user/{id}', 'App\Http\Controllers\UserController@user')->name('user-page');

Route::post('/login', 'App\Http\Controllers\Api\LoginController@login')->name('login');
Route::post('/register', 'App\Http\Controllers\Api\RegisterController@register')->name('register');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/user/get-logged-user', 'App\Http\Controllers\Api\UserController@getLoggedUser');
Route::get('/home', 'App\Http\Controllers\Api\HomeController@home')->name('home');
});


