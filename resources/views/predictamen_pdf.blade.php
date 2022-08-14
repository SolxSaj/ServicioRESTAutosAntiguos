<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{public_path('css/app.css')}}" rel="stylesheet">
    <title>Predictamen</title>
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
            <h4 style="text-align: right">Pachuca de Soto, Hgo. a {{$diaActual}}</h4>
            <h1>Preliminar Dictamen Auto Antiguo</h1>
            <h4>(Autorización para emplacamiento)</h4>
            <p>En base a la revisión llevada a cabo a la unidad descrita a continuación: </p>
            <div>
                @foreach ($vehiculo as $auto)
                <table class="center" style="width: 80%">
                    <tr>
                        <td>Marca:  {{$auto->marca}}</td>
                        <td>Tipo:   {{$auto->tipo}}</td>   
                    </tr>
                    <tr>
                        <td>Submarca:  {{$auto->submarca}}</td>
                        <td>No. de serie:   {{$auto->numSerie}}</td>
                    </tr>
                    <tr>
                        <td>Modelo:  {{$auto->modelo}}</td>
                        <td>Propietario:   {{$auto->propietario}}</td>
                    </tr>
                    <tr>
                        <td>Segmento:  {{$auto->segmento}}</td>
                        <td>Holograma:   {{$auto->holograma}}</td>
                    </tr>
                </table>
                @endforeach
            </div>
            <p>Y tomado en cuenta que el análisis es para un Vehiculo Sin Control Electronico observamos los siguientes valores</p>
            <div>
                <table class="center">
                    <tr>
                        <th class="border-table">Areas constructivas</th>
                        <th class="border-table">Maximo</th>
                        <th class="border-table">Originalidad</th>
                        <th class="border-table">Funcionalidad</th>
                    </tr>
                    @php
                        $totalMaximo = 0;
                        $totalOriginalidad = 0;
                        $totalFuncionalidad = 0;
                        foreach ($areasConstructivas as $area){
                            $totalMaximo += $area->maximo;
                            $totalOriginalidad += $area->original;
                            $totalFuncionalidad += $area->funcionalidad;
                        }     
                    @endphp
                    @foreach ($areasConstructivas as $area)
                        <tr>
                            <td class="border-table">{{$area->nombre}}</td>
                            <td class="border-table">{{$area->maximo}}</td>
                            <td class="border-table">{{$area->original}}</td>
                            <td class="border-table">{{$area->funcionalidad}}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td class="border-table"></td>
                        <td class="border-table">{{$totalMaximo}}</td>
                        <td class="border-table">{{$totalOriginalidad}}</td>
                        <td class="border-table">{{$totalFuncionalidad}}</td>
                    </tr>
                </table>
            </div>
            <p>
                Se dictamina que reúne las características de Auto Antiguo, enmarcados en los lineamientos a la ley de Control Vehicular del Estado de Hidalgo y los requerimientos establecidos por la
                Secretaria de Movilidad del Gobierno del Estado de Hidalgo.
            </p>
            <p>Por lo tanto, se emite el holograma de identificación de Auto Antiguo, número: </p>
            @foreach ($vehiculo as $auto)
                <h3>{{$auto->holograma}}</h3>
            @endforeach
            <p>Con este documento y la obtención del respectivo holograma, puede efectuar su trámite de placas de Auto Antiguo, en la sede Pachuca de la Oficina Hidalgo Pago.</p>
            <h3>ATENTAMENTE</h3>
            <h3>"UNA UNIVERSIDAD PARA LA INVESTIGACIÓN"</h3>
            <p>M. en I. ALBERTO HERNÁNDEZ MORALES</p>
            <p>TÉCNICO RESPONSABLE</p>
        </div>
    </main>
</body>
</html>