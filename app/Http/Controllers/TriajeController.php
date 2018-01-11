<?php

namespace App\Http\Controllers;

use Auth;
use \App\Employee as Employee;
use View;
use Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Controller as BaseController;

/**
* 
*/
class TriajeController extends BaseController
{
	
	public function showAuthorizations()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
		return view('triaje.BaseTriaje', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position]);
	}
		public function showFormulario($input)
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
		return view('triaje.FormularioTriaje', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position]);
	}

}