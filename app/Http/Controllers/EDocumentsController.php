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
	public function sunat_send($document,$path,$content,$method){
		switch ($method) {
			case "ftp":
				if (file_put_contents('ftp://root:81848133@csluren.sytes.net/'.$path."/"$document, $content)) { $return = true; }
				break;
			case "local":
				if(!file_exists($path.$document)){
				    $fc = iconv('UTF-8//IGNORE', 'ISO-8859-1//IGNORE', $content); 
					$file = fopen($path.$document, "w:ANSI");
					fwrite($file, $fc);
					fclose($file);
					$return = true;
				}
				break;
			default:
				$return = false;
				break;
		}
		return $return;
	}
	public function generate_pay_edocument($json, $content){
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
		$clinic = Clinic::find(1);
		$pay_edocuments = PayEDocuments::select(DB::raw('max(code) as number'))->where("payment_document_type", $json->local_payment_document_type)->join('employees as e', 'e.id','=','employee_id')->where("e.serie", $user->serie)->orderBy('id', 'DESC')->limit(0)->offset(1)->get();
		$pay_edocument = new PayEDocuments();
		$pay_edocument->code = $pay_edocuments->number + 1;
		$pay_edocument->payment_document_type = $json->local_payment_document_type;
		$pay_edocument->authorization_id = $json->authorization_id;
		$pay_edocument->sunat_status = 1;
		$pay_edocument->emission_date = date("Y-m-d");
		$pay_edocument->total_cop_fijo = $json->;
		$pay_edocument->total_cop_var = ;
		$pay_edocument->net_amout = ;
		$pay_edocument->total_igv = $json->igv;
		$pay_edocument->total_amount = $json->total;
		$pay_edocument->clinic_code = $json->
		$pay_edocument->is_closed = 1;
		$pay_edocument->credit_note = "";

		switch ($json->payment_document_type) {
			case '01':
				$file = $clinic->ruc."-".$json->payment_document_type."-F00".$user->serie."-".$pay_edocument->code.".json";
				$path = "data";
				break;
			case '03':
				$file = $clinic->ruc."-".$json->payment_document_type."-B00".$user->serie."-".$pay_edocument->code.".json";
				$path = "data";
				break;
			case '07':
				$file = $clinic->ruc."-".$json->payment_document_type."-F00".$user->serie."-".$pay_edocument->code.".json";
				$path = "data";
				break;
			default:
				break;
		}

		if($pay_edocument->save()){
			if(self::sunat_send($file,$path,$content,"ftp")){
				//Create the Queue for to send the email in the night.
				//Create the Queue for check if the document receipt for the SUNAT or have an error.
			}else{
				return false;
			}
		}else{
			return false;
		}

	}
	public function generate_json($json){
		$items = "";
		foreach($json->items as $item){
			$service = Service::find($item->service_id);
			$items .= '{ "codUnidadMedida" : "NIU", "ctdUnidadItem" : "'.$item->quantity.'", "desItem" : "<![CDATA['.$service->name.']]>", "mtoValorUnitario" : "'.$item->pu.'", "mtoIgvItem" : "'.number_format(($item->imp*0.18),2).'", "tipAfeIGV" : "'.$item->exented.'0", "mtoPrecioVentaItem" : "'.$item->imp.'", "mtoValorVentaItem" : "'.$item->imp.'" }';
		}
		switch ($json->payment_document_type) {
			case '1':
				$json->payment_document_type = "03";
				$data = Authorization::find($json->authorization_id);
				$json->rznSocialUsuario = $data->patient->name." ".$data->patient->paternal." ".$data->patient->maternal; 
				$json->numDocUsuario = "0";
				$json->numDocUsuario = $data->patient->document_identity_code;
				$json->local_payment_document_type = "3";
				break;
			case '2':
				$json->payment_document_type = "01";
				$data = Helpers::get_ruc($json->RUC);
				$json->rznSocialUsuario = $data->RazonSocial; 
				$json->numDocUsuario = $json->RUC;
				$json->local_payment_document_type = "1";
				break;
			case '3':
				$json->payment_document_type = "03";
				$data = Helpers::get_dni($json->DNI);
				$json->rznSocialUsuario = $data->name." ".$data->paternal." ".$data->maternal;
				$json->numDocUsuario = $json->DNI;
				$json->local_payment_document_type = "3";
				break;
			case '4':
				$json->payment_document_type = "03";
				$json->rznSocialUsuario = ""; 
				$json->numDocUsuario = "0";
				$json->local_payment_document_type = "3";
				break;
			
			default:
				# code...
				break;
		}
		$content = '{ "cabecera": {"tipOperacion": "01", "fecEmision" : "'.date("Y-m-d").'", "tipDocUsuario" : "'.$json->payment_document_type.'", "numDocUsuario" : "'.$json->numDocUsuario.'", "rznSocialUsuario" : "<![CDATA['.$json->rznSocialUsuario.']]>", "tipMoneda" : "PEN", "sumDsctoGlobal" : "'.$json->discountt.'", "mtoDescuentos" : "'.$json->discountt.'", "mtoOperGravadas" : "'.$json->opgravada.'", "mtoOperInafectas" : "'.$json->opnogravada.'", "mtoOperExoneradas" : "'.$json->opexonerada.'", "mtoIGV" : "'.$json->igv.'", "mtoImpVenta" : "'.$json->total.'"}, "detalle" : ['.str_replace("}{","},{",$items).']}';

		if(self::generate_pay_edocument($json, $content)){
			return true;
		}else{
			return self::generate_json($json);
		}
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
						$pis->copayment = number_format($item->imp*($json->discountp/100),2);
						$pis->igv = $pis->copayment * 0.18;
						$pis->final_amount = number_format($pis->copayment+$pis->igv,2);
						if($pis->save()){
							return self::generate_json($json); //Create the item for json data sunat;
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
						$pps->copayment = number_format($item->imp*($json->discountp/100),2);
						$pps->igv = number_format($pps->copayment * 0.18,2);
						$pps->final_amount = $pps->copayment+$pps->igv;
						if($pps->save()){
							return self::generate_json($json); //Create the item for json data sunat;
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
					$pcs->copayment = number_format($item->pu*($json->discountp/100),2);
					$pcs->igv = number_format($pcs->copayment * 0.18,2);
					$pcs->final_amount = $pcs->copayment+$pcs->igv;
					if($pcs->save()){
							return self::generate_json($json); //Create the item for json data sunat;
					}
				}
			}
		}


	}
	public function view_print($input){

		$input = json_decode($input);
		$authorization = Authorization::find($input->authorization_id);
		if(self::generate_services($input)){}else{} //Creating the services for the patient.

		//return view('view_print', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position]);
	}
}