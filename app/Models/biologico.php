<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class biologico extends Model
{
    use HasFactory;

    protected $table = 'biologicos';

    protected $fillable = [
        'nombre_bio',
        'cod_bio',
        'cantidad',
        'tipo_bio',
        'precio',
        'presentacion',
        'marca',
        'fecha_expiracion',
        'lote'
    ];
}
