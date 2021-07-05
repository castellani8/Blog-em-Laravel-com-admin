<?php

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

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function(){

    // Formulario de login
    Route::get('/', 'AuthController@showLoginForm')->name('login');
    Route::post('login', 'AuthController@login')->name('login.do');

    // Rotas protegidas
    Route::group(['middleware' => ['auth']], function(){

        // Dashboard
        Route::get('home', 'AuthController@home')->name('home');
        
    });
   

    // Logout
    Route::get('logout', 'AuthController@logout')->name('logout');

});

testeando