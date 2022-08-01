<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EvaluacionVehiculo;

class EvaluacionVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(String $busqueda, String $parametro)
    {
        if($busqueda == "folio"){
            $evaluacionVehiculo = EvaluacionVehiculo::where('folio', '=', $parametro)
                                                    ->get();
        }elseif($busqueda == "nombre"){
            $evaluacionVehiculo = EvaluacionVehiculo::join("vehiculo", "evaluacionvehiculo.idVehiculo", "=", "vehiculo.id")
                                                      ->join("propietario", "vehiculo.idPropietario", "=", "propietario.id")
                                                      ->where("propietario.nombre", "=", $parametro)
                                                      ->get("evaluacionvehiculo.*");
        }elseif($busqueda == "id"){
            $evaluacionVehiculo = EvaluacionVehiculo::where('id', '=', intval($parametro))
                                                    ->get();
        }elseif($busqueda == "serie"){
            $evaluacionVehiculo = EvaluacionVehiculo::join("vehiculo", "evaluacionvehiculo.idVehiculo", "=", "vehiculo.id")
                                                      ->where("vehiculo.numSerie", "=", $parametro)
                                                      ->get("evaluacionvehiculo.*");
        }else{
            $evaluacionVehiculo = response("Registros no encontrados");
        }
        return $evaluacionVehiculo;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evaluacionVehiculo = new EvaluacionVehiculo();
        $evaluacionVehiculo->idEvaluacion = $request->idEvaluacion;
        $evaluacionVehiculo->folio = $request->folio;
        $evaluacionVehiculo->version = $request->version;
        $evaluacionVehiculo->idVehiculo = $request->idVehiculo;

        $evaluacionVehiculo->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $evaluacionVehiculo = EvaluacionVehiculo::findOrFail($request->id);
        $evaluacionVehiculo->idEvaluacion = $request->idEvaluacion;
        $evaluacionVehiculo->folio = $request->folio;
        $evaluacionVehiculo->version = $request->version;
        $evaluacionVehiculo->idVehiculo = $request->idVehiculo;

        $evaluacionVehiculo->save();

        return $evaluacionVehiculo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $evaluacionVehiculo = EvaluacionVehiculo::destroy($request->idEvaluacion);
        return $evaluacionVehiculo;
    }
}
