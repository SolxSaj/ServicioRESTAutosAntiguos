<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{public_path('css/app.css')}}" rel="stylesheet">
    <title>Dictamen</title>
</head>
<body>
    <header>
        <img src="{{public_path('img/logoUPP.png')}}" alt="logo UPP" class="image-position" width="80px">
        <img src="{{public_path('img/logoHidalgo.png')}}" alt="logo Hidalgo" class="image-position" width="80px" style="float: right">
    </header>
    <footer>
        <h5>Carr. Pachuca - Cd. Sahagún km 20, Ex-Hacienda de Santa Bárbara</h5>
        <h5>Zempoala, Hidalgo, C.P. 43830, Tel: 771 5477 510</h5>
        <h5 >www.upp.edu.mx</h5>
    </footer>  
    <main>
        <div class="center-text">
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
        <table class="table-header">
            <tr>
                <td class="subtitle">Datos del vehiculo</td>
                <td>Marca:  {{$auto->marca}}</td>
                <td>Tipo:   {{$auto->tipo}}</td>   
            </tr>
            <tr>
                <td></td>
                <td>Submarca:  {{$auto->submarca}}</td>
                <td>No. de serie:   {{$auto->numSerie}}</td>
            </tr>
            <tr>
                <td></td>
                <td>Modelo:  {{$auto->modelo}}</td>
                <td>Propietario:   {{$auto->propietario}}</td>
            </tr>
            <tr>
                <td></td>
                <td>Segmento:  {{$auto->segmento}}</td>
                <td>Holograma:   {{$auto->holograma}}</td>
            </tr>
        </table>
        @endforeach
        <h3 class="subtittle">Evaluación obtenida</h3>
        <div>
            <table class="center">
                <tr>
                    <th class="border-table">Areas constructivas</th>
                    <th class="border-table">Maximo</th>
                    <th class="border-table">Originalidad</th>
                    <th class="border-table">Funcionalidad</th>
                </tr>
                @foreach ($areasConstructivas as $area)
                    <tr>
                        <td class="border-table">{{$area->nombre}}</td>
                        <td class="border-table">{{$area->maximo}}</td>
                        <td class="border-table">{{$area->original}}</td>
                        <td class="border-table">{{$area->funcionalidad}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <h3 class="subtittle">De los anterior se sugiere lo siguiente: </h3>
        @foreach ($areasConstructivas as $area)
            <h4 class="center-text">{{$area->nombre}} {{$area->original}}% de originalidad {{$area->funcionalidad}}% de funcionalidad</h4>
            <table class="center">
                <tr>
                    <th>Situación actual: </th>
                    <th>Sugerencias: </th>
                </tr>
                <tr>
                    @php
                        $cadenaActual = $area->sitActual;
                        $cadenaSugerencias = $area->sugerencias;
                        $separador = "-";
                        $listaActuales = explode($separador, $cadenaActual);
                        $listaSugerencias = explode($separador, $cadenaSugerencias);
                    @endphp
                    <td>
                        <ol type="*">
                            @foreach ($listaActuales as $actual)
                                <li>{{$actual}}</li>
                            @endforeach
                        </ol>
                    </td>
                    <td>
                        <ol type="*">
                            @foreach ($listaSugerencias as $sugerencia)
                                <li>{{$sugerencia}}</li>
                            @endforeach
                        </ol>
                    </td>
                </tr>
            </table>
        @endforeach
        </div>
    </main> 
</body>
</html>