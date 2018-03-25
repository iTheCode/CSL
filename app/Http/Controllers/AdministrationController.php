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
use \App\Models\InsuredService;	
use \App\Models\PurchaseCoverageService;
use \App\Models\PurchaseInsuredService;	
use \App\Models\PurcharseParticularService;	
use \App\Models\Service;	
use \App\Helpers;	
use View;
use Redirect;
use Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model as Model;

class AdministrationController extends BaseController
{
	public function usersAPI($input)
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
			$input = json_decode($input);
			if($input->data != "null"){
				$response = Employee::where('name', 'like', '%' . $input->data . '%')->orderBy('area_id','desc')->paginate(20);
			}else{
				$response = Employee::orderBy('area_id','desc')->paginate(20);
			}

			//dd(Authorization::orderBy('created_at','desc')->first()->insureds->insurance);
			//return $response;
			$total_pages = ceil($response->total()/20);
			$currentPath = Route::getFacadeRoot()->current()->uri();
			$paginate = Helpers::manual_paginate($currentPath,$currentPath.'/?page='.$response->CurrentPage(), $response->CurrentPage(), $total_pages, 4);
		return view('api.usersAPI', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position, 'users' => $response, 'paginate' => $paginate, 'currentPage' => $response->CurrentPage()]);
	}
	public function servicesAPI($input)
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
			$input = json_decode($input);
			if($input->data != "null"){
				$response = Service::where('name', 'like', '%' . $input->data . '%')->orderBy('id','asc')->paginate(20);
			}else{
				$response = Service::orderBy('id','asc')->paginate(20);
			}

			//dd(Authorization::orderBy('created_at','desc')->first()->insureds->insurance);
			//return $response;
			$total_pages = ceil($response->total()/20);
			$currentPath = Route::getFacadeRoot()->current()->uri();
			$paginate = Helpers::manual_paginate($currentPath,$currentPath.'/?page='.$response->CurrentPage(), $response->CurrentPage(), $total_pages, 4);
		return view('api.servicesAPI', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position, 'users' => $response, 'paginate' => $paginate, 'currentPage' => $response->CurrentPage()]);
	}
	public function personalAPI($input)
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
			$input = json_decode($input);
			if($input->data != "null"){
				$response = Doctor::where('complet_name', 'like', '%' . $input->data . '%')->orderBy('id','asc')->paginate(20);
			}else{
				$response = Doctor::orderBy('id','asc')->paginate(20);
			}

			//dd(Authorization::orderBy('created_at','desc')->first()->insureds->insurance);
			//return $response;
			$total_pages = ceil($response->total()/20);
			$currentPath = Route::getFacadeRoot()->current()->uri();
			$paginate = Helpers::manual_paginate($currentPath,$currentPath.'/?page='.$response->CurrentPage(), $response->CurrentPage(), $total_pages, 4);
		return view('api.personalAPI', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position, 'users' => $response, 'paginate' => $paginate, 'currentPage' => $response->CurrentPage()]);
	}
	public function showUsers()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
		return view('administration.usuarios', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position]);
	}
	public function showPersonal()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
		return view('administration.personal', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position]);
	}
	public function showServices()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
		return view('administration.services', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position]);
	}
	public function showHourMedic()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
		return view('administration.hour_medic', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position]);
	}

	public function createUser(Request $request){
		$user = new Employee();
		$user->siteds_code = $request::get('user_code');		
		$user->name = $request::get('firstname');
		$user->paternal = $request::get('paternal');
		$user->maternal = $request::get('maternal');
		$user->username = $request::get('user');
		$user->password = $request::get('password');
		$user->area_id = $request::get();
		$user->email = $request::get('email');

		if($user->save()){
			//verdadero
		}
	}

	public function editUser(Request $request){
		$user = Employee::find($request::get('id'));
		$user->siteds_code = $request::get('user_code');		
		$user->name = $request::get('firstname');
		$user->paternal = $request::get('paternal');
		$user->maternal = $request::get('maternal');
		$user->username = $request::get('user');
		$user->password = $request::get('password');
		$user->area_id = $request::get();
		$user->email = $request::get('email');

		if($user->save()){
			//verdadero
		}
	}

	public function deleteUser(Request $request){
		$user = Employee::find($request::get('id'));

		if($user->delete()){
			//verdadero
		}
	}
}