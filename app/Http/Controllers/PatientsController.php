<?php

namespace App\Http\Controllers;

use Auth;
use \App\Employee as Employee;
use \App\Models\Area as Area;
use \App\Models\Authorization;	
use \App\Models\Patient;	
use \App\Helpers;	
use View;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Database\Eloquent\Model as Model;

class PatientsController extends BaseController
{

	public function showPatients($input = null)
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}

			($response = Patient::orderBy('id','desc')->paginate(20));

			$total_pages = ceil($response->total()/20);
			$paginate = Helpers::manual_paginate('pacientes','/pacientes?page='.$response->CurrentPage(), $response->CurrentPage(), $total_pages, 4);
			//dd($response = Authorization::all()->first()->patient);
			//return $response;
		return view('patients.patients', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position, 'users' => $response, 'paginate' => $paginate]);
	}
	

	public function createAuthorization()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
			//dd($response = Authorization::all()->first()->patient);
		return view('patients.createPatient', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position]);
	}

	public function getPatientAPI($input = null)
	{
		$response = Patient::where(DB::raw("CONCAT(name, ' ', paternal, ' ', maternal)"), 'like', '%' . $input . '%')->orWhere('document_identity_code', $input)->limit(5)->get();

		
		return view('api.patientsAPI', ['users' => $response]);
	}
	public function view_patient($input)
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
		$response = Patient::find($input);

		if(isset($response->authorizations))
			$response->authorizations;
		return view('patients.view_patient', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position, 'patient' => $response]);
	}

	public function getPatientJSON($input)
	{
		$response = Patient::find($input);
		if(isset($response->insureds))
			$response->insureds->insurance->name;

		return $response;
	}

	public function getNewPatientAPI($input){

		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
		$response = Patient::Where('document_identity_code', $input)->limit(5)->get();
		if(empty(json_decode($response, true))){
			$json_data = Helpers::get_dni($input);
			if(!empty(json_decode($json_data, true))){
				$json_data = json_decode($json_data);
				$last_clinic_history = DB::select("select max(abs(clinic_history_code)) as max from patients");
				$p = new Patient();
				$p->document_identity_type_id = 1;
				$p->document_identity_code = $input;
				$p->name = $json_data->name;
				$p->paternal = $json_data->paternal;
				$p->maternal = $json_data->maternal;
				$p->employee_id = $user->id;
				$p->is_insured  = null;
				$p->clinic_history_code = $last_clinic_history[0]->max + 1;
				if($p->save()) {
				        $response = Patient::Where('document_identity_code', $input)->limit(5)->get();
				}else{
						$response['error'] = "No se ha creado el paciente";
				}
			}
		}
		return view('api.patientsAPI', ['users' => $response]);

	}
}