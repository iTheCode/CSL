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
use \App\Models\Hospitalization;
use \App\Models\HospitalizationRoom;	
use \App\Models\Patient;    
use \App\Helpers;	
use View;
use Redirect;
use Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Database\Eloquent\Model as Model;

class CentroController extends BaseController
{

	public function centro()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
		$response = HospitalizationRoom::all();

		return view('hospitalization.centro', ['rooms' => $response]);
	}

    public function cedulaAPI($input){
        $input = str_replace(" ", "", $input);
        $lenght = strlen($input);
        if($lenght == 8){
            $client = Patient::where('document_identity_code', $input)->get();
            if(isset($client)){
                $return = Array(
                                'full_name' => $client->name." ".$client->paternal." ".$client->maternal,
                                'address' => $client->address,
                                'document' => $input,
                                'type' => '2'
                );
            }else{
                $reniec = new \Reniec\Reniec();
                $person = $reniec->search($input));
                if( $person->success != false ){
                    $return = Array(
                                    'full_name' => $person->result->name." ".$person->result->paternal." ".$person->result->maternal,
                                    'address' => $client->address,
                                    'document' => $input,
                                    'type' => '2'
                    );
                }else{
                    $return = Array(
                                    'full_name' => 'Sin Resultados',
                                    'address' => 'Sin Resultados',
                                    'document' => $input,
                                    'type' => '4'
                    );
                }
            }
        }elseif($lenght == 11){
            $sunat = new \Sunat\Sunat();
            $empresa = $sunat->search($input));
            if( $empresa->success != false ){
                $return = Array(
                                'full_name' => $person->result->RazonSocial,
                                'address' => $client->Direccion,
                                'document' => $input,
                                'type' => '3'
                );
            }else{
                $return = Array(
                                'full_name' => 'Sin Resultados',
                                'address' => 'Sin Resultados',
                                'document' => $input,
                                'type' => '4'
                );
            }
        }else{
            $return = Array(
                            'full_name' => 'Sin Resultados',
                            'address' => 'Sin Resultados',
                            'document' => $input,
                            'type' => '4'
            );
        }
        $result = json_encode($result);
        return $result;
    	
    }
    public function sendSMS($job, $data){
        $data = (object) $data;
    	$date = Date_Auth::find($data->id);
    	if($date){
            //Send Email
    	}

    }
}