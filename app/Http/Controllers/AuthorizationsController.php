<?php

namespace App\Http\Controllers;

use Auth;
use \App\Employee as Employee;
use \App\Models\Area as Area;
use \App\Models\Date as Date_Auth;
use \App\Models\Authorization;	
use \App\Models\AuthorizationType;	
use \App\Models\Insurance;	
use \App\Models\Insured;	
use \App\Models\SubCoverageType;	
use \App\Models\Status;	
use \App\Models\Doctor;	
use \App\Models\DiagnosticType;	
use \App\Models\Coverage;	
use \App\Models\Service;	
use \App\Models\CoverageType;
use \App\Models\DocumentType;
use \App\Models\ClinicArea;
use \App\Helpers;	
use View;
use Queue;
use Redirect;
use Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model as Model;
use Carbon\Carbon;

class AuthorizationsController extends BaseController
{

	public function externAPI($input)
	{
			$input = json_decode($input);
			if($input->data != "null"){
				$response = Authorization::select('patients.id as aID', 'patients.*', 'authorizations.*', 'doctor.complet_name', 'specialities.name')->join('patients', 'patients.id', '=', 'authorizations.patient_id')->join('doctors', 'doctors.id', '=', 'authorizations.doctor_id')->join('specialities', 'specialities.id', '=', 'doctors.speciality_id')->where('specialities.id', $input->from)->where('authorizations.code', $input->data)->orWhere('patients.document_identity_code',$input->data)->orWhere(DB::raw('CONCAT(patients.name, " ", patients.paternal, " ", patients.maternal )'), 'like', '%' . $input->data . '%')->orderBy('intern_code','desc')->paginate(20);
			}else{
				$response = Authorization::join('doctors', 'doctors.id', '=', 'authorizations.doctor_id')->join('specialities', 'specialities.id', '=', 'doctors.speciality_id')->where('specialities.id', $input->from)->orderBy('intern_code','desc')->paginate(20);
			}

			//dd(Authorization::orderBy('created_at','desc')->first()->insureds->insurance);
			//return $response;
			$total_pages = ceil($response->total()/20);
			$currentPath = Route::getFacadeRoot()->current()->uri();
			$paginate = Helpers::manual_paginate($currentPath,$currentPath.'/?page='.$response->CurrentPage(), $response->CurrentPage(), $total_pages, 4);
		return view('api.externAPI', ['users' => $response, 'paginate' => $paginate, 'currentPage' => $response->CurrentPage()]);
	}
	public function showAuthorizationsAPI($input)
	{
			$input = json_decode($input);
			$from = $input->from;
			if($input->data != "null"){
				$response = Authorization::select('patients.id as aID', 'patients.*', 'authorizations.*')->join('patients', 'patients.id', '=', 'authorizations.patient_id')->where('authorizations.code', $input->data)->orWhere('patients.document_identity_code',$input->data)->orWhere(DB::raw('CONCAT(patients.name, " ", patients.paternal, " ", patients.maternal )'), 'like', '%' . $input->data . '%')->orderBy('date','desc')->paginate(20);
			}else{
				$response = Authorization::orderBy('date','desc')->paginate(20);
			}

			//dd(Authorization::orderBy('created_at','desc')->first()->insureds->insurance);
			//return $response;
			$total_pages = ceil($response->total()/20);
			$currentPath = Route::getFacadeRoot()->current()->uri();
			$paginate = Helpers::manual_paginate($currentPath,$currentPath.'/?page='.$response->CurrentPage(), $response->CurrentPage(), $total_pages, 4);
		return view('api.authorizationsAPI', ['users' => $response, 'paginate' => $paginate, 'from' => $from, 'data' => $input->data, 'currentPage' => $response->CurrentPage()]);
	}
	public function showAuthorizations()
	{
		return view('admision.authorizations');
	}	
	public function findAuthorization($input)
	{
		return view('admision.authorizations', ['find' => $input]);
	}
	public function showDates()
	{
		return view('admision.dates', []);
	}
	public function showHourMedic()
	{
		return view('admision.hour_medic', []);
	}

	public function showExtern($input,$id)
	{
		return view('extern_consult.extern', ['speciality_id' => $id]);
	}
	public function viewAuthorization($input)
	{
			$response = Authorization::find($input);
			$sub_coverage_types = Helpers::get_hash_sub(SubCoverageType::orderBy('name')->get());
			$statuses = Helpers::get_list(Status::all());
			$doctors = Helpers::get_doctors(Doctor::orderBy('complet_name')->get());
			$diagnostic_types = Helpers::get_diagnostic(DiagnosticType::all());
			$diagnostic_types_codes = Helpers::get_diagnostic_codes(DiagnosticType::all());
			$document_types = Helpers::get_list(DocumentType::all());
			$areas = Helpers::get_list(ClinicArea::all());
			if(!isset($response->employee_id)){ $response->employee_id = $user->id; $response->save();}

			if(isset($response->insuredservices))
					$response->insuredservices;
			if(isset($response->insuredpharmacies))
					$response->insuredpharmacies;
			if(isset($response->particularservices))
					$response->particularservices;
			if(isset($response->pay_documents))
					$response->pay_documents;



			//if(is_null($response->employee_id)) { $response->employee_id = $user->id; $response->save();}


			//return $sub_coverage_types;
		return view('admision.authorization', ['client' => $response, 'sub_coverage_types' => $sub_coverage_types, 'statuses' => $statuses, 'doctors' => $doctors, 'diagnostic_types' => $diagnostic_types, 'diagnostic_types_codes' => $diagnostic_types_codes, 'areas' => $areas, 'document_types' => $document_types]);
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
			$services = Helpers::get_services(Service::all());
			//dd($response = Authorization::all()->first()->patient);
		return view('admision.createAuthorization', ['sub_coverage_types' => $sub_coverage_types, 'doctors' => $doctors, 'authorization_types' => $authorization_types, 'services' => $services]);
	}
	public function createDate(Request $request){
		$date = new Date_Auth();
		$date->patient_id = $request::get('id');
		$date->doctor_id = $request::get('doctor');
		$date->speciality_id = $request::get('category');
		$date->date_init = $request::get('start');
		$date->date_end = $request::get('end');
		$date->phone = $request::get('phone');

		if($date->save()){
			//Create the queue for the sms
			$now = Carbon::now(new \DateTimeZone('America/Lima'));
			$to_time = strtotime($request::get('date_init'));
			$from_time = strtotime($now);
			$date_to_start = $now->addMinutes(max(round(abs($to_time - $from_time) / 60,0)-30,0));
			Queue::later($date_to_start, '\App\Http\Controllers\CentroController@sendSMS', $date); 
			return $date->id;
		}
	}
	public function listDates(Request $request){
		$date = Date_Auth::with(['patient','doctor','speciality'])->whereBetween('date_init', array($request::get('start'), $request::get('end')))->get();
		return json_encode($date);
	}
	public function deleteDate(Request $request){
		$date = Date_Auth::find($request::get('id'));
		if($date){
			$date->delete();
		}
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
			if(!$sub_coverage_type){ 
				$c->sub_coverage_type_id = null;
			} else { 
				$c->sub_coverage_type_id = $sub_coverage_type->id; 
				$c->name  = $sub_coverage_type->name;
				$c->code = $sub_coverage_type->code;
			}
			$c->cop_fijo = $request::get('cop_fijo');
			$c->cop_var = $request::get('cop_var');
			if($c->save()){
				if(isset($a->insureds))
					$a->insureds->insurance->name;
				if(isset($a->coverage))
					$a->coverage->cop_var;
				if(isset($a->patient))
					$a->patient->name;
				return $a;
			}
		}

	}
	public function saveAtencion(Request $request)
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		}
		$a = Authorization::find($request::get('id'));
		if($request::get('authorization_type_id'))
			$a->authorization_type_id = $request::get('authorization_type_id');
		if($request::get('doctor_id'))
			$a->doctor_id = $request::get('doctor_id');
		if($request::get('status_id'))
			$a->status_id = $request::get('status_id');
		if($request::get('first_diagnostic'))
			$a->first_diagnostic= $request::get('first_diagnostic');
		if($request::get('second_diagnostic'))
			$a->second_diagnostic = $request::get('second_diagnostic');
		if($request::get('third_diagnostic'))
			$a->third_diagnostic = $request::get('third_diagnostic');
		if($request::get('consultations_quantity'))
			$a->consultations_quantity = $request::get('consultations_quantity');
		if($request::get('symptoms'))
			$a->symptoms = $request::get('symptoms');
		if($request::get('ruc_transference'))
			$a->ruc_transference = $request::get('ruc_transference');
		if($request::get('date_transference'))
			$a->date_transference = $request::get('date_transference');
		if($request::get('time_transference'))
			$a->time_transference = $request::get('time_transference');
		if($a->save()){
			if($request::get('sub_coverage_type_id')){
				$sub_coverage_type = SubCoverageType::find($request::get('sub_coverage_type_id'));
				$c = $a->coverage;
				if(!$sub_coverage_type){ 
					$c->sub_coverage_type_id = null;
				} else { 
					$c->sub_coverage_type_id = $sub_coverage_type->id; 
					$c->name  = $sub_coverage_type->name;
					$c->code = $sub_coverage_type->code;
				}
			}
			if($request::get('cop_fijo'))
				$c->cop_fijo = $request::get('cop_fijo');
			if($request::get('cop_var'))
				$c->cop_var = $request::get('cop_var');
			if($c->save()){
				if(isset($a->insureds))
					$a->insureds->insurance->name;
				if(isset($a->coverage))
					$a->coverage->cop_var;
				if(isset($a->patient))
					$a->patient->name;
				return $a;
			}
		}

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
		$medics = Helpers::get_doctors(Doctor::all());
		return view('admision.reporte', ['coverages' => $coverages, 'employees' => $employees, 'medics' => $medics]);
	}

	public function export(Request $request){
		$authorizations = Authorization::select('authorizations.code as Codigo', 'authorizations.intern_code as Control' , DB::raw('CONCAT(patients.name, " ", patients.paternal, " ", patients.maternal) AS Nombres'), 'authorizations.date as Fecha', 'doctors.complet_name as Medico', 'insurances.name as Aseguradora',DB::raw('IFNULL(insurances.name, "Particular") as Aseguradora'),  'employees.username as Adminisionista', 'patients.phone as Telefono', 'authorizations.first_diagnostic as Primer Diagnostico')->join('patients', 'patients.id', '=', 'authorizations.patient_id')->join('doctors', 'doctors.id', '=', 'authorizations.doctor_id')->leftJoin('insureds', 'insureds.patient_id', '=', 'patients.id')->leftJoin('insurances', 'insurances.id', '=', 'insureds.insurance_id')->join('employees', 'employees.id', '=', 'authorizations.employee_id')->orderBy('authorizations.intern_code', 'desc');
		$authorizations->when($request::get('coverage_type') != "", function ($query) use ($request){
	        return $query->whereHas('coverage.sub_coverage_type.coverage_type', function($q) use ($request){
			    $q->where('coverage_types.id', '=', $request::get('coverage_type'));
			});
	    });
		$authorizations->when($request::get('medic') != "", function ($query) use ($request){
	        return $query->where('doctor_id', '=', $request::get('medic'));
	    });
		$authorizations->when($request::get('date_init') != "", function ($query) use ($request){
	        return $query->whereDate('date', '>=', $request::get('date_init'));
	    });
		$authorizations->when($request::get('date_end') != "", function ($query) use ($request){
	        return $query->whereDate('date', '<=', $request::get('date_end'));
	    });
		$authorizations->when($request::get('employee') != "", function ($query) use ($request){
	        return $query->where('employee_id', $request::get('employee'));
	    });

	    $data = json_decode(json_encode($authorizations->get()), true);
	    
		\Excel::create('atenciones_'.date("Y-m-d H:m:s"), function($excel) use ($data){
		    $excel->sheet('Atenciones', function($sheet) use ($data) {
		       $sheet->fromArray($data, null, 'A1', true);

		    });

		})->export('xls');

	}
}