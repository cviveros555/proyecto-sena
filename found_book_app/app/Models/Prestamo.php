<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_completo','numero_identificacion','direccion','telefono','fecha_solicitud','fecha_devolucion'];
}
