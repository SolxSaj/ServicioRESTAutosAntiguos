<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AreaConstructivaEspecifica;

class AreaConstructivaEspecificaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areaConstructivaEspecifica = AreaConstructivaEspecifica::all();
        return $areaConstructivaEspecifica;
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
        $areaConstructivaEspecifica = new AreaConstructivaEspecifica();
        $areaConstructivaEspecifica->idAreaEspecifica = $request->idAreaEspecifica;
        $areaConstructivaEspecifica->nombre = $request->nombre;
        $areaConstructivaEspecifica->totalOriginalidad = $request->totalOriginalidad;
        $areaConstructivaEspecifica->totalFuncionalidad = $request->totalFuncionalidad;
        $areaConstructivaEspecifica->idArea = $request->idArea;

        $areaConstructivaEspecifica->save();

        return $areaConstructivaEspecifica;
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
        $areaConstructivaEspecifica = AreaConstructivaEspecifica::findOrFail($request->id);
        $areaConstructivaEspecifica->idAreaEspecifica = $request->idAreaEspecifica;
        $areaConstructivaEspecifica->nombre = $request->nombre;
        $areaConstructivaEspecifica->totalOriginalidad = $request->totalOriginalidad;
        $areaConstructivaEspecifica->totalFuncionalidad = $request->totalFuncionalidad;
        $areaConstructivaEspecifica->idArea = $request->idArea;

        $areaConstructivaEspecifica->save();

        return $areaConstructivaEspecifica;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $areaConstructivaEspecifica = AreaConstructivaEspecifica::destroy($request->idAreaEspecifica);
        return $areaConstructivaEspecifica;
    }
}
