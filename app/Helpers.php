<?php 

namespace App;

class Helpers {
	public static function get_age( $fecha ) {
		if(isset($fecha)){
	    	list($Y,$m,$d) = explode("-",$fecha);
	    	return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y )." años";
	    }
	    else{
	    	return "Corregir Fecha";
	    }
	}
	public static function time_since($since) {
	    $chunks = array(
	        array(60 * 60 * 24 * 365 , 'year'),
	        array(60 * 60 * 24 * 30 , 'month'),
	        array(60 * 60 * 24 * 7, 'week'),
	        array(60 * 60 * 24 , 'day'),
	        array(60 * 60 , 'hour'),
	        array(60 , 'minute'),
	        array(1 , 'second')
	    );

	    for ($i = 0, $j = count($chunks); $i < $j; $i++) {
	        $seconds = $chunks[$i][0];
	        $name = $chunks[$i][1];
	        if (($count = floor($since / $seconds)) != 0) {
	            break;
	        }
	    }

	    $print = ($count == 1) ? '1 '.$name : "$count {$name}s";
	    return $print;
	}
	public static function manual_paginate($this_p,$reload, $page, $tpages, $adjacents) {
		$prevlabel = "&lsaquo; Prev";
		$nextlabel = "Next &rsaquo;";
		$out = '<ul class="pagination pagination-large">';
		
		// previous label

		if($page==1) {
			$out.= "<li class='disabled'><span><a>$prevlabel</a></span></li>";
		} else if($page==2) {
			$out.= "<li><span><a href='/$this_p/?page=1'>$prevlabel</a></span></li>";
		}else {
			$out.= "<li><span><a href='/$this_p/?page=".($page-1)."'>$prevlabel</a></span></li>";

		}
		
		// first label
		if($page>($adjacents+1)) {
			$out.= "<li><a href='/$this_p/?page=1'>1</a></li>";
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
				$out.= "<li><a href='/$this_p/?page=1'>$i</a></li>";
			}else {
				$out.= "<li><a href='/$this_p/?page=".$i."'>$i</a></li>";
			}
		}

		// interval

		if($page<($tpages-$adjacents-1)) {
			$out.= "<li><a>...</a></li>";
		}

		// last

		if($page<($tpages-$adjacents)) {
			$out.= "<li><a href='/$this_p/?page=$tpages'>$tpages</a></li>";
		}

		// next

		if($page<$tpages) {
			$out.= "<li><span><a href='/$this_p/?page=".($page+1)."'>$nextlabel</a></span></li>";
		}else {
			$out.= "<li class='disabled'><span><a>$nextlabel</a></span></li>";
		}
		
		$out.= "</ul>";
		return $out;
	}

		public static function get_hash_sub($sub_coverage_types){
			foreach($sub_coverage_types as $sub_coverage_type){
				$array[$sub_coverage_type->id] = $sub_coverage_type->name." - ".$sub_coverage_type->code." - ".$sub_coverage_type->other_code;
			}
			return $array;
		}
		public static function get_list($list){
			foreach($list as $item){
				$array[$item->id] = $item->name;
			}
			return $array;
		}
		public static function get_codes($list){
			foreach($list as $item){
				$array[$item->id] = $item->name." | ".$item->code;
			}
			return $array;
		}
		public static function get_doctors($doctors){
			foreach($doctors as $doctor){
				$array[$doctor->id] = $doctor->complet_name;
			}
			return $array;
		}

		public static function get_diagnostic($diagnostic_types){
			foreach($diagnostic_types as $diagnostic){
				$array[$diagnostic->id] = $diagnostic->name." - ".$diagnostic->code;
			}
			return $array;
		}

		public static function get_diagnostic_codes($diagnostic_types){
			foreach($diagnostic_types as $diagnostic){
				$array[$diagnostic->id] = $diagnostic->code;
			}
			return $array;
		}


		public static function get_dni($input){
				$result = file_get_contents("http://edunegociosperu.com/reniec/?dni=".$input);
				if(!empty($result)){
					preg_match("/\"ApellidoP\": \"(.*)\"/",$result,$salida1);

					preg_match("/\"ApellidoM\": \"(.*)\"/",$result,$salida2);

					preg_match("/\"Nombres\": \"(.*)\"/",$result,$salida3);

					$json["name"] = $salida3[1];
					$json["paternal"] = $salida1[1];
					$json["maternal"] = $salida2[1];
				}else{
					$reniecDni = new \Tecactus\Reniec\DNI('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjQ5MGJlMjlmMTUwY2ZiMzQxMmMzMmVlODcyYmY5OTY0ZmRkY2MyMzkxYmQ3ZTFjYTNjY2VmYWQ2MjcyOTA4ZWE2OGVlMDRkNmUwZTBkZjE2In0.eyJhdWQiOiIxIiwianRpIjoiNDkwYmUyOWYxNTBjZmIzNDEyYzMyZWU4NzJiZjk5NjRmZGRjYzIzOTFiZDdlMWNhM2NjZWZhZDYyNzI5MDhlYTY4ZWUwNGQ2ZTBlMGRmMTYiLCJpYXQiOjE0OTI4MTM0OTgsIm5iZiI6MTQ5MjgxMzQ5OCwiZXhwIjoxODA4MzQ2Mjk4LCJzdWIiOiI1MCIsInNjb3BlcyI6WyJ1c2UtcmVuaWVjIl19.SfnCgVhQrLkVkysOdx83vbnZejxXO1-NMcH_pMglT7r3PmjN4r5RQbT80s5tPeaNT6t27HwEePIKW4D10O6t2CNsjuJSPx2Q6xmCMm8b9IejvPKlTUndgBGF4ncgPCmiI4ek4pDlOw1a-cDKcPLgzhNCLuyfGJWPa01TNsj6IVgFiUMmTnt2pF5iUWEDTKdWDsbjDT4fCCLSUS9zpkH8PoTGl7-ZabXSJ48DzEw2Se_Qp7Uk8dr72TElhNo4sCCAtqznZsqbKmc3uwmQt2uggBWJteB9jpsu-9VBFgUDK2cpzBJKlmLNFRlasTRGT7Z508YHmDprsClGhqM5rR-YAqdSU2-ARX69LrGsyZ9MTy3kSrUf0PZz4JUGnaLlvky-ONJMf7OOzKK4_hGDUYiU9Xbc_ALyH4lqc5407Vta5eXm6gmDn3ta4GwsBRjaN3hMqqZQSEhRQFMxfLiI2DHaLW37GjKKI2Q9hFQOQpT14imEKNTtY8vHH1qXg40UTgAdtlLarXPSjA4ULI3aAe8h3arux42hVcapQAvDO6Vjal_3bUXA0tfrLa49xUZfBAIhR9XsjmU7xVsa-zFTCDk2LFRvzqZipW_ygOkiPsG_lM6QV5jV1YU-qxtFYG33LQM0mYQuzBbdlT7qPXeuLGE2lhx1l1LcXvhTpKjdVm3kXmE');
					$json_reniec = $reniecDni->get($input);
					$json["name"] = $json_reniec->nombres;
					$json["paternal"] = $json_reniec->apellido_paterno;
					$json["maternal"] = $json_reniec->apellido_materno;

				}
				return json_encode($json);
			
		}
}