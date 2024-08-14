<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','apellido','numero_documento','numero_celular','ciudad','direccion','correo_electronico','imagen'];
}
