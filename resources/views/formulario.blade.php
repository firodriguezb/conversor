<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extractor</title>
    <link rel="stylesheet" href="css/formulario.css">
    <script src="js/formulario.js"></script>
</head>
<body>
    <form method="GET" action="{{ route('extractor') }}" id="formulario">
        <h2 class="logo">
            <img src="images/logo.png" alt="">
        </h2>
        <h3>Criterios de Selección</h3>
        <label for="cpn">CPN</label>
        <select name="cpn" id="cpn" onchange="togglePlaza(this)">
            <option value="">SELECCIONE UNA OPCION</option>
            @foreach($cpns as $cpn)
                <option value="{{ $cpn->centro_proceso_nomina }}">{{ $cpn->centro_proceso_nomina   }}</option>
            @endforeach
        </select>
        <br>
        <label for="periodo">Periodo</label>
        <select name="periodo[]" id="periodo" multiple size=10>
            @foreach($periodos as $periodo)
                <option value="{{ $periodo->concatenado }}">{{ $periodo->concatenado   }}</option>
            @endforeach
        </select>
        <br>
        <label for="plaza">Tipo Plaza</label>
        <select name="plaza" id="plaza">
            <option value="">SELECCIONE UNA OPCION</option>
            @foreach($plazas as $plaza)
                <option value="{{ $plaza->cve_tipo_contrato }}">{{ $plaza->cve_tipo_contrato   }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Generar Reporte</button>
    </form>
</body>
</html>
