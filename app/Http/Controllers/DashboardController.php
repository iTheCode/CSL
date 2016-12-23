<?php

namespace App\Http\Controllers;

use Auth;
use \App\Employee as Employee;
use View;
use Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{

	public function showDashboard()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		}


		return view('dashboard', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name]);
	}
	
}