<?php

namespace App\Http\Controllers;

use Auth;
use App;
use Mail;
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
use \App\Models\PurchaseParticularService;
use \App\Models\Service;
use \App\Models\Clinic;
use \App\Models\PayEDocument;
use \App\Models\PayDocumentType;
use \App\Models\ParticularService;
use \App\Helpers;
use View;
use Redirect;
use Request;
use PDF;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Database\Eloquent\Model as Model;

class EDocumentsController extends BaseController
{
	private $json;
	public function get_last_document($type, $serie){
		$pay_edocuments = PayEDocument::select(DB::raw('LAST_INSERT_ID(code) as number'))->where("pay_e_documents.pay_document_type_id", $type)->join('employees as e', 'e.id','=','pay_e_documents.employee_id')->where("e.serie", $serie)->orderBy('pay_e_documents.id', 'DESC')->limit("1")->get();
		if(isset($pay_edocuments[0]))
			if(PayEDocument::where('code', '=', ($pay_edocuments[0]->number+1))->join('employees as e', 'e.id','=','pay_e_documents.employee_id')->where("e.serie", $serie)->exists())
				$pay_edocument = $this->get_last_document($serie,$type);
			else
				$pay_edocument = $pay_edocuments[0]->number+1;
		else
			$pay_edocument = 1;

		return $pay_edocument;

	}
	public function generate_pay_edocument($json){
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
		$clinic = Clinic::find(1);


		switch ($json->payment_document_type) {
			case '1':
				$json->payment_document_type = "03";
				$data = Authorization::find($json->authorization_id);
				$json->rznSocialUsuario = $data->patient->name." ".$data->patient->paternal." ".$data->patient->maternal;
				$json->numDocUsuario = str_replace(" ", "", $data->patient->document_identity_code);
				$json->direccion = $data->patient->direction;
				$json->local_payment_document_type = "01";
				break;
			case '2':
				$json->payment_document_type = "01";
				$data = json_decode(app('App\Http\Controllers\CentroController')->cedulaAPI(str_replace(" ", "", $json->RUC)));
				$json->rznSocialUsuario = $data->full_name;
				$json->numDocUsuario = $data->document;
				$json->direccion = $data->address;
				$json->local_payment_document_type = "06";
				break;
			case '3':
				$json->payment_document_type = "03";
				$data = json_decode(app('App\Http\Controllers\CentroController')->cedulaAPI(str_replace(" ", "", $json->DNI)));
				$json->rznSocialUsuario = $data->full_name;
				$json->numDocUsuario = $data->document;
				$json->direccion = "";
				$json->local_payment_document_type = "01";
				break;
			case '4':
				$json->payment_document_type = "03";
				$json->rznSocialUsuario = "";
				$json->numDocUsuario = "0";
				$json->local_payment_document_type = "00";
				$json->direccion = "";
				break;

			default:
				# code...
				break;
		}



		$pay_e_document_type = PayDocumentType::where('code',$json->payment_document_type)->get();
		$pay_edocuments = PayEDocument::select(DB::raw('LAST_INSERT_ID(code) as number'))->where("pay_e_documents.pay_document_type_id", $pay_e_document_type[0]->id)->join('employees as e', 'e.id','=','pay_e_documents.employee_id')->where("e.serie", $user->serie)->orderBy('pay_e_documents.id', 'DESC')->limit("1")->get();
		$pay_edocument = new PayEDocument();
		
		$pay_edocument->code = $this->get_last_document($pay_e_document_type[0]->id, $user->serie);

		$pay_edocument->pay_document_type_id = $pay_e_document_type[0]->id;
		$pay_edocument->authorization_id = $json->authorization_id;
		$pay_edocument->sunat_status = 2;
		$pay_edocument->emission_date = date("Y-m-d H:m:s");
		if(isset($json->particular_service))
			$pay_edocument->particular_service = $json->particular_service;

		if(isset($json->insured_service))
			$pay_edocument->insured_service = $json->insured_service;
		$pay_edocument->numDocUsuario = $json->numDocUsuario;
		$pay_edocument->rznSocialUsuario = $json->rznSocialUsuario;
		$pay_edocument->direccionUsuario = $json->direccion;
		$pay_edocument->view_print = $json->view_print;

		//$pay_edocument->total_cop_fijo = $json->;
		//$pay_edocument->total_cop_var = ;
		//$pay_edocument->net_amout = ;
		if(isset($json->Mail))
			$pay_edocument->mail = $json->Mail;

		$pay_edocument->total_cop_var = $json->discountp;
		$pay_edocument->opgravada = $json->opgravada;
		$pay_edocument->opnogravada = $json->opnogravada;
		$pay_edocument->opexonerada = $json->opexonerada;


		$pay_edocument->total_igv = $json->igv;
		if(isset($json->anotation))
			$pay_edocument->anotation = $json->anotation;
		$pay_edocument->total_amount = $json->total;
		//$pay_edocument->clinic_code = $json->
		$pay_edocument->is_closed = 1;
		$pay_edocument->credit_note = "";
		$pay_edocument->employee_id = $user->id;


		switch ($json->payment_document_type) {
			case '01':
				//$file = $clinic->ruc."-".$json->payment_document_type."-F00".$user->serie."-".$pay_edocument->code.".json";
				$file = $clinic->ruc."001DOC".str_pad($pay_edocument->code, 10, "0",STR_PAD_LEFT).date("ymd")."FA.txt";
				$pdf_name = $clinic->ruc."-".$json->payment_document_type."-FF".str_pad($user->serie, 2, "0",STR_PAD_LEFT)."-".$pay_edocument->code.".pdf";
				$json->document_type = "FA";
				$json->code_serie = "FF";
				break;
			case '03':
				//$file = $clinic->ruc."-".$json->payment_document_type."-B00".$user->serie."-".$pay_edocument->code.".json";
				$file = $clinic->ruc."001DOC".str_pad($pay_edocument->code, 10, "0",STR_PAD_LEFT).date("ymd")."BO.txt";
				$pdf_name = $clinic->ruc."-".$json->payment_document_type."-BB".str_pad($user->serie, 2, "0",STR_PAD_LEFT)."-".$pay_edocument->code.".pdf";
				$json->document_type = "BO";
				$json->code_serie = "BB";
				break;
			case '07':
				//$file = $clinic->ruc."-".$json->payment_document_type."-F00".$user->serie."-".$pay_edocument->code.".json";
				$file = $clinic->ruc."001DOC".str_pad($pay_edocument->code, 10, "0",STR_PAD_LEFT).date("ymd")."NC.txt";
				$pdf_name = $clinic->ruc."-".$json->payment_document_type."-FF".str_pad($user->serie, 2, "0",STR_PAD_LEFT)."-".$pay_edocument->code.".pdf";
				$json->document_type = "NC";
				$json->code_serie = "FF";
				break;
			default:
				break;
		}

		$pay_edocument->serie = $json->code_serie.str_pad($user->serie, 2, "0",STR_PAD_LEFT);
			/*$pdf = PDF::loadView('view_print', []); - && Helpers::save_file($pdf_name,"pdf",$pdf->stream(),"ftp_luren")  */
		if($pay_edocument->save()){
			$json->payEdocument = $pay_edocument;
			$json->user = $user;
			$content_file = self::generate_json($json);
			$content_pdf = self::view_print("01",$pay_edocument->id);
			if(!Helpers::save_file($file,"",$content_file,"url_luren")){
				$files = array(array('file' => $file, 'content' => $content_file));
				if(!Helpers::save_file($file,"",$content_file,"ftp_luren")){
					Mail::raw('[Archivo] : '.$file, function ($message) use ($files,$pay_edocument) {
					    $message->from('facturacion@clinicaluren.com.pe', 'Facturación Clínica Luren');

					    $message->to('sistemas@clinicaluren.com.pe');

						$message->subject("[Envio Automático] Error XML : ".$pay_edocument->serie."-".$pay_edocument->code);
						foreach($files as $file){
							$message->attachData($file['content'],$file['file']);
						}
					$pay_edocument->sunat_status = 0;
					$pay_edocument->save();
					});
				}
			}
			if(!Helpers::save_file($pdf_name,"PDF/",$content_pdf,"url_luren")){
				$files = array(array('file' => $pdf_name, 'content' => $content_pdf));
				if(!Helpers::save_file($pdf_name,"PDF/",$content_pdf,"ftp_luren")){
					Mail::raw('[Archivo] : '.$file, function ($message) use ($files,$pay_edocument) {
					    $message->from('facturacion@clinicaluren.com.pe', 'Facturación Clínica Luren');

					    $message->to('sistemas@clinicaluren.com.pe');

						$message->subject("[Envio Automático] Error PDF : ".$pay_edocument->serie."-".$pay_edocument->code);
						foreach($files as $file){
							$message->attachData($file['content'],$file['file']);
						}
					});
				}
			}
			return true;

		}else{
			return false;
		}
	}
	public function generate_json($json){

		$clinic = Clinic::find(1);
		$sub_total = round($json->opgravada+$json->opnogravada+$json->opexonerada,2);


		//$content = '{ "cabecera": {"tipOperacion": "01", "fecEmision" : "'.date("Y-m-d").'", "tipDocUsuario" : "'.$json->payment_document_type.'", "numDocUsuario" : "'.$json->numDocUsuario.'", "rznSocialUsuario" : "<![CDATA['.$json->rznSocialUsuario.']]>", "tipMoneda" : "PEN", "sumDsctoGlobal" : "'.$json->discountt.'", "mtoDescuentos" : "'.$json->discountt.'", "mtoOperGravadas" : "'.$json->opgravada.'", "mtoOperInafectas" : "'.$json->opnogravada.'", "mtoOperExoneradas" : "'.$json->opexonerada.'", "mtoIGV" : "'.$json->igv.'", "mtoImpVenta" : "'.$json->total.'"}, "detalle" : ['.str_replace("}{","},{",$items).']}';

		$content = str_pad($json->payEdocument->code, 10, "0",STR_PAD_LEFT)."|".$json->document_type."|00|".$clinic->ruc."|".$json->numDocUsuario."|".date("ymd")."|".date("ymd")."|PEN|".$sub_total."|".$json->discountt."|".$sub_total."|0.00|".$json->igv."|0.00|0.00|".$json->total."|0|NA|0000000000000|".$json->payEdocument->serie."|".str_pad($json->payEdocument->code, 8, "0",STR_PAD_LEFT)."|BBENDEZU|".$json->payEdocument->id."||".$json->local_payment_document_type."|01||01|000|00|00|00||0.00|\r\n";

		$i = 1;
		foreach($json->items as $item){
			$service = Service::find($item->service_id);
			$mtoDsctoItem = Helpers::number_format_sunat($item->imp*($item->discountp)/100,2);
			$mtoIgvItem = Helpers::number_format_sunat((($item->imp-$mtoDsctoItem)*0.18),2);
			$mtoPrecioVentaItem = Helpers::number_format_sunat($item->pu*$item->quantity,2)-$mtoDsctoItem;

			//$content .= '{ "codUnidadMedida" : "NIU", "ctdUnidadItem" : "'.$item->quantity.'", "desItem" : "<![CDATA['.$service->name.']]>", "mtoValorUnitario" : "'.$item->pu.'", "mtoDsctoItem" : "'.$mtoDsctoItem.'", "mtoIgvItem" : "'.$mtoIgvItem.'", "tipAfeIGV" : "'.$item->exented.'0", "mtoPrecioVentaItem" : "'.$mtoPrecioVentaItem.'", "mtoValorVentaItem" : "'.$item->imp.'" }';
			$afect_igv = ($item->exented == 1) ? 'GRAVADO' : 'EXONERADO';
			$mtoIgvItem = ($item->exented == 1) ? $mtoIgvItem : "0.00";
			$content .= str_pad($i, 10, "0",STR_PAD_LEFT)."|".str_pad($json->payEdocument->code, 10, "0",STR_PAD_LEFT)."|SERVICIO|".$afect_igv."|8|".$item->service_id."|".$service->name."|".$item->quantity."|".$item->pu."|".$mtoDsctoItem."|".$mtoPrecioVentaItem ."|".$mtoIgvItem."|0.000000|0|0.000000|0.000000|".($mtoPrecioVentaItem+$mtoIgvItem)."|00|\r\n";
			$i++;
		}


		//$content .= "D|000000001|0000000001|CC: 2410211703|\r\n";
		$content .= "C|".$json->numDocUsuario."|".$json->rznSocialUsuario."|".$json->direccion."||".$json->Mail."||||||".$json->local_payment_document_type."|";

		$this->json = $json;

		return $content;
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
					$json->insured_service = $insured_service->id;
					foreach($json->items as $item){
						$pis = new PurchaseInsuredService();
						$service = Service::find($item->service_id);

						$pis->doctor_id = $item->doctor_id;
						$pis->service_id = $item->service_id;
						$pis->insured_service_id = $insured_service->id;
						$pis->service_exented_id = $item->exented;
						$pis->quantity = $item->quantity;
						$pis->initial_amount = $item->imp;

						//Reformular copago
						$pis->copayment = Helpers::number_format_sunat($item->imp-(Helpers::number_format_sunat($item->imp * ($item->discountp/100),2)),2);

						$pis->igv = ($item->exented == 1) ? Helpers::number_format_sunat($pis->copayment * 0.18,2) : "0.00";
						$pis->final_amount = Helpers::number_format_sunat($pis->copayment+$pis->igv,2);
						$pis->save();
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
					$json->particular_service = $particular_service->id;
					foreach($json->items as $item){
						$pps = new PurchaseParticularService();
						$service = Service::find($item->service_id);

						$pps->doctor_id = $item->doctor_id;
						$pps->service_id = $item->service_id;
						$pps->particular_service_id = $particular_service->id;
						$pps->service_exented_id = $item->exented;
						$pps->quantity = $item->quantity;
						$pps->initial_amount = $item->imp;
						//Reformular copago
						$pps->copayment = Helpers::number_format_sunat($item->imp-(Helpers::number_format_sunat($item->imp * ($item->discountp/100),2)),2);
						$pps->igv = ($item->exented == 1) ? Helpers::number_format_sunat($pps->copayment * 0.18,2) : "0.00";
						$pps->final_amount = $pps->copayment+$pps->igv;
						$pps->save();
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
				$json->insured_service = $insured_service->id;
				foreach($json->items as $item){
					$pcs = new PurchaseCoverageService();

					$pcs->doctor_id = $item->doctor_id;
					$pcs->service_id = $item->service_id;
					$pcs->insured_service_id = $insured_service->id;
					$pcs->unitary = $item->pu;
					//Reformular copago
					$pcs->copayment = Helpers::number_format_sunat($item->imp-(Helpers::number_format_sunat($item->imp * ($item->discountp/100),2)),2);
					$pcs->igv = ($item->exented == 1) ? Helpers::number_format_sunat($pcs->copayment * 0.18,2) : "0.00";
					$pcs->final_amount = $pcs->copayment+$pcs->igv;
					$pcs->save();
				}
			}
		}

		return self::generate_pay_edocument($json); //Create the item for json data sunat;

	}
	public function create_edocument($input){


		$input = json_decode($input);
		$authorization = Authorization::find($input->authorization_id);
		if(self::generate_services($input)){
			//$pay_edocument = PayEDocument::find($this->json->payEdocument);
			//return $pay_edocument;

			//return redirect()->route('login', array('type' => $json->payment_document_type, 'input' => $this->json->payEdocument));
			return json_encode(array('type' => $this->json->view_print, 'input' => $this->json->payEdocument));
		}

		//return view('view_print', ['pay_edocument' = $pay_edocument]);

	}
	public function view_print($type,$input){
		$pay_edocument = PayEDocument::find($input);

		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
		$pay_edocument->serie = str_pad($pay_edocument->serie, 2, "0",STR_PAD_LEFT);

		$pdf = App::make('dompdf.wrapper');
		$view = view('shop.document_pdf',['type' => $type, 'input' => $pay_edocument]);
		if($type == 2){
			$pdf->setPaper('A4', 'fullpage');
		}elseif($type == 1){
			$pdf->setPaper([0, 0, 841.89, 226.772], 'landscape');
		}
		return $pdf->loadHTML($view)->stream();


	}
}
