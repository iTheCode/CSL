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
use \App\Models\Hospitalization;
use \App\Models\HospitalizationRoom;	
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

		return view('hospitalization.centro', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position, 'rooms' => $response]);
	}

    public function dniAPI($input){
    	$reniecDni = new \Tecactus\Reniec\DNI('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImJkMTRiNzg1MzdmOWUwYjJkNjU5NzcwNzAzZGNhNmI5YzM3MTBhNDU5OTVmOWFmNTA3M2I2MjI5OTg4NGRlZGZkMzQxMWM5YTZkZDQ3ZjFlIn0.eyJhdWQiOiIxIiwianRpIjoiYmQxNGI3ODUzN2Y5ZTBiMmQ2NTk3NzA3MDNkY2E2YjljMzcxMGE0NTk5NWY5YWY1MDczYjYyMjk5ODg0ZGVkZmQzNDExYzlhNmRkNDdmMWUiLCJpYXQiOjE1MDgzNDg1MDQsIm5iZiI6MTUwODM0ODUwNCwiZXhwIjoxNTM5ODg0NTA0LCJzdWIiOiI1MCIsInNjb3BlcyI6WyJ1c2UtcmVuaWVjIl19.tVCoCf7k7m0nq_e7Y86C9BSP1mA_MExOEUYvXuBTv-3k-hNMMps5fGXWUhgfpk5bqLU7qaSpxsXo2YlXJtVyVgJ1WD-zDxTKEqBUrSjn7ZTGefK_CPw7vdRGUbBfPHOb03CsLQVlSpKU9NelUhUx4s1vKbqGEyRChCoUZxhh7VaibDv_sv_Uawynx0Ocx5wtBd9u7GTPuTdQoBhQVC-Czo94vMNm9a2sAG9l4BEU6ZjhPBNeaKtTV-F5aZWoFFJ9ImPyhS1BFwk8dNM3EUP8AXX_XZpMTc2P3JXU59dVsEYqNJ-pprsCrfmqTlNM4erYyAqzeBb6fvSWs02-521nqkcjNwMlzGiQsqzRJslteLgtyooJHxUG7Or0ntmdHQMJevWUyc4pb0_F35l90GBcC0I0tAllI8im-X0DGsX1syL1JzOgrPa5pPW6mla-xTz4OYwFL76V1fg3-c_AEQkK67-BvEcJb6RCHSTc3cg0QKSOYVhpSTvi0MdzVoAVdsl6s3cyuAEQFDlCRtMpfSSWMx5f4BLDKmFe-Rstpa2lljamKUKqGhsY6vxuyzojVL_NEA83Jt_EWdouDW7GiqCS9Rd11KPfnEjzRsxWeAi6svXrvdPHceAVzHvkEGZj5h9okOILGlE0YL2d0By-DbxskrZNktKbPJZUoEElB3rn9yA');

    	//$reniecDni = new \Tecactus\Reniec\DNI('6VctJJd0pw1FsJ2aLxMlahOG49KAWr8ixDsUW46v');
    	//dd($reniecDni);
    	dd ($reniecDni->get($input));
    }
}