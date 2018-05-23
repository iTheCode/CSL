<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use \App\Employee as Employee;
use View;
use Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Controller as BaseController;

class LoginController extends BaseController
{

	public function showLogin()
	{
		if(Auth::user())
		{
			return redirect()->route('dashboard');
		}
    	return view('login', ['system_name' => 'CSLuren']);
	}

	public function doLogin()
	{
		try {
			 $user_credentials = array(
	            'username' => Input::get('username'),
	            'password' => Input::get('password')
	        );
	        if (Auth::attempt($user_credentials)) {
	            return redirect()->route('login')->with('status', 'Muy bien');
	        }else{
				if(Auth::validate($user_credentials)){
				     return redirect()->route('login')->with('status', 'No se ha validado al usuario.');
				} else {
				     return redirect()->route('login')->with('status', 'Ha ocurrido un error');
				}
	        	
	        }
			
		} catch (Auth $e) {
			return redirect()->route('login')->with('status', $e->getMessage());
		}
	}
	public function doLogout(){
        Auth::logout();
        Session::flush();
        return Redirect::to('/');
    }
}
