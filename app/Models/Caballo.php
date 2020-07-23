<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Caballo extends Model
{
    protected $table = 'caballos';

    protected $fillable = [
        'nombre',
        'edad',
        'raza',
        'telefono',
    ];

    protected $hidden = ['created_at', 'updated_at'];
}