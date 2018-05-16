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
use \App\Models\CoverageType;
use \App\Models\PayDocumentType;
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
		return view('shop.servicesRecents', ['users' => $response, 'paginate' => $paginate]);
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
			if(isset($response->coverage)){
				if(isset($response->insureds) && count($response->insuredservices) == 0 && $response->coverage->cop_var != "100"){

					$response->coverage->cop_var = "0";
					$response->insureds->insurance->factor->factor = "1";

				}
			}

			//if(is_null($response->employee_id)) { $response->employee_id = $user->id; $response->save();}
			//return $sub_coverage_types;
		return view('shop.addService', ['client' => $response, 'sub_coverage_types' => $sub_coverage_types, 'statuses' => $statuses, 'doctors' => $doctors, 'diagnostic_types' => $diagnostic_types, 'diagnostic_types_codes' => $diagnostic_types_codes, 'areas' => $areas, 'services' => $services, 'codes' => $codes, 'service_exented' => $service_exented, 'date' => $date]);
	}
	public function ServicesAPI($input){
		$services = Helpers::get_codes(Service::where('clinic_area_id', $input)->get());
		return view('api.ServiceAPI', ['services' => $services]);
	}
	public function ServiceAPI($input){
		$service = Service::find($input);
		return $service;
	}

	public function addServicePay(Request $request) {
		print_r($request::get('service_id'));
	}

	public function showDocuments()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
		return view('shop.documents', []);
	}
	public function showReportes()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
		$coverages = Helpers::get_list(CoverageType::all());
		$employees = Helpers::get_list(Employee::where('area_id', 1)->orWhere('area_id', 2)->get());
		$type_documents = Helpers::get_list(PayDocumentType::all());
		return view('shop.reporte', ['coverages' => $coverages, 'employees' => $employees, 'type_documents' => $type_documents]);
	}
	public function export(Request $request){
		$edocuments = PayEDocument::select('authorizations.code as Codigo', 'authorizations.intern_code as Control' , DB::raw('CONCAT(patients.name, " ", patients.paternal, " ", patients.maternal) AS Nombres'), 'authorizations.date as Fecha', 'doctors.complet_name as Medico', 'insurances.name as Aseguradora',DB::raw('IFNULL(insurances.name, "Particular") as Aseguradora'),  'employees.username as Adminisionista', 'patients.phone as Telefono', 'authorizations.first_diagnostic')->join('patients', 'patients.id', '=', 'authorizations.patient_id')->join('doctors', 'doctors.id', '=', 'authorizations.doctor_id')->leftJoin('insureds', 'insureds.patient_id', '=', 'patients.id')->leftJoin('insurances', 'insurances.id', '=', 'insureds.insurance_id')->join('employees', 'employees.id', '=', 'authorizations.employee_id')->orderby('authorizations.intern_code', 'desc');

		#$edocuments = PayEDocument::select('employees.username as Adminisionista', 'pay_e_documents.date as Fecha', 'authorizations.intern_code as Control' , DB::raw('CONCAT(patients.name, " ", patients.paternal, " ", patients.maternal) AS Nombres'), 'authorizations.date as Fecha', 'doctors.complet_name as Medico', 'insurances.name as Aseguradora',DB::raw('IFNULL(insurances.name, "Particular") as Aseguradora'),  'employees.username as Adminisionista', 'patients.phone as Telefono', 'authorizations.first_diagnostic')->join('patients', 'patients.id', '=', 'authorizations.patient_id')->join('doctors', 'doctors.id', '=', 'authorizations.doctor_id')->leftJoin('insureds', 'insureds.patient_id', '=', 'patients.id')->leftJoin('insurances', 'insurances.id', '=', 'insureds.insurance_id')->join('employees', 'employees.id', '=', 'authorizations.employee_id')->orderby('authorizations.intern_code', 'desc');


		$edocuments->when($request::get('coverage_type') != "", function ($query) use ($request){
	        return $query->whereHas('authorization.coverage.sub_coverage_type.coverage_type', function($q) use ($request){
			    $q->where('coverage_types.id', '=', $request::get('coverage_type'));
			});
	    });
		$edocuments->when($request::get('date_init') != "", function ($query) use ($request){
	        return $query->whereDate('date', '>=', $request::get('date_init'));
	    });
		$edocuments->when($request::get('date_end') != "", function ($query) use ($request){
	        return $query->whereDate('date', '<=', $request::get('date_end'));
	    });

		$edocuments->when($request::get('pay_document_type_id') != "", function ($query) use ($request){
	        return $query->where('pay_document_type_id', '=', $request::get('pay_document_type_id'));
	    });
		$edocuments->when($request::get('employee') != "", function ($query) use ($request){
	        return $query->where('employee_id', $request::get('employee'));
	    });

	    $data = json_decode(json_encode($edocuments->get()), true);
	    
		\Excel::create('documentos_'.date("Y-m-d H:m:s"), function($excel) use ($data){
		    $excel->sheet('Documentos Electronicos', function($sheet) use ($data) {
		       $sheet->fromArray($data, null, 'A1', true);

		    });

		})->export('xls');

	}
}