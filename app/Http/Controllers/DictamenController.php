<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\EvaluacionVehiculoController;
use App\Http\Controllers\VehiculoController;
use Barryvdh\DomPDF\PDF;

class DictamenController extends Controller
{
    public function index()
    {
        $vehiculo = VehiculoController::getVehiculoById(2);
        $areasConstructivas = EvaluacionVehiculoController::getAreaByFolio('1C22CD');
        $pdf = \PDF::loadView('dictamen_pdf', ['areasConstructivas'=>$areasConstructivas, 'vehiculo'=> $vehiculo]);
        return $pdf->stream();
        //return view('dictamen_pdf', compact('areasConstructivas'));
    }
}
