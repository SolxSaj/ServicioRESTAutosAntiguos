<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\EvaluacionVehiculoController;
use App\Http\Controllers\VehiculoController;
//use Barryvdh\DomPDF\Facade as PDF;
use PDF;

class DictamenController extends Controller
{
    public function index(int $id, String $folio)
    {
        $vehiculo = VehiculoController::getVehiculoById($id);
        $areasConstructivas = EvaluacionVehiculoController::getAreaByFolio($folio);
        $pdf = PDF::loadView('dictamen_pdf', ['areasConstructivas'=>$areasConstructivas, 'vehiculo'=> $vehiculo]);
        return $pdf->stream();
    }
}
