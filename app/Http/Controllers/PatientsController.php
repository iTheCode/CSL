<?php

namespace App\Http\Controllers;

use Auth;
use \App\Employee as Employee;
use \App\Models\Area as Area;
use \App\Models\Authorization;	
use \App\Models\Patient;	
use View;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Database\Eloquent\Model as Model;

class PatientsController extends BaseController
{

	public function showPatients($input = null)
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}

			($response = Patient::orderBy('id','desc')->paginate(20));
			//dd($response = Authorization::all()->first()->patient);
			//return $response;
		return view('patients', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position, 'users' => $response]);
	}
	

	public function createAuthorization()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
			//dd($response = Authorization::all()->first()->patient);
		return view('createPatient', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position]);
	}

	public function getPatientAPI($input = null)
	{
		$response = Patient::where(DB::raw("CONCAT(name, ' ', paternal, ' ', maternal)"), 'like', '%' . $input . '%')->orWhere('document_identity_code', $input)->get();
		return response()->json($response);
	}

	private function get_ruc($url){
			return str_replace("RazonSocial", "Nombre",file_get_contents($url));
	}

	private function get_dni($url){
			$result = file_get_contents($url);
			preg_match("/\"ApellidoP\": \"(.*)\"/",$result,$salida1);

			preg_match("/\"ApellidoM\": \"(.*)\"/",$result,$salida2);

			preg_match("/\"Nombres\": \"(.*)\"/",$result,$salida3);

			$nombres = $salida3[1]." ".$salida1[1]." ".$salida2[1];

			$json["Nombre"] = str_replace("u00d", "ñ",$nombres);
			$json["Direccion"] = "";
			return json_encode($json);
	}


	public function getNewPatientAPI($input){


	}
}