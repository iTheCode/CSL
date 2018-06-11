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
        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImMxM2ZiNDI4NGM1MmY2OGEwNTNmOWEyNDA2ZTBjNjFiMjQ0OWYwOTcyM2YzMzJmYzg2ZWRiZjhiODM2MzUxZGUzNzM4MDY0NzM1YzBjM2M4In0.eyJhdWQiOiIxIiwianRpIjoiYzEzZmI0Mjg0YzUyZjY4YTA1M2Y5YTI0MDZlMGM2MWIyNDQ5ZjA5NzIzZjMzMmZjODZlZGJmOGI4MzYzNTFkZTM3MzgwNjQ3MzVjMGMzYzgiLCJpYXQiOjE1Mjg3NTU2NDIsIm5iZiI6MTUyODc1NTY0MiwiZXhwIjoxNTYwMjkxNjQyLCJzdWIiOiI1MCIsInNjb3BlcyI6WyJ1c2UtcmVuaWVjIiwidXNlLXN1bmF0Il19.Vgg6APVjRpAh7UkCpOvOJQFvjlFFYDtlHS-h7UdsluQGbaLY3_6C0iPyI2LFD7TKDPNTIQfCLR0_3dctSPQE44vhpRAZHJqhpZ7nmREwjtunHki-wKyffufA-z4tSNeJO2JVB0Ea_9rlmUuXhUUYhbitQcO4GwdDTkH85oAtearAn7W9DdkB56vbYd8YZflu-ABdTyWieoFowM6HWLa9At1F0AnFSvbQtqze9bOSI6PHh9WGrCbnuZSYmt51Rvx8nMv-pFVA7RVpj6DO6SdqtA2WweKOX8e6y4PvMDRxyrT9FQBabmkmCGDHcKa_XsTIRen9YKq-c_sRGQuQLiLFkFc8n3kGt_Is2Nwqz2vo09_MUsGWNSEBWXAoCiczKcy-gS3-RIKOTpuTFx63xqUiymULr4NZtheXUHVb6zPj7RUuBzTWnQiy824hTwm3QC4moj300-J4hvS0CzwA3lZOOsocnyKNPa3hRpHGrTQJSW-Wo67-Gu8E73pyZxu-Mgohblbl2LQfYPxWvvom7TOFC-Rbiu_kHpkcDvvowOgjdY0VfubGWDyiQb6Kk8Ti8C1Px0tk_sw_nEVE-mrLNVZYf_34DWHWSanRR3RqCF6uEpkYF7-1aiJYAMwwulQbEQNAdkgSRrGtRCXeQpZh4oIV2JfA-RGxuzpd-VVMRnS4szw";
        if($lenght == 8){
            //$client = Patient::where('document_identity_code', $input)->get();
            if(isset($client)){
                dd($client);
            }else{
                $tecactus = new \Tecactus\Reniec\DNI($token);
                dd($tecactus->get($input));
            }
        }elseif($lenght == 11){
            $tecactus = new \Tecactus\Sunat\RUC($token);
            dd($tecactus->getByRuc($input));
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