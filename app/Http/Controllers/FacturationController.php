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
use \App\Models\InsuredService;	
use \App\Models\PurchaseCoverageService;
use \App\Models\PurchaseInsuredService;	
use \App\Models\PurcharseParticularService;	
use \App\Models\Service;	
use \App\Models\PayDocument;	
use \App\Models\PayEDocument;	
use \App\Models\PayDocumentGroup;
use \App\Helpers;	
use View;
use Redirect;
use Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model as Model;

class FacturationController extends BaseController
{
	public function showdocumentsAPI($input)
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
			$input = json_decode($input);
			if($input->data != "null"){
				$response = PayDocument::select('patients.id as aID', 'patients.*', 'authorizations.*')->join('patients', 'patients.id', '=', 'authorizations.patient_id')->where('authorizations.code', $input->data)->orWhere('patients.document_identity_code',$input->data)->orWhere(DB::raw('CONCAT(patients.name, " ", patients.paternal, " ", patients.maternal )'), 'like', '%' . $input->data . '%')->orderBy('id','desc')->paginate(20);
				$local_response = PayEDocument::select('patients.id as aID', 'patients.*', 'authorizations.*')->join('patients', 'patients.id', '=', 'authorizations.patient_id')->where('authorizations.code', $input->data)->orWhere('patients.document_identity_code',$input->data)->orWhere(DB::raw('CONCAT(patients.name, " ", patients.paternal, " ", patients.maternal )'), 'like', '%' . $input->data . '%')->orderBy('intern_code','desc')->paginate(20);
			}else{
				$response = PayDocument::orderBy('id','desc')->paginate(20);
				$local_response = PayEDocument::orderBy('intern_code','desc')->paginate(20);
			}

			//dd(Authorization::orderBy('created_at','desc')->first()->insureds->insurance);
			//return $response;
			$total_pages = ceil($response->total()+$local_response->total()/20);
			$currentPath = Route::getFacadeRoot()->current()->uri();
			$paginate = Helpers::manual_paginate($currentPath,$currentPath.'/?page='.$response->CurrentPage(), $response->CurrentPage(), $total_pages, 4);
		return view('api.documentsAPI', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position, 'pay_documents' => $response, 'local_pay_documents' => $local_response,'paginate' => $paginate, 'currentPage' => $response->CurrentPage()]);
	}
	public function showDocuments()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
		return view('facturation.documents', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position]);
	}
	public function showProviders()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
		$doctors = Helpers::get_doctors(Doctor::orderBy('complet_name')->get());
		return view('facturation.providers', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position, 'doctors' => $doctors]);
	}
	public function showContabilidad()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
		return view('facturation.contabilidad', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position]);
	}
	public function showTramas()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
			$response = PayDocumentGroup::orderBy('code','desc')->paginate(20);
			$total_pages = ceil($response->total()/20);
			$currentPath = Route::getFacadeRoot()->current()->uri();
			$paginate = Helpers::manual_paginate($currentPath,$currentPath.'/?page='.$response->CurrentPage(), $response->CurrentPage(), $total_pages, 4);
		return view('facturation.tramas', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position, 'lotes' => $response,'paginate' => $paginate, 'currentPage' => $response->CurrentPage()]);
	}
	public function showCharge($input,$id)
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
		return view('facturation.factu', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position]);
	}
}