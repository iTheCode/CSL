<?php 
namespace App;
class Helpers {
	public static function count_element ($element){
		return count($element);
	}
	public static function days_ago ($date){
		$datetime1 = new \DateTime($date);
		$datetime2 = new \DateTime('now');
		$interval = $datetime1->diff($datetime2);
		return $interval->format('%R%a días');
	}
	public static function get_color($id = null){
		switch ($id) {
			case '1':
				return "btn-inverse";
				break;
			
			case '2':
				return "btn-primary";
				break;
			
			case '3':
				return "btn-info";
				break;
			
			case '4':
				return "btn-pink";
				break;
			
			case '5':
				return "btn-success";
				break;
			
			case '6':
				return "btn-warning";
				break;
			
			case '7':
				return "btn-danger";
				break;
			
			case '8':
				return "btn-purple";
				break;
			
			default:
				return "btn-default";
				break;
		}
	}
	public static function save_file($document,$path,$content,$method){
		switch ($method) {
			case "ftp_luren":
				$upload = @file_put_contents('ftp://root:81848133@s1.clinicaluren.com.pe:8900/'.$path."".$document, $content);
				if ( $upload === FALSE ) { $return = false; } else { $return = true; }
				break;
			case "url_luren":
				$domain = 'http://s1.clinicaluren.com.pe:9000/';
				$token = "Y6qqncSSM";
				$ch = curl_init();
				$data= array(
					'path' => urlencode($path),
					'document' => urlencode($document),
					'content' => urlencode($content),
					'token' => urlencode($token)
				);
				curl_setopt($ch, CURLOPT_URL, $domain);
				curl_setopt($ch, CURLOPT_POST, count($data));
		        if (is_array($data)) {
		            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
		        }
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$server_output = @curl_exec($ch);
				curl_close ($ch);
				if ($server_output == "OK") { $return = true; } else { $return = false; }
				break;
			case "local":
				if(!file_exists($path.$document)){
				    $fc = iconv('UTF-8//IGNORE', 'ISO-8859-1//IGNORE', $content); 
					$file = fopen($path.$document, "w:ANSI");
					fwrite($file, $fc);
					fclose($file);
					$return = true;
				}
				break;
			default:
				$return = false;
				break;
		}
		return $return;
	}
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
	public static function number_format_cond($number,$space){
		return (string) str_pad($number, $space, "0",STR_PAD_LEFT);
	}
	public static function number_format_sunat($number,$decimals){
		return (string) str_replace(",","",number_format($number,$decimals));
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
	                                $xsub = Helpers::subfijo($xaux);
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
	                            $xsub = Helpers::subfijo($xaux);
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
			$out.= "<li><span><a href='#' onclick='load_data(1,$(\"#search\"))'>$prevlabel</a></span></li>";
		}else {
			$out.= "<li><span><a href='#' onclick='load_data(".($page-1).",$(\"#search\"))'>$prevlabel</a></span></li>";
		}
		
		// first label
		if($page>($adjacents+1)) {
			$out.= "<li><a href='#' onclick='load_data(1,$(\"#search\"))'>1</a></li>";
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
				$out.= "<li><a href='#' onclick='load_data(1,$(\"#search\"))'>$i</a></li>";
			}else {
				$out.= "<li><a href='#' onclick='load_data(".$i.",$(\"#search\"))'>$i</a></li>";
			}
		}
		// interval
		if($page<($tpages-$adjacents-1)) {
			$out.= "<li><a>...</a></li>";
		}
		// last
		if($page<($tpages-$adjacents)) {
			$out.= "<li><a href='#' onclick='load_data($tpages,$(\"#search\"))'>$tpages</a></li>";
		}
		// next
		if($page<$tpages) {
			$out.= "<li><span><a href='#' onclick='load_data(".($page+1).",$(\"#search\"))'>$nextlabel</a></span></li>";
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
					$reniecDni = new \Tecactus\Reniec\DNI('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdkNDI0YTM5OWM4Nzk0MDNmNzA1Yjg1YTg0NDJlZDI2OTI1NGZhOTc4YzZhNDgzMzIzNWFkN2MwMzM5N2I1ZGYxNTNlODk1ZTdjNDNmMmZmIn0.eyJhdWQiOiIxIiwianRpIjoiN2Q0MjRhMzk5Yzg3OTQwM2Y3MDViODVhODQ0MmVkMjY5MjU0ZmE5NzhjNmE0ODMzMjM1YWQ3YzAzMzk3YjVkZjE1M2U4OTVlN2M0M2YyZmYiLCJpYXQiOjE1MTUwMTU1MTQsIm5iZiI6MTUxNTAxNTUxNCwiZXhwIjoxNTQ2NTUxNTE0LCJzdWIiOiI1MCIsInNjb3BlcyI6WyJ1c2UtcmVuaWVjIiwidXNlLXN1bmF0Il19.CFgNhQ-8xL9QDqb9wV3ea8pv5AJPfwhxQdU7gWQ1ZytUbWKtxfLrRcZAK_tDo80xlW5M9NkI6tDQ1QFAoP9O8B12KfSY_3dZZZpNnMOTYexiQDtXA-H_eCpwEgBs6xlrGywQdUh5VRw3Berht-T1hflXDV4zxZ5gzuljlZ8a3sH3Nnh0ZeVITlFgU2AtpKb1xT63O1quhGbV-Gnzjm3aK-iMSyGhymhAGFBPy6HbMxqkvM1uN9VU37eB3Zn0n1rf9IMAdD2iFjgQCxCpRWwFndkHjGCht0mQ_zWdnWA9f7y2spQkRhFSuhM1m6XrKE3UAn_bYMwpQzBZ3ydzuGbYGg19J-kn7iSrU3hoHgYiIDvOSV1xWBVuRIMxSyFeL2Q1OJVx4mDb5B0KnxI3Ms2-GpFgYwslto-1xK5gwFGyf0l8n27mnvxPFRbrWHN4e98CUdIf7MZtuFmWbHLDvr5UvYMRG3z0UM_qljKzqJqUxn9sbgsZawYJHMEqVeIsboGkQ48gpuHM4I8DJg6Jr2jat1rTyoJANHWpjOBpdykIQ6F9ysxpN7MR5YnflSUA6NVim1qYIpeLKt-rHuyp-amc_ozncY1qoY58vABFV4uODtikRURFO6duyfCEfBCA5EqFOxpy-Gr5eEkr8s35yNZQDZwe2dN1nnE45w4Sy0ZSARE');
					$json_reniec = $reniecDni->get($input);
					$json["name"] = $json_reniec->nombres;
					$json["paternal"] = $json_reniec->apellido_paterno;
					$json["maternal"] = $json_reniec->apellido_materno;
				return json_encode($json);
			
		}
}