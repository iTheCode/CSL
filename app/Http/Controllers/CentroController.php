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

        $lenght = strlen($input);
        if($lenght == 8){
            //$client = Patient::where('document_identity_code', $input)->get();
            if(isset($client)){
                dd($client);
            }else{
                $reniec = new \Reniec\Reniec();
                dd($reniec->search($input));
            }
        }elseif($lenght == 11){
            $empresa = new \Sunat\Sunat();
            dd($empresa->search($input));
        }else{
            $result['full_name'] = "No Existe";
            $result["address"] = "No Existe";
            $result["document"] = "0";
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