<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaConstructivaEspecifica extends Model
{
    use HasFactory;
    protected $fillable = [
        'idAreaEspecifica',
        'nombre',
        'totalOriginalidad',
        'totalFuncionalidad',
        'idArea'
    ];
}
