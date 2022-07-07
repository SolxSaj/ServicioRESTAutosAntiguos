<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holograma extends Model
{
    use HasFactory;
    protected $fillable = [
        'idHolograma',
        'holograma'
    ];
}
