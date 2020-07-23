<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perro extends Model
{
    protected $table = 'perros';

    protected $fillable = [
        'nombre',
        'edad',
        'raza',
        'telefono',
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
