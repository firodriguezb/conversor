<link rel="stylesheet" href="css/estructura.css">
    <table>
        <thead>
            <tr>
                <th colspan="45" style="text-align: left;">
                    <img src="images/excelI.jpg" alt="ImagenI" width="400%">
                </th>
                <th colspan="1" style="text-align: right;">
                    <img src="images/excelD.png" alt="ImagenD" width="150%">
                </th>
            </tr>
            <tr>
                <th></th>
            </tr>
            <tr>
                <th colspan="46" style="text-align: center; font-size: 20px; font-weight: bold;">
                    Comisión Nacional para la Protección y Defensa de los Usuarios de Servicios Financieros
                </th>
            </tr>
            <tr>
                <th colspan="46" style="text-align: center; font-size: 22px; font-weight: bold;">
                    Nóminas 2022
                </th>
            </tr>
            <tr>
                <th></th>
            </tr>
            <tr>
                <th></th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td colspan="2" style="text-align: center; border: 1px solid black">ENERO</td>
                <td colspan="2" style="text-align: center; border: 1px solid black">FEBRERO</td>
                <td colspan="2" style="text-align: center; border: 1px solid black">MARZO</td>
                <td colspan="2" style="text-align: center; border: 1px solid black">ABRIL</td>
                <td colspan="2" style="text-align: center; border: 1px solid black">MAYO</td>
                <td colspan="2" style="text-align: center; border: 1px solid black">JUNIO</td>
                <td colspan="2" style="text-align: center; border: 1px solid black">JULIO</td>
                <td colspan="2" style="text-align: center; border: 1px solid black">AGOSTO</td>
                <td colspan="2" style="text-align: center; border: 1px solid black">SEPTIEMBRE</td>
                <td colspan="2" style="text-align: center; border: 1px solid black">OCTUBRE</td>
                <td colspan="2" style="text-align: center; border: 1px solid black">NOVIEMBRE</td>
                <td colspan="2" style="text-align: center; border: 1px solid black">DICIEMBRE</td>
                <td style="border: 1px solid black">2A. FEBRERO</td>
                <td style="border: 1px solid black">1A. JUNIO</td>
                <td style="border: 1px solid black">2A. DICIEMBRE</td>
                <td style="border: 1px solid black">2A. DICIEMBRE</td>
                <td style="border: 1px solid black">2A. NOVIEMBRE</td>
                <td style="border: 1px solid black">2A. NOVIEMBRE</td>
                <td style="border: 1px solid black">2A. NOVIEMBRE</td>
                <td style="border: 1px solid black">2A. DICIEMBRE</td>
                <td style="border: 1px solid black">2A. NOVIEMBRE</td>
                <td style="border: 1px solid black">2A. DICIEMBRE</td>
                <td style="border: 1px solid black">1A. DICIEMBRE</td>
                <td style="border: 1px solid black"></td>
                <td style="border: 1px solid black">2A. DICIEMBRE</td>
                <td style="border: 1px solid black">1A. DICIEMBRE</td>
                <td style="border: 1px solid black">2A. DICIEMBRE</td>
                <td style="border: 1px solid black">1A. DICIEMBRE</td>
                <td style="border: 1px solid black">2A. DICIEMBRE</td>
                <td style="border: 1px solid black">2A. DICIEMBRE</td>
                <td style="border: 1px solid black"></td>
            </tr>
            <tr>
                <td style="background: #000000;"></td>
                <td style="background: #833C0C; color: white; font-weight: bold;">Descripción</td>
                <td colspan="2" style="background: #833C0C; color: white; text-align: center; font-weight: bold;">PARTIDAS</td>
                <td colspan="42" style="text-align: center; border: 1px solid black; background: #833C0C; color: white; font-weight: bold;">TOTAL DE CARATULAS (PERMANENTES Y EVENTUALES)</td>
                <td rowspan="2" style="background: #833C0C; color: white; font-weight: bold;">TOTALES</td>
            </tr>
            <tr>
                <td style="background: #000000; color: white; font-weight: bold;">Percepciones</td>
                <td style="background: #833C0C"></td>
                <td style="background: #833C0C; color: white; font-weight: bold;">PERMANENTES</td>
                <td style="background: #833C0C; color: white; font-weight: bold;">EVENTUALES</td>
                <?php for ($i = 1; $i <= 24; $i++): ?>
                    <th style="border: 1px solid black; color: white; background: #833C0C; font-weight: bold; "><?php echo $i; ?></th>
                <?php endfor; ?>
                <td style="border: 1px solid black; color: white; background: #833C0C; font-weight: bold;">31</td>
                <td style="border: 1px solid black; color: white; background: #833C0C; font-weight: bold;">75</td>
                <?php for ($i = 77; $i <= 92; $i++): ?>
                    <th style="border: 1px solid black; color: white; background: #833C0C; font-weight: bold;"><?php echo $i; ?></th>
                <?php endfor; ?>
            </tr>
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
            <tr style="border: 1px solid black;"></tr>
        </tbody>
    </table>
