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


@date_default_timezone_set('America/Lima');

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
			$from = $input->from;
			$data = $input->data;
			if($from == "caja"){
				if($input->data != "null"){
					$response = PayEDocument::select('pay_e_documents.*')->join('authorizations', 'pay_e_documents.authorization_id', '=', 'authorizations.id')->join('patients', 'patients.id', '=', 'authorizations.patient_id')->where('authorizations.code', $input->data)->orWhere(DB::raw('CONCAT(pay_e_documents.serie, "-", pay_e_documents.code )'), 'like', '%' . $input->data . '%')->orWhere('patients.document_identity_code',$input->data)->orWhere(DB::raw('CONCAT(patients.name, " ", patients.paternal, " ", patients.maternal )'), 'like', '%' . $input->data . '%')->orderByRaw('pay_e_documents.code+0 desc')->paginate(20);
				}else{
					$response = PayEDocument::orderByRaw('code+0 desc')->paginate(20);
				}
			}

			if($from == "facturacion"){

				if($input->data != "null"){
					$response = PayDocument::select('pay_documents.*')->join('authorizations', 'pay_documents.authorization_id', '=', 'authorizations.id')->join('patients', 'patients.id', '=', 'authorizations.patient_id')->where('authorizations.code', $input->data)->orWhere('pay_documents.code', 'like', '%' . $input->data . '%')->orWhere('patients.document_identity_code',$input->data)->orWhere(DB::raw('CONCAT(patients.name, " ", patients.paternal, " ", patients.maternal )'), 'like', '%' . $input->data . '%')->orderByRaw('pay_documents.code+0 desc')->paginate(20);
				}else{
					$response = PayDocument::orderByRaw('code+0 desc')->paginate(20);
				}
			}

			//dd(Authorization::orderBy('created_at','desc')->first()->insureds->insurance);
			//return $response;
			$total_pages = ceil($response->total()/20);
			$currentPath = Route::getFacadeRoot()->current()->uri();
			$paginate = Helpers::manual_paginate($currentPath,$currentPath.'/?page='.$response->CurrentPage(), $response->CurrentPage(), $total_pages, 4);
		return view('api.documentsAPI', ['pay_documents' => $response, 'from' => $from, 'data' => $data, 'paginate' => $paginate, 'currentPage' => $response->CurrentPage()]);
	}
	public function showDocuments()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
		return view('facturation.documents', []);
	}
	public function showProviders()
	{
		$doctors = Helpers::get_doctors(Doctor::orderBy('complet_name')->get());
		return view('facturation.providers', ['doctors' => $doctors]);
	}
	public function showContabilidad()
	{
		return view('facturation.contabilidad', []);
	}

	public function showEstatus()
	{
		return view('facturation.estatus_e', []);
	}
	public function showTramas()
	{
			$response = PayDocumentGroup::orderBy('code','desc')->paginate(20);
			$total_pages = ceil($response->total()/20);
			$currentPath = Route::getFacadeRoot()->current()->uri();
			$paginate = Helpers::manual_paginate($currentPath,$currentPath.'/?page='.$response->CurrentPage(), $response->CurrentPage(), $total_pages, 4);
		return view('facturation.tramas', ['lotes' => $response,'paginate' => $paginate, 'currentPage' => $response->CurrentPage()]);
	}
	public function showCharge($input,$id)
	{
		return view('facturation.factu', []);
	}
	public function showVista()
	{
		return view('facturation.vista', []);
	}

}