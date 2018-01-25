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
use \App\Models\DigemidProduct;	
use \App\Models\InsuredPharmacy;	
use \App\Helpers;	
use View;
use Redirect;
use Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model as Model;

class PharmacyController extends BaseController
{
	
	public function liquidationsAPI($input)
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
			$input = json_decode($input);
			if($input->data != "null" and $input->data != ""){
				$response = InsuredPharmacy::where('pharm_type_sale_id', '2')->where('liquidation', $input->data)->orderBy(DB::raw('abs(liquidation)'),'desc')->paginate(20);
			}else{
				$response = InsuredPharmacy::where('pharm_type_sale_id', '2')->orderBy(DB::raw('abs(liquidation)'),'desc')->paginate(20);
			}
			$total_pages = ceil($response->total()/20);
			$currentPath = Route::getFacadeRoot()->current()->uri();
			$paginate = Helpers::manual_paginate($currentPath,$currentPath.'/?page='.$response->CurrentPage(), $response->CurrentPage(), $total_pages, 4);
		return view('api.liquidationsAPI', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position, 'users' => $response, 'paginate' => $paginate, 'data' => $input->data, 'currentPage' => $response->CurrentPage()]);
	}
	public function pharmacystoreAPI($input)
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
			$input = json_decode($input);
			if($input->data != "null"){
				$response = DigemidProduct::where('name', 'like', '%' . $input->data . '%')->paginate(20);
			}else{
				$response = DigemidProduct::paginate(20);
			}
			//dd(Authorization::orderBy('created_at','desc')->first()->insureds->insurance);
			//return $response;
			$total_pages = ceil($response->total()/20);
			$currentPath = Route::getFacadeRoot()->current()->uri();
			$paginate = Helpers::manual_paginate($currentPath,$currentPath.'/?page='.$response->CurrentPage(), $response->CurrentPage(), $total_pages, 4);
		return view('api.pharmacystoreAPI', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position, 'users' => $response, 'paginate' => $paginate, 'currentPage' => $response->CurrentPage()]);
	}

	public function showRecents()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}

		return view('pharmacy.farmaciaRecents', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position]);
	}	
	public function showLiquidations()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}

		return view('pharmacy.liquidations', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position]);
	}	
	public function pharmacyStore()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
		return view('pharmacy.pharmacyStore', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position]);
	}
	public function showSales($input)
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
		return view('pharmacy.sales', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position]);
	}
	public function showViewSales()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
		return view('pharmacy.viewsales', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position]);
	}
	public function addReport()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
		return view('pharmacy.reportes', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position]);
	}
	
	
}