<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CriteriosEspecificos;

class CriterioEspecificoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $criterioEspecifico = CriteriosEspecificos::all();
        return $criterioEspecifico;
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
        $criterioEspecifico = new CriteriosEspecificos();
        $criterioEspecifico->idCritEspecifico = $request->idCritEspecifico;
        $criterioEspecifico->nombre = $request->nombre;
        $criterioEspecifico->observacion = $request->observacion;
        $criterioEspecifico->idOriginalidad = $request->idOriginalidad;
        $criterioEspecifico->idEvFuncion = $request->idEvFuncion;
        $criterioEspecifico->idAreaEspecifica = $request->idAreaEspecifica;

        $criterioEspecifico->save();
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
        $criterioEspecifico = CriteriosEspecificos::findOrFail($request->id);
        $criterioEspecifico->idCritEspecifico = $request->idCritEspecifico;
        $criterioEspecifico->nombre = $request->nombre;
        $criterioEspecifico->observacion = $request->observacion;
        $criterioEspecifico->idOriginalidad = $request->idOriginalidad;
        $criterioEspecifico->idEvFuncion = $request->idEvFuncion;
        $criterioEspecifico->idAreaEspecifica = $request->idAreaEspecifica;

        $criterioEspecifico->save();

        return $criterioEspecifico;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $criterioEspecifico = CriteriosEspecificos::destroy($request->idCritEspecifico);
        return $criterioEspecifico;
    }
}
