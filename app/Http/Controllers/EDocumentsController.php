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
use \App\Helpers;	
use View;
use Redirect;
use Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Database\Eloquent\Model as Model;

class EDocumentsController extends BaseController
{
	public function generate_json(){

	}
	public function generate_services($json){

		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}

		$authorization = Authorization::find($json->authorization_id);
		if(isset($authorization->patient->insureds))
			$authorization->patient->insureds->insurance;
		if($json->is_coverage == 0){
			if(isset($authorization->patient->insureds->insurance)){
				$insured_service = new InsuredService();
				$insured_service->authorization_id = $authorization->id;
				$insured_service->doctor_id = $authorization->doctor_id;
				//$insured_service->clinic_area_id = 
				$insured_service->employee_id = $user->id;
				$insured_service->initial_amount = $json->importe;
				$insured_service->copayment = $json->opgravada + $json->opnogravada + $json->opexonerada;
				$insured_service->igv = $json->igv;
				$insured_service->final_amount = $json->total;
				$insured_service->is_closed = 1;
				if($insured_service->save()){
					foreach($json->items as $item){
						$pis = new PurchaseInsuredService();
						$service = Service::find($item->service_id);

						$pis->service_id = $item->service_id;
						$pis->insured_service_id = $insured_service->id;
						$pis->service_exented_id = $item->exented;
						$pis->quantity = $item->quantity;
						$pis->initial_amount = $item->imp;
						$pis->copayment = round($item->imp*($json->discountp/100),2);
						$pis->igv = $pis->copayment * 0.18;
						$pis->final_amount = round($pis->copayment+$pis->igv,2);
						if($pis->save()){
							//Create the item for json data sunat;
						}
					}
				}
				//Creating Insured Services
			}else{
				$particular_service = new ParticularService();
				$particular_service->authorization_id = $authorization->id;
				$particular_service->doctor_id = $authorization->doctor_id;
				//$particular_service->clinic_area_id = 
				$particular_service->employee_id = $user->id;
				$particular_service->initial_amount = $json->importe;
				$particular_service->copayment = $json->opgravada + $json->opnogravada + $json->opexonerada;
				$particular_service->igv = $json->igv;
				$particular_service->final_amount = $json->total;
				$particular_service->is_closed = 1;
				if($particular_service->save()){
					foreach($json->items as $item){
						$pps = new PurcharseParticularService();
						$service = Service::find($item->service_id);

						$pps->service_id = $item->service_id;
						$pps->insured_service_id = $insured_service->id;
						$pps->service_exented_id = $item->exented;
						$pps->quantity = $item->quantity;
						$pps->initial_amount = $item->imp;
						$pps->copayment = round($item->imp*($json->discountp/100),2);
						$pps->igv = round($pps->copayment * 0.18,2);
						$pps->final_amount = $pps->copayment+$pps->igv;
						if($pps->save()){
							//Create the item for json data sunat;
						}
					}
				}
				//Creating Particular Services
			};
		}else{
			$insured_service = new InsuredService();
			$insured_service->authorization_id = $authorization->id;
			$insured_service->doctor_id = $authorization->doctor_id;
			//$insured_service->clinic_area_id = 
			$insured_service->employee_id = $user->id;
			$insured_service->initial_amount = $json->importe;
			$insured_service->copayment = $json->opgravada + $json->opnogravada + $json->opexonerada;
			$insured_service->igv = $json->igv;
			$insured_service->final_amount = $json->total;
			$insured_service->is_closed = 1;
			$insured_service->is_consultation = 1;
			if($insured_service->save()){
				foreach($json->items as $item){
					$pcs = new PurchaseCoverageService();
					$pcs->service_id = $item->service_id;
					$pcs->insured_service_id = $insured_service->id;
					$pcs->unitary = $item->pu;
					$pcs->copayment = round($item->pu*($json->discountp/100),2);
					$pcs->igv = round($pcs->copayment * 0.18,2);
					$pcs->final_amount = $pcs->copayment+$pcs->igv;
					if($pcs->save()){
						//Create the item for json data sunat;
					}
				}
			}
		}


	}
	public function view_print($input){

		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}

		$input = json_decode($input);
		$authorization = Authorization::find($input->authorization_id);
		self::generate_services($input); //Creating the services for the patient.

		return view('view_print', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position]);
	}
}