<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CriteriosEspecificos extends Model
{
    use HasFactory;
    protected $table = "criteriosespecificos";
    protected $fillable = [
        'idCritEspecifico',
        'nombre',
        'observacion',
        'originalidad',
        'evaluacion',
        'idAreaEspecifica'
    ];
}
