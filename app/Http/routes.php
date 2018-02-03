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
Route::get('/admision/citas', ['middleware' => 'auth',  'as' => 'citas', 'uses' => 'AuthorizationsController@showDates']);
Route::get('/admision/horario', ['middleware' => 'auth',  'as' => 'horario', 'uses' => 'AuthorizationsController@showHourMedic']);

Route::get('/atencion/{input}', ['middleware' => 'auth',  'as' => 'atencion', 'uses' => 'AuthorizationsController@viewAuthorization']);
Route::get('/admision/crear', ['middleware' => 'auth',  'as' => 'registrar_atencion', 'uses' => 'AuthorizationsController@createAuthorization']);

Route::get('/createAtencion/', ['middleware' => 'auth',  'as' => 'registrar_atencion_particular', 'uses' => 'AuthorizationsController@createAtencion']);


Route::get('/createDate/', ['middleware' => 'auth',  'as' => 'registrar_atencion_cita', 'uses' => 'AuthorizationsController@createDate']);

Route::get('/buscar/{input}', ['middleware' => 'auth',  'as' => 'atencion', 'uses' => 'AuthorizationsController@findAuthorization']);

Route::get('/admision/reporte', ['middleware' => 'auth',  'as' => 'reporte', 'uses' => 'AuthorizationsController@showReportes']);


//Pacientes Routes
Route::get('/pacientes/{input?}', ['middleware' => 'auth',  'as' => 'pacientes', 'uses' => 'PatientsController@showPatients']);
Route::get('/createPatient/', ['middleware' => 'auth',  'as' => 'registrar_paciente', 'uses' => 'PatientsController@createPatient']);
Route::get('/paciente/{input?}', ['middleware' => 'auth',  'as' => 'view_patient', 'uses' => 'PatientsController@view_patient']);


//Caja & Servicios Routes
Route::get('/caja/atenciones', ['middleware' => 'auth',  'as' => 'services', 'uses' => 'ServicesController@showRecents']);
Route::get('/caja/servicio/{input?}', ['middleware' => 'auth',  'as' => 'addservice', 'uses' => 'ServicesController@addService']);
Route::get('/caja/reporte', ['middleware' => 'auth',  'as' => 'reporte', 'uses' => 'ServicesController@showReportes']);




//Pay Electrnic Documents
Route::get('/pay_edocument/create/{input}', ['middleware' => 'auth',  'as' => 'createpayedocument', 'uses' => 'EDocumentsController@create_edocument']);
Route::get('/pay_edocument/view/{type}/{input}', ['middleware' => 'auth',  'as' => 'viewpayedocument', 'uses' => 'EDocumentsController@view_print']);
Route::get('/pay_edocument/charge_document/{type}/{id}', ['middleware' => 'auth',  'as' => 'payedocument', 'uses' => 'FacturationController@showCharge']);

//Hospitalización Routes
Route::get('/hospitalizacion/habitaciones/', ['middleware' => 'auth',  'as' => 'centro', 'uses' => 'CentroController@centro']);

//Farmacia Routes
Route::get('/farmacia/atenciones/', ['middleware' => 'auth',  'as' => 'farmacia', 'uses' => 'PharmacyController@showRecents']);
Route::get('/farmacia/liquidaciones/', ['middleware' => 'auth',  'as' => 'liquidaciones', 'uses' => 'PharmacyController@showLiquidations']);
Route::get('/farmacia/almacen/', ['middleware' => 'auth',  'as' => 'almacen', 'uses' => 'PharmacyController@pharmacyStore']);
Route::get('farmacia/liquidacion/{input?}', ['middleware' => 'auth',  'as' => 'viewsales', 'uses' => 'PharmacyController@showViewSales']);
Route::get('/farmacia/liquidacion/nueva/{input?}', ['middleware' => 'auth',  'as' => 'sales', 'uses' => 'PharmacyController@showSales']);
Route::get('/farmacia/reportes', ['middleware' => 'auth',  'as' => 'reportes', 'uses' => 'PharmacyController@addReport']);


//TriajeRoutess/FormularioTri
Route::get('/triaje/atenciones/', ['middleware' => 'auth',  'as' => 'triaje', 'uses' => 'TriajeController@showAuthorizations']);
Route::get('/triaje/atencion/{input}', ['middleware' => 'auth',  'as' => 'triaje_form', 'uses' => 'TriajeController@showFormulario']);	

//Consulta Externa Routes

Route::get('/consulta_externa/{input?}/{id?}', ['middleware' => 'auth',  'as' => 'consulta_externa', 'uses' => 'AuthorizationsController@showExtern']);

//Facturacion Routes

Route::get('/facturacion/sunat/', ['middleware' => 'auth',  'as' => 'sunat', 'uses' => 'FacturationController@showDocuments']);
Route::get('/facturacion/tramas/', ['middleware' => 'auth',  'as' => 'tramas', 'uses' => 'FacturationController@showTramas']);
Route::get('/facturacion/proveedores/', ['middleware' => 'auth',  'as' => 'proveedores', 'uses' => 'FacturationController@showProviders']);
Route::get('/facturacion/contabilidad/', ['middleware' => 'auth',  'as' => 'contabilidad', 'uses' => 'FacturationController@showContabilidad']);

<<<<<<< HEAD
=======

Route::get('/facturacion/sunat/{type?}/{id?}', ['middleware' => 'auth', 'as' => 'factu', 'uses' => 'FacturationController@showCharge']);

>>>>>>> 239123f99679184c6458690e90a693d8d5a3445c

//Administración Routes

Route::get('/administracion/horario/', ['middleware' => 'auth',  'as' => 'horario', 'uses' => 'AdministrationController@showHourMedic']);
Route::get('/administracion/usuarios/', ['middleware' => 'auth',  'as' => 'usuarios', 'uses' => 'AdministrationController@showUsers']);
Route::get('/administracion/personal/', ['middleware' => 'auth',  'as' => 'personal', 'uses' => 'AdministrationController@showPersonal']);
Route::get('/administracion/servicios/', ['middleware' => 'auth',  'as' => 'servicios', 'uses' => 'AdministrationController@showServices']);


//API Routes
Route::get('/getPatientAPI/{input?}', ['middleware' => 'auth',  'as' => 'getPatientAPI', 'uses' => 'PatientsController@getPatientAPI']);
Route::get('/getPatientComplete/{input?}', ['middleware' => 'auth',  'as' => 'getPatientComplete', 'uses' => 'PatientsController@getPatientComplete']);
Route::get('/getPatientJSON/{input?}', ['middleware' => 'auth',  'as' => 'getPatientAPI', 'uses' => 'PatientsController@getPatientJSON']);
Route::get('/ServiceAPI/{input?}', ['middleware' => 'auth',  'as' => 'serviceAPI', 'uses' => 'ServicesController@ServicesAPI']);
Route::get('/ServiceFindAPI/{input?}', ['middleware' => 'auth',  'as' => 'servicefindAPI', 'uses' => 'ServicesController@ServiceAPI']);
Route::get('/getNewPatientAPI/{input?}', ['middleware' => 'auth',  'as' => 'getNewPatientAPI', 'uses' => 'PatientsController@getNewPatientAPI']);
Route::get('/authorizationsAPI/{input?}', ['middleware' => 'auth',  'as' => 'authorizationsAPI', 'uses' => 'AuthorizationsController@showAuthorizationsAPI']);
Route::get('/pharmacystoreAPI/{input?}', ['middleware' => 'auth',  'as' => 'pharmacystoreAPI', 'uses' => 'PharmacyController@pharmacystoreAPI']);
Route::get('/liquidationsAPI/{input?}', ['middleware' => 'auth',  'as' => 'liquidationsAPI', 'uses' => 'PharmacyController@liquidationsAPI']);
Route::get('/paydocumentsAPI/{input?}', ['middleware' => 'auth',  'as' => 'paydocumentsAPI', 'uses' => 'FacturationController@showdocumentsAPI']);
Route::get('/servicesAPI/{input?}', ['middleware' => 'auth',  'as' => 'servicesAPI', 'uses' => 'AdministrationController@servicesAPI']);
Route::get('/personalAPI/{input?}', ['middleware' => 'auth',  'as' => 'personalAPI', 'uses' => 'AdministrationController@personalAPI']);
Route::get('/usersAPI/{input?}', ['middleware' => 'auth',  'as' => 'usersAPI', 'uses' => 'AdministrationController@usersAPI']);
Route::get('/externAPI/{input?}', ['middleware' => 'auth',  'as' => 'externAPI', 'uses' => 'AuthorizationsController@externAPI']);
Route::get('/dniAPI/{input?}', ['as' => 'dniAPI', 'uses' => 'CentroController@dniAPI']);