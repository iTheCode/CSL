<?php 

namespace App;

class Helpers {
	public static function sunat_status($num){
		switch ($num) {
			case '1':
				return 'Auditado';
				break;
			case '2':
				return 'SUNAT';
				break;
			case '3':
				return 'Anulado';
				break;
			
			default:
				return 'Pendiente';
				break;
		}
	}
	public static function number_format_sunat($number,$decimals){
		return (string) str_replace(",","",number_format($number,$decimals));
	}
	public static function numtoletras($xcifra)
	{
	    $xarray = array(0 => "Cero",
	        1 => "UN", "DOS", "TRES", "CUATRO", "CINCO", "SEIS", "SIETE", "OCHO", "NUEVE",
	        "DIEZ", "ONCE", "DOCE", "TRECE", "CATORCE", "QUINCE", "DIECISEIS", "DIECISIETE", "DIECIOCHO", "DIECINUEVE",
	        "VEINTI", 30 => "TREINTA", 40 => "CUARENTA", 50 => "CINCUENTA", 60 => "SESENTA", 70 => "SETENTA", 80 => "OCHENTA", 90 => "NOVENTA",
	        100 => "CIENTO", 200 => "DOSCIENTOS", 300 => "TRESCIENTOS", 400 => "CUATROCIENTOS", 500 => "QUINIENTOS", 600 => "SEISCIENTOS", 700 => "SETECIENTOS", 800 => "OCHOCIENTOS", 900 => "NOVECIENTOS"
	    );
	    $xcifra = trim($xcifra);
	    $xlength = strlen($xcifra);
	    $xpos_punto = strpos($xcifra, ".");
	    $xaux_int = $xcifra;
	    $xdecimales = "00";
	    if (!($xpos_punto === false)) {
	        if ($xpos_punto == 0) {
	            $xcifra = "0" . $xcifra;
	            $xpos_punto = strpos($xcifra, ".");
	        }
	        $xaux_int = substr($xcifra, 0, $xpos_punto);
	        $xdecimales = substr($xcifra . "00", $xpos_punto + 1, 2);
	    }
	 
	    $XAUX = str_pad($xaux_int, 18, " ", STR_PAD_LEFT); 
	    $xcadena = "";
	    for ($xz = 0; $xz < 3; $xz++) {
	        $xaux = substr($XAUX, $xz * 6, 6);
	        $xi = 0;
	        $xlimite = 6; 
	        $xexit = true; 
	        while ($xexit) {
	            if ($xi == $xlimite) {
	                break; 
	            }
	 
	            $x3digitos = ($xlimite - $xi) * -1; 
	            $xaux = substr($xaux, $x3digitos, abs($x3digitos)); 
	            for ($xy = 1; $xy < 4; $xy++) {
	                switch ($xy) {
	                    case 1: 
	                        if (substr($xaux, 0, 3) < 100) { 
	                             
	                        } else {
	                            $key = (int) substr($xaux, 0, 3);
	                            if (TRUE === array_key_exists($key, $xarray)){ 
	                                $xseek = $xarray[$key];
	                                $xsub = subfijo($xaux); 
	                                if (substr($xaux, 0, 3) == 100)
	                                    $xcadena = " " . $xcadena . " CIEN " . $xsub;
	                                else
	                                    $xcadena = " " . $xcadena . " " . $xseek . " " . $xsub;
	                                $xy = 3; 
	                            }
	                            else { 
	                                $key = (int) substr($xaux, 0, 1) * 100;
	                                $xseek = $xarray[$key]; 
	                                $xcadena = " " . $xcadena . " " . $xseek;
	                            }
	                        } 
	                        break;
	                    case 2:
	                        if (substr($xaux, 1, 2) < 10) {
	                             
	                        } else {
	                            $key = (int) substr($xaux, 1, 2);
	                            if (TRUE === array_key_exists($key, $xarray)) {
	                                $xseek = $xarray[$key];
	                                $xsub = subfijo($xaux);
	                                if (substr($xaux, 1, 2) == 20)
	                                    $xcadena = " " . $xcadena . " VEINTE " . $xsub;
	                                else
	                                    $xcadena = " " . $xcadena . " " . $xseek . " " . $xsub;
	                                $xy = 3;
	                            }
	                            else {
	                                $key = (int) substr($xaux, 1, 1) * 10;
	                                $xseek = $xarray[$key];
	                                if (20 == substr($xaux, 1, 1) * 10)
	                                    $xcadena = " " . $xcadena . " " . $xseek;
	                                else
	                                    $xcadena = " " . $xcadena . " " . $xseek . " Y ";
	                            } 
	                        } 
	                        break;
	                    case 3:
	                        if (substr($xaux, 2, 1) < 1) { 
	                             
	                        } else {
	                            $key = (int) substr($xaux, 2, 1);
	                            $xseek = $xarray[$key];
	                            $xsub = subfijo($xaux);
	                            $xcadena = " " . $xcadena . " " . $xseek . " " . $xsub;
	                        }
	                        break;
	                }
	            }
	            $xi = $xi + 3;
	        }
	 
	        if (substr(trim($xcadena), -5, 5) == "ILLON") 
	            $xcadena.= " DE";
	 
	        if (substr(trim($xcadena), -7, 7) == "ILLONES")
	            $xcadena.= " DE";
	        if (trim($xaux) != "") {
	            switch ($xz) {
	                case 0:
	                    if (trim(substr($XAUX, $xz * 6, 6)) == "1")
	                        $xcadena.= "UN BILLON ";
	                    else
	                        $xcadena.= " BILLONES ";
	                    break;
	                case 1:
	                    if (trim(substr($XAUX, $xz * 6, 6)) == "1")
	                        $xcadena.= "UN MILLON ";
	                    else
	                        $xcadena.= " MILLONES ";
	                    break;
	                case 2:
	                    if ($xcifra < 1) {
	                        $xcadena = "CERO SOLES Y $xdecimales/100 ";
	                    }
	                    if ($xcifra >= 1 && $xcifra < 2) {
	                        $xcadena = "UN SOL Y $xdecimales/100 ";
	                    }
	                    if ($xcifra >= 2) {
	                        $xcadena.= " Y $xdecimales/100 SOLES ";
	                    }
	                    break;
	            } 
	        } 
	        $xcadena = str_replace("VEINTI ", "VEINTI", $xcadena); 
	        $xcadena = str_replace("  ", " ", $xcadena);
	        $xcadena = str_replace("UN UN", "UN", $xcadena);
	        $xcadena = str_replace("  ", " ", $xcadena); 
	        $xcadena = str_replace("BILLON DE MILLONES", "BILLON DE", $xcadena);
	        $xcadena = str_replace("BILLONES DE MILLONES", "BILLONES DE", $xcadena); 
	        $xcadena = str_replace("DE UN", "UN", $xcadena); 
	    } 
	    return trim($xcadena);
	}
 
 
	public static function subfijo($xx)
	{ 
	    $xx = trim($xx);
	    $xstrlen = strlen($xx);
	    if ($xstrlen == 1 || $xstrlen == 2 || $xstrlen == 3)
	        $xsub = "";
	    if ($xstrlen == 4 || $xstrlen == 5 || $xstrlen == 6)
	        $xsub = "MIL";
	    return $xsub;
	}




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
			$out.= "<li><span><a href='#' onclick='load_data(1)'>$prevlabel</a></span></li>";
		}else {
			$out.= "<li><span><a href='#' onclick='load_data(".($page-1).")'>$prevlabel</a></span></li>";

		}
		
		// first label
		if($page>($adjacents+1)) {
			$out.= "<li><a href='#' onclick='load_data(1)'>1</a></li>";
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
				$out.= "<li><a href='#' onclick='load_data(1)'>$i</a></li>";
			}else {
				$out.= "<li><a href='#' onclick='load_data(".$i.")'>$i</a></li>";
			}
		}

		// interval

		if($page<($tpages-$adjacents-1)) {
			$out.= "<li><a>...</a></li>";
		}

		// last

		if($page<($tpages-$adjacents)) {
			$out.= "<li><a href='#' onclick='load_data($tpages)'>$tpages</a></li>";
		}

		// next

		if($page<$tpages) {
			$out.= "<li><span><a href='#' onclick='load_data(".($page+1).")'>$nextlabel</a></span></li>";
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
		public static function get_services($list){
			foreach($list as $item){
				$array[$item->id] = $item->code." - ".$item->name;
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


		public static function get_ruc($ruc){
				return json_decode(file_get_contents("http://edunegociosperu.com/sunat-ws/?ruc=".$ruc));
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