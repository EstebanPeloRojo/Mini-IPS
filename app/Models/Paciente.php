<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'paciente';

    protected $fillable = [
        'nombre',
        'apellido',
        'Tipo_Doc',
        'Num_Doc',
        'fecha_nacimiento',
        'Email',
        'tipo_sangre',
        'fecha_exp_doc',
        'alergias',
        'sexo',
        'genero'
    ];
}
