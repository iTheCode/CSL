<?php

namespace App\Http\Controllers;

use Auth;
use \App\Employee as Employee;
use \App\Models\Authorization;	
use \App\Models\Coverage;	
use \App\Models\PayDocument;
use \App\Models\PayEDocument;		
use \App\Models\Patient;	
use \App\Models\Area as Area;
use View;
use Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{

	public function showDashboard()
	{
		if (Auth::check()) {
		    $user = Auth::user();
		    $name = $user->name." ".$user->paternal;
		    $position = $user->area->name;
		}
		$month = "01";
		$year = "2016";


		$atendidos_mes = Authorization::where(DB::raw('MONTH(date) = ? AND YEAR(date) '), [$month, $year])->groupBy('patient_id')->get();
		$atendidos_año_anterior = Authorization::where(DB::raw('YEAR(date)'), [$year-1])->groupBy('patient_id')->get();
		$atenciones_mes = count($atendidos_mes);
		$atenciones_año_anterior = count($atendidos_año_anterior);
		$porcentaje_antenciones_mes = number_format((100*$atenciones_mes)/$atenciones_año_anterior,2);

		$emergencias_mes = count(Authorization::join("coverages AS c", "c.authorization_id", "=", "authorizations.id")->join("sub_coverage_types AS sub", "c.sub_coverage_type_id", "=", "sub.id")->join("coverage_types AS ct", "ct.id", "=", "sub.coverage_type_id")->where(DB::raw('MONTH(authorizations.date) = ? AND YEAR(authorizations.date) '), [$month, $year])->where('ct.code', '6')->get());
		$emergencias_año_anterior = count(Authorization::join("coverages AS c", "c.authorization_id", "=", "authorizations.id")->join("sub_coverage_types AS sub", "c.sub_coverage_type_id", "=", "sub.id")->join("coverage_types AS ct", "ct.id", "=", "sub.coverage_type_id")->where(DB::raw('YEAR(date) '), [$year-1])->where('ct.code', '6')->get());
		$porcentaje_emergencias_mes = number_format((100*$emergencias_mes )/$emergencias_año_anterior,2);

		$pacientes_nuevos_mes = count(Patient::where(DB::raw('MONTH(created_at) = ? AND YEAR(created_at) '), [$month, $year])->get());
		$pacientes_año_anterior = count(Patient::where(DB::raw('YEAR(created_at) '), [$year-1])->get());
		$porcentaje_pacientes_mes = number_format((100*$pacientes_nuevos_mes )/$pacientes_año_anterior,2);


		$pay_documents_mes = count(PayDocument::where(DB::raw('MONTH(created_at) = ? AND YEAR(created_at) '), [$month, $year])->get()) + count(PayEDocument::where(DB::raw('MONTH(created_at) = ? AND YEAR(created_at) '), [$month, $year])->get());
		$pay_documents_año_anterior = count(PayDocument::where(DB::raw('YEAR(created_at) '), [$year-1])->get()) + count(PayEDocument::where(DB::raw('YEAR(created_at)'), [$year-1])->get()); 
		$porcentaje_pay_documents_mes = number_format((100*$pay_documents_mes)/$pay_documents_año_anterior,2);

		return view('dashboard', ['system_name' => 'CSLuren', 'this_year' => date('Y'), 'user' => $name, 'position' => $position, 'atenciones_mes' => $atenciones_mes, 'porcentaje_antenciones_mes' => $porcentaje_antenciones_mes, 'emergencias_mes' => $emergencias_mes, 'porcentaje_emergencias_mes' => $porcentaje_emergencias_mes, 'pacientes_nuevos_mes' => $pacientes_nuevos_mes, 'porcentaje_pacientes_mes' => $porcentaje_pacientes_mes, 'pay_documents_mes' => $pay_documents_mes, 'porcentaje_pay_documents_mes' => $porcentaje_pay_documents_mes]);
	}
	
}