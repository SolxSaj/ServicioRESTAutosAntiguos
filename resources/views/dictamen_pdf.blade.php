<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{public_path('css/app.css')}}" rel="stylesheet">
    <title>PDF</title>
</head>
<body>
    <header>
        <h1>Universidad Politénica de Pachuca</h1>
    </header>
    <footer>
        <h1>www.upp.com</h1>
    </footer>  
    <main>
        <div class="first-page">
            <h2>Universidad Politécnica de Pachuca</h2>
            <h2>Programa Educativo de Ingeniería Mecánica Automotriz</h2>
            <h2>PRESENTA</h2>
            <h1>Reporte técnico de las características del Auto Antiguo</h1>
            @foreach ($vehiculo as $auto)
            <h2>Marca:  {{$auto->marca}}</h2>
            <h2>Submarca:   {{$auto->submarca}}</h2>
            <h2>Modelo: {{$auto->modelo}}</h2>
            <h2>Segmento:   {{$auto->segmento}}</h2>
            <h1>De acuerdo a los requerimientos establecidos por la Dirección General de Recaudación del Estado de Hidalgo</h1>
            <h3>Holograma de Auto Antiguo:  {{$auto->holograma}}</h3>
            <h3>Dictamen Número:  DIC-UPP/{{$auto->holograma}}</h3>
            @endforeach
        </div>
        <div class="page-break"></div>
        <div>
        @foreach ($vehiculo as $auto)
        <h3>Datos del Vehiculo</h3>
        <table style='border-collapse: collapse'>
            <tr>
                <td>Marca:  {{$auto->marca}}</td>
                <td><blockquote>Tipo:   {{$auto->tipo}}</blockquote></td>   
            </tr>
            <tr>
                <td>Submarca:  {{$auto->submarca}}</td>
                <td><blockquote>No. de serie:   {{$auto->numSerie}}</blockquote></td>
            </tr>
            <tr>
                <td>Modelo:  {{$auto->modelo}}</td>
                <td><blockquote>Propietario:   {{$auto->propietario}}</blockquote></td>
            </tr>
            <tr>
                <td>Segmento:  {{$auto->segmento}}</td>
                <td><blockquote>Holograma:   {{$auto->holograma}}</blockquote></td>
            </tr>
        </table>
        @endforeach

        @foreach ($areasConstructivas as $area)
            <ol>
                <li>{{$area->nombre}}</li>
                <li>{{$area->maximo}}</li>
                <li>{{$area->original}}</li>
                <li>{{$area->funcionalidad}}</li>
                @php
                    $cadenaActual = $area->sitActual;
                    $cadenaSugerencias = $area->sugerencias;
                    $separador = "-";
                    $listaActuales = explode($separador, $cadenaActual);
                    $listaSugerencias = explode($separador, $cadenaSugerencias);
                @endphp
                <ol type="A">
                    @foreach ($listaActuales as $actual)
                        <li>{{$actual}}</li>
                    @endforeach
                </ol>
                <ol type="*">
                    @foreach ($listaSugerencias as $sugerencia)
                        <li>{{$sugerencia}}</li>
                    @endforeach
                </ol>
            </ol>
        @endforeach
        </div>
    </main> 
</body>
</html>