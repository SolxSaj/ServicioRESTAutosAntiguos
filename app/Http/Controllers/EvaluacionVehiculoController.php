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
    public function index()
    {
        $evaluacionVehiculo = EvaluacionVehiculo::all();
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
