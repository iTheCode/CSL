<?php

namespace App\Http\Controllers;

use Auth;
use \App\Employee as Employee;
use \App\Models\Area as Area;
use \App\Models\Authorization;	
use \App\Models\Insurance;	
use \App\Models\Insured;	
use \App\Models\SubCoverageType;	
use \App\Models\Status;	
use \App\Models\Doctor;	
use \App\Models\DiagnosticType;	
use \App\Models\ClinicArea;	
use \App\Models\Service;	
use \App\Models\ServiceExented;	
use \App\Helpers;	
use View;
use Redirect;
use Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Database\Eloquent\Model as Model;

class ServicesController extends BaseController
{

	public function showRecents()
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
		return view('servicesRecents', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position, 'users' => $response, 'paginate' => $paginate]);
	}

	public function addService($input)
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
			$areas = Helpers::get_list(ClinicArea::all());
			$services = Helpers::get_list(Service::all());
			$codes = Helpers::get_codes(Service::all());
			$service_exented = Helpers::get_list(ServiceExented::all());
			date_default_timezone_set('America/Lima');
			$date = date("F j, Y, g:i a");
			//if(is_null($response->employee_id)) { $response->employee_id = $user->id; $response->save();}
			//return $sub_coverage_types;
		return view('addService', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position, 'client' => $response, 'sub_coverage_types' => $sub_coverage_types, 'statuses' => $statuses, 'doctors' => $doctors, 'diagnostic_types' => $diagnostic_types, 'diagnostic_types_codes' => $diagnostic_types_codes, 'areas' => $areas, 'services' => $services, 'codes' => $codes, 'service_exented' => $service_exented, 'date' => $date]);
	}
	public function ServicesAPI($input){
		$services = Helpers::get_codes(Service::where('clinic_area_id', $input)->get());
		return view('ServiceAPI', ['services' => $services]);
	}
	public function ServiceAPI($input){
		$service = Service::find($input);
		return $service;
	}

	public function addServicePay(Request $request) {
		print_r($request::get('service_id'));
	}
}