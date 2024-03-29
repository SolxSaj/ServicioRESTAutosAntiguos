<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaConstructiva extends Model
{
    use HasFactory;
    protected $table = "areaconstructiva";
    protected $fillable = [
        'id',
        'nombre',
        'maximo',
        'original',
        'funcionalidad',
        'sitActual',
        'sugerencias',
        'idEvaluacion'
    ];
}
