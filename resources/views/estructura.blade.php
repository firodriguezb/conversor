    <table>
        <thead>
            <tr>
                <th>Concepto Descripción</th>
                <th>Permanentes</th>
                <th>Eventuales</th>
                <th>Periodo Descripción</th>
                <th>Tipo Contrato</th>
                <th>Centro Proceso Nómina</th>
                <th>Importe Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
                <tr>
                    <td>{{ $row->concepto_descripcion }}</td>
                    <td></td>
                    <td></td>
                    <td>{{ $row->periodo_descripcion }}</td>
                    <td>{{ $row->cve_tipo_contrato }}</td>
                    <td>{{ $row->centro_proceso_nomina }}</td>
                    <td>{{ $row->importe_total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
