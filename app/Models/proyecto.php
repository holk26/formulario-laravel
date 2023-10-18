<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proyecto extends Model
{
    protected $table = 'proyectos';

    protected $fillable = [
        'nombre_proyecto',
        'contrato_convenio',
        'ciudad',
        'fecha_firma_contrato',
        'valor_contrato',
    ];
}
