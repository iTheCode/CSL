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
Route::get('/admision/atenciones', ['middleware' => 'auth',  'as' => 'atenciones', 'uses' => 'AuthorizationsController@showAuthorizations']);
Route::get('/atencion/{input}', ['middleware' => 'auth',  'as' => 'atencion', 'uses' => 'AuthorizationsController@viewAuthorization']);
Route::get('/admision/crear', ['middleware' => 'auth',  'as' => 'registrar_atencion', 'uses' => 'AuthorizationsController@createAuthorization']);

Route::get('/createAtencion/', ['middleware' => 'auth',  'as' => 'registrar_atencion_partilar', 'uses' => 'AuthorizationsController@createAtencion']);

//Pacientes Routes
Route::get('/pacientes/{input?}', ['middleware' => 'auth',  'as' => 'pacientes', 'uses' => 'PatientsController@showPatients']);
Route::get('/registrar_paciente/', ['middleware' => 'auth',  'as' => 'registrar_paciente', 'uses' => 'PatientsController@createPatient']);


//Caja & Servicios Routes
Route::get('/caja/atenciones', ['middleware' => 'auth',  'as' => 'services', 'uses' => 'ServicesController@showRecents']);
Route::get('/caja/servicio/{input?}', ['middleware' => 'auth',  'as' => 'addservice', 'uses' => 'ServicesController@addService']);

//Pay Electrnic Documents
Route::get('/pay_edocument/{input}', ['middleware' => 'auth',  'as' => 'payedocument', 'uses' => 'EDocumentsController@view_print']);

//Hospitalización Routes
Route::get('/hospitalizacion/habitaciones/', ['middleware' => 'auth',  'as' => 'centro', 'uses' => 'CentroController@centro']);

//Farmacia Routes
//Route::get('/farmacia/liquidaciones/', ['middleware' => 'auth',  'as' => 'liquidaciones', 'uses' => 'PharmacyController@centro']);
//Route::get('/farmacia/almacen/', ['middleware' => 'auth',  'as' => 'almacen', 'uses' => 'PharmacyController@centro']);
//Route::get('/farmacia/liquidacion/{input?}', ['middleware' => 'auth',  'as' => 'liquidacion', 'uses' => 'PharmacyController@centro']);
//Route::get('/farmacia/liquidacion/nueva/{input?}', ['middleware' => 'auth',  'as' => 'nueva_liquidacion', 'uses' => 'PharmacyController@centro']);

//Facturacion Routes

//Route::get('/facturacion/sunat/', ['middleware' => 'auth',  'as' => 'sunat', 'uses' => 'FacturactionController@centro']);
//Route::get('/facturacion/tramas/', ['middleware' => 'auth',  'as' => 'tramas', 'uses' => 'FacturactionController@centro']);
//Route::get('/facturacion/proveedores/', ['middleware' => 'auth',  'as' => 'proveedores', 'uses' => 'FacturactionController@centro']);
//Route::get('/facturacion/contabilidad/', ['middleware' => 'auth',  'as' => 'contabilidad', 'uses' => 'FacturactionController@centro']);

//Administración Routes

//Route::get('/administracion/horario/', ['middleware' => 'auth',  'as' => 'horario', 'uses' => 'AdministrationController@centro']);
//Route::get('/administracion/usuarios/', ['middleware' => 'auth',  'as' => 'usuarios', 'uses' => 'AdministrationController@centro']);
//Route::get('/administracion/personal/', ['middleware' => 'auth',  'as' => 'personal', 'uses' => 'AdministrationController@centro']);
//Route::get('/administracion/servicios/', ['middleware' => 'auth',  'as' => 'servicios', 'uses' => 'AdministrationController@centro']);


//API Routes
Route::get('/getPatientAPI/{input?}', ['middleware' => 'auth',  'as' => 'getPatientAPI', 'uses' => 'PatientsController@getPatientAPI']);
Route::get('/getPatientJSON/{input?}', ['middleware' => 'auth',  'as' => 'getPatientAPI', 'uses' => 'PatientsController@getPatientJSON']);
Route::get('/ServiceAPI/{input?}', ['middleware' => 'auth',  'as' => 'serviceAPI', 'uses' => 'ServicesController@ServicesAPI']);
Route::get('/ServiceFindAPI/{input?}', ['middleware' => 'auth',  'as' => 'servicefindAPI', 'uses' => 'ServicesController@ServiceAPI']);
Route::get('/getNewPatientAPI/{input?}', ['middleware' => 'auth',  'as' => 'getNewPatientAPI', 'uses' => 'PatientsController@getNewPatientAPI']);
Route::get('/authorizationsAPI/{input?}', ['middleware' => 'auth',  'as' => 'authorizationsAPI', 'uses' => 'AuthorizationsController@showAuthorizationsAPI']);