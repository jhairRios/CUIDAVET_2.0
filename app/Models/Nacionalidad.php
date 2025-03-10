<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nacionalidad extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];

    protected $table = 'nacionalidades'; // Asegúrate de que el nombre de la tabla sea correcto
}
