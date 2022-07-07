<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AreaConstructiva;

class AreaConstructivaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areaConstructiva = AreaConstructiva::all();
        return $areaConstructiva;
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
        $areaConstructiva = new AreaConstructiva();
        $areaConstructiva->idArea = $request->idArea;
        $areaConstructiva->nombre = $request->nombre;
        $areaConstructiva->maximo = $request->maximo;
        $areaConstructiva->original = $request->original;
        $areaConstructiva->funcionalidad = $request->funcionalidad;
        $areaConstructiva->sitActual = $request->sitActual;
        $areaConstructiva->sugerencia = $request->sugerencia;
        $areaConstructiva->idEvaluacion = $request->idEvaluacion;

        $areaConstructiva->save();
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
        $areaConstructiva = AreaConstructiva::findOrFail($request->id);
        $areaConstructiva->idArea = $request->idArea;
        $areaConstructiva->nombre = $request->nombre;
        $areaConstructiva->maximo = $request->maximo;
        $areaConstructiva->original = $request->original;
        $areaConstructiva->funcionalidad = $request->funcionalidad;
        $areaConstructiva->sitActual = $request->sitActual;
        $areaConstructiva->sugerencia = $request->sugerencia;
        $areaConstructiva->idEvaluacion = $request->idEvaluacion;

        $areaConstructiva->save();

        return $areaConstructiva;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $areaConstructiva = AreaConstructiva::destroy($request->idArea);
        return $areaConstructiva;
    }
}
