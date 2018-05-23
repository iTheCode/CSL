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
Route::get('/logout', array('uses' => 'LoginController@doLogout', 'as' => 'logout'));
Route::post('/', array('uses' => 'LoginController@doLogin'));

//Dashboard Routes
Route::get('/dashboard', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'dashboard', 'uses' => 'DashboardController@showDashboard']);

Route::get('/aplicar_roles', function() { 

	function quitar_tildes($cadena) {
		$no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
		$permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
		$texto = str_replace($no_permitidas, $permitidas ,$cadena);
		return $texto;
	}


	$users = \App\Employee::all(); 
	foreach ($users as $user) {
		$roles = $user->getRoleNames();
		$roles = (count($roles) >= 1) ? $roles[0] : '';
		if(!$user->hasRole($roles)){
			$new_role = quitar_tildes(mb_strtolower($user->area->name));
			$user->assignRole($new_role);
			print $user->name." -> ".$roles."<br>";
		}
	}
	
	//$user->getDirectPermissions(); 
	//$user->getPermissionsViaRoles(); 
});
Route::get('/ver_roles', function() { 

	$users = \App\Employee::all(); 
	foreach ($users as $user) {
		$roles = $user->getRoleNames();
		$roles = (count($roles) >= 1) ? $roles[0] : '';
		print $user->name." -> ".$roles."<br>";
	}
	
	//$user->getDirectPermissions(); 
	//$user->getPermissionsViaRoles(); 
});

//Admision Routes
Route::get('/admision/atenciones', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'atenciones', 'uses' => 'AuthorizationsController@showAuthorizations']);
Route::get('/admision/citas', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'citas', 'uses' => 'AuthorizationsController@showDates']);
Route::get('/admision/horario', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'horario', 'uses' => 'AuthorizationsController@showHourMedic']);
Route::get('/atencion/{input}', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'atencion', 'uses' => 'AuthorizationsController@viewAuthorization']);
Route::get('/admision/crear', ['middleware' => ['auth', 'role:admision|caja|facturacion|administracion|estadistica|sistemas'],  'as' => 'registrar_atencion', 'uses' => 'AuthorizationsController@createAuthorization']);
Route::get('/createAtencion/', ['middleware' => ['auth', 'role:admision|caja|facturacion|administracion|estadistica|sistemas'],  'as' => 'registrar_atencion', 'uses' => 'AuthorizationsController@createAtencion']);
Route::get('/saveAtencion/', ['middleware' => ['auth', 'role:admision|caja|facturacion|administracion|estadistica|sistemas'],  'as' => 'guardar_atencion', 'uses' => 'AuthorizationsController@saveAtencion']);
Route::get('/createDate/', ['middleware' => ['auth', 'role:admision|caja|facturacion|administracion|estadistica|sistemas'],  'as' => 'registrar_atencion_cita', 'uses' => 'AuthorizationsController@createDate']);
Route::get('/deleteDate/', ['middleware' => ['auth', 'role:admision|caja|facturacion|administracion|estadistica|sistemas'],  'as' => 'borrar_atencion_cita', 'uses' => 'AuthorizationsController@deleteDate']);
Route::get('/buscar/{input}', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'atencion', 'uses' => 'AuthorizationsController@findAuthorization']);
Route::get('/admision/reporte', ['middleware' => ['auth', 'role:admision|caja|facturacion|administracion|estadistica|sistemas'],  'as' => 'reporte', 'uses' => 'AuthorizationsController@showReportes']);
Route::get('/atenciones/generar_reporte', ['middleware' => ['auth', 'role:admision|caja|facturacion|administracion|estadistica|sistemas'],  'as' => 'generar_reporte_atenciones', 'uses' => 'AuthorizationsController@export']);




//Pacientes Routes
Route::get('/pacientes/{input?}', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'pacientes', 'uses' => 'PatientsController@showPatients']);
Route::get('/createPatient/', ['middleware' => ['auth', 'role:admision|caja|facturacion|administracion|estadistica|sistemas'],  'as' => 'registrar_paciente', 'uses' => 'PatientsController@createPatient']);
Route::get('/paciente/{input?}', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'view_patient', 'uses' => 'PatientsController@view_patient']);
//Here

//Caja & Servicios Routes
Route::get('/caja/atenciones', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'services', 'uses' => 'ServicesController@showRecents']);
Route::get('/caja/documentos/', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'sunat', 'uses' => 'ServicesController@showDocuments']);
Route::get('/caja/servicio/{input?}', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'addservice', 'uses' => 'ServicesController@addService']);
Route::get('/caja/reporte', ['middleware' => ['auth', 'role:admision|caja|facturacion|administracion|estadistica|sistemas'],  'as' => 'reporte', 'uses' => 'ServicesController@showReportes']);
Route::get('/caja/generar_reporte', ['middleware' => ['auth', 'role:admision|caja|facturacion|administracion|estadistica|sistemas'],  'as' => 'generar_reporte', 'uses' => 'ServicesController@export']);




//Pay Electrnic Documents
Route::get('/pay_edocument/create/{input}', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'createpayedocument', 'uses' => 'EDocumentsController@create_edocument']);
Route::get('/pay_edocument/view/{type}/{input}/print.pdf', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'viewpayedocument', 'uses' => 'EDocumentsController@view_print']);
Route::get('/pay_edocument/charge_document/{type}/{id}', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'payedocument', 'uses' => 'FacturationController@showCharge']);

//Hospitalización Routes
Route::get('/hospitalizacion/habitaciones/', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'centro', 'uses' => 'CentroController@centro']);

//Farmacia Routes
Route::get('/farmacia/atenciones/', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'farmacia', 'uses' => 'PharmacyController@showRecents']);
Route::get('/farmacia/liquidaciones/', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'liquidaciones', 'uses' => 'PharmacyController@showLiquidations']);
Route::get('/farmacia/almacen/', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'almacen', 'uses' => 'PharmacyController@pharmacyStore']);
Route::get('farmacia/liquidacion/{input?}', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'viewsales', 'uses' => 'PharmacyController@showViewSales']);
Route::get('/farmacia/liquidacion/nueva/{input?}', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'sales', 'uses' => 'PharmacyController@showSales']);
Route::get('/farmacia/reportes', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'reportes', 'uses' => 'PharmacyController@addReport']);


//TriajeRoutess/FormularioTri
Route::get('/triaje/atenciones/', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'triaje', 'uses' => 'TriajeController@showAuthorizations']);
Route::get('/triaje/atencion/{input}', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'triaje_form', 'uses' => 'TriajeController@showFormulario']);	

	

//Consulta Externa Routes

Route::get('/consulta_externa/{input?}/{id?}', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'consulta_externa', 'uses' => 'AuthorizationsController@showExtern']);

//Facturacion Routes

Route::get('/facturacion/sunat/', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'sunat', 'uses' => 'FacturationController@showDocuments']);
Route::get('/facturacion/tramas/', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'tramas', 'uses' => 'FacturationController@showTramas']);
Route::get('/facturacion/proveedores/', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'proveedores', 'uses' => 'FacturationController@showProviders']);
Route::get('/facturacion/contabilidad/', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'contabilidad', 'uses' => 'FacturationController@showContabilidad']);

//Administración Routes

Route::get('/administracion/horario/', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'horario', 'uses' => 'AdministrationController@showHourMedic']);

Route::get('/administracion/usuarios/', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'usuarios', 'uses' => 'AdministrationController@showUsers']);

//Casper
Route::get('/administracion/usuarios/create', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'crear_usuarios', 'uses' => 'AdministrationController@createUser']);
Route::get('/administracion/usuarios/edit', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'editar_usuarios', 'uses' => 'AdministrationController@editUser']);
Route::get('/administracion/usuarios/delete', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'borrar_usuarios', 'uses' => 'AdministrationController@deleteUer']);
//Casper

Route::get('/administracion/personal/', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'personal', 'uses' => 'AdministrationController@showPersonal']);
Route::get('/administracion/servicios/', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'servicios', 'uses' => 'AdministrationController@showServices']);
Route::get('/createUser/',['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'], 'as' => 'registrar_usuario', 'uses' => 'AdministrationController@createUser']);



//API Routes
Route::get('/getPatientAPI/{input?}', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'getPatientAPI', 'uses' => 'PatientsController@getPatientAPI']);
Route::get('/getPatientComplete/{input?}', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'getPatientComplete', 'uses' => 'PatientsController@getPatientComplete']);
Route::get('/getPatientJSON/{input?}', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'getPatientAPI', 'uses' => 'PatientsController@getPatientJSON']);
Route::get('/ServiceAPI/{input?}', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'serviceAPI', 'uses' => 'ServicesController@ServicesAPI']);
Route::get('/ServiceFindAPI/{input?}', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'servicefindAPI', 'uses' => 'ServicesController@ServiceAPI']);
Route::get('/getNewPatientAPI/{input?}', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'getNewPatientAPI', 'uses' => 'PatientsController@getNewPatientAPI']);
Route::get('/authorizationsAPI/{input?}', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'authorizationsAPI', 'uses' => 'AuthorizationsController@showAuthorizationsAPI']);
Route::get('/pharmacystoreAPI/{input?}', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'pharmacystoreAPI', 'uses' => 'PharmacyController@pharmacystoreAPI']);
Route::get('/liquidationsAPI/{input?}', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'liquidationsAPI', 'uses' => 'PharmacyController@liquidationsAPI']);
Route::get('/paydocumentsAPI/{input?}', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'paydocumentsAPI', 'uses' => 'FacturationController@showdocumentsAPI']);
Route::get('/servicesAPI/{input?}', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'servicesAPI', 'uses' => 'AdministrationController@servicesAPI']);
Route::get('/personalAPI/{input?}', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'personalAPI', 'uses' => 'AdministrationController@personalAPI']);
Route::get('/usersAPI/{input?}', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'usersAPI', 'uses' => 'AdministrationController@usersAPI']);
Route::get('/externAPI/{input?}', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'externAPI', 'uses' => 'AuthorizationsController@externAPI']);
Route::get('/dniAPI/{input?}', ['as' => 'dniAPI', 'uses' => 'CentroController@dniAPI']);
Route::get('/listDates/', ['middleware' => ['auth', 'role:admision|caja|farmacia|laboratorio|imagenes|facturacion|administracion|estadistica|sistemas'],  'as' => 'listar_citas', 'uses' => 'AuthorizationsController@listDates']);