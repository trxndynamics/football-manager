<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', 'HomeController@showWelcome');
Route::get('login', 'AuthController@create');
Route::get('logout', 'AuthController@destroy');
Route::get('dashboard', 'DashboardController@index');

Route::group(['prefix'=>'game'], function(){
    Route::get('create', 'GameController@create');
    Route::get('register-manager', 'GameController@registerManager');

    Route::post('create', 'GameController@create');
    Route::post('register-manager', 'GameController@registerManager');
});

Route::resource('auth', 'AuthController');
Route::resource('users', 'UsersController');