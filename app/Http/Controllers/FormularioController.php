<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FormularioController extends Controller
{
    public function index(){
        $cpns = DB::select('SELECT DISTINCT centro_proceso_nomina from detalles_de_pago');
        $periodos = DB::table('periodos_nomina')
                    ->select(DB::raw("cve_periodo || ' - ' || descripcion AS concatenado"))
                    ->orderByRaw("TO_NUMBER(cve_periodo) ASC")
                    ->get();
        $plazas = DB::select('SELECT DISTINCT cve_tipo_contrato from plazas');
        return view('formulario')->with(['periodos' => $periodos, 'cpns' => $cpns, 'plazas' => $plazas]);
    }
}
