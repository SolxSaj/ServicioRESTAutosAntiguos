<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculo = Vehiculo::all();
        return $vehiculo;
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
        $vehiculo = new Vehiculo();
        $vehiculo->idVehiculo = $request->idVehiculo;
        $vehiculo->marca = $request->marca;
        $vehiculo->submarca = $request->submarca;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->tipo = $request->tipo;
        $vehiculo->numSerie = $request->numSerie;
        $vehiculo->holograma = $request->holograma;
        $vehiculo->idPropietario = $request->idPropietario;
        $vehiculo->idSegmento = $request->idSegmento;

        $vehiculo->save();
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
        $vehiculo = Vehiculo::findOrFail($request->id);
        $vehiculo->idVehiculo = $request->idVehiculo;
        $vehiculo->marca = $request->marca;
        $vehiculo->submarca = $request->submarca;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->tipo = $request->tipo;
        $vehiculo->numSerie = $request->numSerie;
        $vehiculo->holograma = $request->holograma;
        $vehiculo->idPropietario = $request->idPropietario;
        $vehiculo->idSegmento = $request->idSegmento;

        $vehiculo->save();

        return $vehiculo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $vehiculo = Vehiculo::destroy($request->idVehiculo);
        return $vehiculo;
    }
}
