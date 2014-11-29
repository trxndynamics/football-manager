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
Route::get('game/create', 'GameController@create');
Route::post('game/generate', 'GameController@generate');

Route::resource('auth', 'AuthController');
Route::resource('users', 'UsersController');