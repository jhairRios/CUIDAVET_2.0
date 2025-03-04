<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'tel_alternativo',
        'direccion',
        'correo',
        'contrasenia',
        'id_rol',
        'f_nacimiento',
        'genero',
        'foto',
        'fecha_contratacion',
        'id_departamento',
        'dias_laborales',
        'turno',
        'salario',
        'id_moneda',
        'estado'
    ];
}
