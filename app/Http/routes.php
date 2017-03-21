<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Login Routes
Route::get('/', array('uses' => 'LoginController@showLogin', 'as' => 'login'));
Route::post('/', array('uses' => 'LoginController@doLogin'));

//Dashboard Routes
Route::get('/dashboard', ['middleware' => 'auth',  'as' => 'dashboard', 'uses' => 'DashboardController@showDashboard']);

