<?php

namespace App\Http\Controllers;

use Auth;
use \App\Employee as Employee;
use \App\Models\Area as Area;
use \App\Models\Authorization;	
use \App\Models\AuthorizationType;	
use \App\Models\Insurance;	
use \App\Models\Insured;	
use \App\Models\SubCoverageType;	
use \App\Models\Status;	
use \App\Models\Doctor;	
use \App\Models\DiagnosticType;	
use \App\Models\Coverage;	
use \App\Helpers;	
use View;
use Redirect;
use Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Database\Eloquent\Model as Model;

class AuthorizationsController extends BaseController
{

	public function showAuthorizations()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
			$response = Authorization::orderBy('intern_code','desc')->paginate(20);
			//dd(Authorization::orderBy('created_at','desc')->first()->insureds->insurance);
			//return $response;
			$total_pages = ceil($response->total()/20);
			$paginate = Helpers::manual_paginate('atenciones','/atenciones?page='.$response->CurrentPage(), $response->CurrentPage(), $total_pages, 4);
		return view('authorizations', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position, 'users' => $response, 'paginate' => $paginate]);
	}

	public function viewAuthorization($input)
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
			$response = Authorization::find($input);
			$sub_coverage_types = Helpers::get_hash_sub(SubCoverageType::orderBy('name')->get());
			$statuses = Helpers::get_list(Status::all());
			$doctors = Helpers::get_doctors(Doctor::orderBy('complet_name')->get());
			$diagnostic_types = Helpers::get_diagnostic(DiagnosticType::orderby('name')->get());
			$diagnostic_types_codes = Helpers::get_diagnostic_codes(DiagnosticType::orderBy('id')->get());
			if(!isset($response->employee_id)){ $response->employee_id = $user->id; $response->save();}
			//if(is_null($response->employee_id)) { $response->employee_id = $user->id; $response->save();}


			//return $response;
			//return $sub_coverage_types;
		return view('authorization', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position, 'client' => $response, 'sub_coverage_types' => $sub_coverage_types, 'statuses' => $statuses, 'doctors' => $doctors, 'diagnostic_types' => $diagnostic_types, 'diagnostic_types_codes' => $diagnostic_types_codes]);
	}
	public function createAuthorization()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
			$doctors = Helpers::get_doctors(Doctor::orderBy('complet_name')->get());
			$sub_coverage_types = Helpers::get_hash_sub(SubCoverageType::orderBy('name')->get());
			$authorization_types = Helpers::get_list(AuthorizationType::all());
			//dd($response = Authorization::all()->first()->patient);
		return view('createAuthorization', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position, 'sub_coverage_types' => $sub_coverage_types, 'doctors' => $doctors, 'authorization_types' => $authorization_types]);
	}
	public function createSITEDS()
	{

	}

	public function createAtencion(Request $request)
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		}
		$last_intern_code = DB::select("select max(abs(intern_code)) as max from authorizations");
		$a = new Authorization();
		$a->clinic_id = 2;
		$a->money_id = 2;
		$a->authorization_type_id = $request::get('authorization_type_id');
		$a->patient_id = $request::get('id_hidden');
		$a->date = date('Y-m-d H:i:s');
		$a->doctor_id = $request::get('doctor_id');
		$a->intern_code = $last_intern_code[0]->max + 1;
		$a->code = str_pad($a->intern_code, 10, "0",STR_PAD_LEFT);
		$a->employee_id = $user->id;
		if($a->save()){
			$sub_coverage_type = SubCoverageType::find($request::get('sub_coverage_type_id'));
			$c = new Coverage();
			$c->authorization_id = $a->id;
			$c->sub_coverage_type_id = $sub_coverage_type->id;
			$c->name  = $sub_coverage_type->name;
			$c->code = $sub_coverage_type->code;
			$c->cop_fijo = $request::get('cop_fijo');
			$c->cop_var = $request::get('cop_var');
			if($c->save()){
				if(isset($a->insureds))
					$a->insureds->insurance->name;
				if(isset($a->coverage))
					$a->coverage->cop_var;
				return $a;
			}
		}

	}
}