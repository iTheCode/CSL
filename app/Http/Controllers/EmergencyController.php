<?php

namespace App\Http\Controllers;

use Auth;
use \App\Employee as Employee;
use View;
use Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Controller as BaseController;

@date_default_timezone_set('America/Lima');

/**
* 
*/
class EmergencyController extends BaseController
{
	
	public function showLiquidations()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
		return view('emergency.liquidations', []);
	}
		

}