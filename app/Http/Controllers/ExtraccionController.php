<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportData;

class ExtraccionController extends Controller
{
    public function index(Request $request) {
        // Obtener los parámetros del formulario
        $cpn = request('cpn');
        $periodo = request('periodo');
        $plaza = request('plaza');
        // Construir la consulta SQL
        $query = DB::table('detalles_de_pago AS d')
            ->join('conceptos AS c', 'd.cve_concepto', '=', 'c.cve_concepto')
            ->join('plazas AS p', 'd.cve_plaza', '=', 'p.cve_plaza')
            ->join('periodos_nomina AS pn', function ($join) use ($cpn) {
                $join->on('d.cve_periodo', '=', 'pn.cve_periodo')
                    ->where('pn.cve_centro_proceso_nomina', '=', $cpn);
            })
            ->groupBy('c.cve_concepto', 'c.descripcion', 'pn.cve_periodo', 'pn.descripcion', 'p.cve_tipo_contrato', 'd.centro_proceso_nomina')
            ->select(
                DB::raw("c.cve_concepto || ' - ' || c.descripcion AS concepto_descripcion"),
                DB::raw("pn.cve_periodo || ' - ' || pn.descripcion AS periodo_descripcion"),
                'p.cve_tipo_contrato',
                'd.centro_proceso_nomina',
                DB::raw('SUM(d.importe) AS importe_total')
            );
        // Aplicar los filtros del formulario
        if (!empty($periodo)) {
            $periodos = is_array($periodo) ? $periodo : [$periodo];
            $query->whereIn(DB::raw("pn.cve_periodo || ' - ' || pn.descripcion"), $periodos);
        }
        if (!empty($plaza)) {
            $query->where('p.cve_tipo_contrato', $plaza);
        }
        // Aplicar la ordenación numérica
        $query->orderByRaw("TO_NUMBER(c.cve_concepto)");
        // Ejecutar la consulta
        $informacion = $query->get();
        // Devolver documento Excel con los resultados
        $export = new ExportData($informacion);
        $fileName = 'reporte.xlsx';

        // Descargar el archivo con el nombre deseado
        return Excel::download($export, $fileName);
    }
}
