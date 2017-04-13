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


//Admision Routes
Route::get('/atenciones/', ['middleware' => 'auth',  'as' => 'atenciones', 'uses' => 'AuthorizationsController@showAuthorizations']);
Route::get('/atencion/{input}', ['middleware' => 'auth',  'as' => 'atenciones', 'uses' => 'AuthorizationsController@viewAuthorization']);
Route::get('/registrar_atencion/', ['middleware' => 'auth',  'as' => 'registrar_atencion', 'uses' => 'AuthorizationsController@createAuthorization']);

//Pacientes Routes
Route::get('/pacientes/{input?}', ['middleware' => 'auth',  'as' => 'pacientes', 'uses' => 'PatientsController@showPatients']);
Route::get('/registrar_paciente/', ['middleware' => 'auth',  'as' => 'registrar_paciente', 'uses' => 'PatientsController@createPatient']);

//API Routes
Route::get('/getPatientAPI/{input?}', ['middleware' => 'auth',  'as' => 'getPatientAPI', 'uses' => 'PatientsController@getPatientAPI']);

Route::get('/getNewPatientAPI/{input?}', ['middleware' => 'auth',  'as' => 'getNewPatientAPI', 'uses' => 'PatientsController@getNewPatientAPI']);