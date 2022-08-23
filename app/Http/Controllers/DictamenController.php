<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\EvaluacionVehiculoController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ImagenesController;
use Carbon\Carbon;
Use PDF;

class DictamenController extends Controller
{
    public function index(int $id, String $folio)
    {
        $vehiculo = VehiculoController::getVehiculoById($id);
        $areasConstructivas = EvaluacionVehiculoController::getAreaByFolio($folio);
        $imagenes = ImagenesController::index();
        $pdf = PDF::loadView('dictamen_pdf', ['areasConstructivas'=>$areasConstructivas, 'vehiculo'=> $vehiculo, 'imagenes'=>$imagenes]);
        return $pdf->stream();
    }

    public function predictamen(int $id, String $folio)
    {
        $diaActual = Carbon::now('America/Mexico_City')->locale('es')->isoFormat('dddd D \d\e MMMM \d\e\l Y');
        $vehiculo = VehiculoController::getVehiculoById($id);
        $areasConstructivas = EvaluacionVehiculoController::getAreaByFolio($folio);
        $pdf = PDF::loadView('predictamen_pdf', ['areasConstructivas'=>$areasConstructivas, 'vehiculo'=> $vehiculo, 'diaActual' => $diaActual]);
        return $pdf->stream();
    }

}
