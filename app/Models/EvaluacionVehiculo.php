<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionVehiculo extends Model
{
    use HasFactory;
    protected $table = 'evaluacionvehiculo';
    protected $fillable = [
        'idEvaluacion',
        'folio',
        'version',
        'idVehiculo'
    ];
}
