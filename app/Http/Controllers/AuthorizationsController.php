<?php

namespace App\Http\Controllers;

use Auth;
use \App\Employee as Employee;
use \App\Models\Area as Area;
use \App\Models\Authorization;	
use \App\Models\Insurance;	
use \App\Models\Insured;	
use View;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Database\Eloquent\Model as Model;

class AuthorizationsController extends BaseController
{
	public function manual_paginate($reload, $page, $tpages, $adjacents) {
		$prevlabel = "&lsaquo; Prev";
		$nextlabel = "Next &rsaquo;";
		$out = '<ul class="pagination pagination-large">';
		
		// previous label

		if($page==1) {
			$out.= "<li class='disabled'><span><a>$prevlabel</a></span></li>";
		} else if($page==2) {
			$out.= "<li><span><a href='/atenciones/?page=1'>$prevlabel</a></span></li>";
		}else {
			$out.= "<li><span><a href='/atenciones/?page=".($page-1)."'>$prevlabel</a></span></li>";

		}
		
		// first label
		if($page>($adjacents+1)) {
			$out.= "<li><a href='/atenciones/?page=1'>1</a></li>";
		}
		// interval
		if($page>($adjacents+2)) {
			$out.= "<li><a>...</a></li>";
		}

		// pages

		$pmin = ($page>$adjacents) ? ($page-$adjacents) : 1;
		$pmax = ($page<($tpages-$adjacents)) ? ($page+$adjacents) : $tpages;
		for($i=$pmin; $i<=$pmax; $i++) {
			if($i==$page) {
				$out.= "<li class='active'><a>$i</a></li>";
			}else if($i==1) {
				$out.= "<li><a href='/atenciones/?page=1'>$i</a></li>";
			}else {
				$out.= "<li><a href='/atenciones/?page=".$i."'>$i</a></li>";
			}
		}

		// interval

		if($page<($tpages-$adjacents-1)) {
			$out.= "<li><a>...</a></li>";
		}

		// last

		if($page<($tpages-$adjacents)) {
			$out.= "<li><a href='/atenciones/?page=$tpages'>$tpages</a></li>";
		}

		// next

		if($page<$tpages) {
			$out.= "<li><span><a href='/atenciones/?page=".($page+1)."'>$nextlabel</a></span></li>";
		}else {
			$out.= "<li class='disabled'><span><a>$nextlabel</a></span></li>";
		}
		
		$out.= "</ul>";
		return $out;
	}


	public function showAuthorizations()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
			$response = Authorization::orderBy('date','desc')->paginate(20);
			//dd(Authorization::orderBy('created_at','desc')->first()->insureds->insurance);
			//return $response;
			$total_pages = ceil($response->total()/20);
			$paginate = self::manual_paginate('/atenciones?page='.$response->CurrentPage(), $response->CurrentPage(), $total_pages, 4);
		return view('authorizations', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position, 'users' => $response, 'paginate' => $paginate]);
	}
	
	public function viewAuthorization($input)
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
			$response = Authorization::find($input);
			return $response;
		return view('authorizations', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position, 'users' => $response, 'paginate' => $paginate]);
	}
	public function createAuthorization()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
			//dd($response = Authorization::all()->first()->patient);
		return view('createAuthorization', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position]);
	}

	public function createSITEDS()
	{

	}

	public function createParticular()
	{
		
	}
}